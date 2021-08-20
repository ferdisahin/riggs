<?php

declare(strict_types=1);

namespace Orchid\Access;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use Orchid\Platform\Dashboard;
use Orchid\Platform\Events\AddRoleEvent;
use Orchid\Platform\Events\RemoveRoleEvent;
use Orchid\Platform\Models\Role;

trait UserAccess
{
    use StatusAccess;

    /**
     * @var null|\Illuminate\Support\Collection
     */
    private $cachePermissions;

    /**
     * @return Collection
     */
    public function getRoles()
    {
        return $this->roles()->get();
    }

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Dashboard::model(Role::class), 'role_users', 'user_id', 'role_id');
    }

    /**
     * @param Role|int|string $role
     *
     * @return bool
     */
    public function inRole($role): bool
    {
        $role = Arr::first($this->roles, static function ($instance) use ($role) {
            if ($role instanceof RoleInterface) {
                return $instance->getRoleId() === $role->getRoleId();
            }
            if ($instance->getRoleId() === $role || $instance->getRoleSlug() === $role) {
                return true;
            }

            return false;
        });

        return $role !== null;
    }

    /**
     * @param string $permit
     * @param bool   $cache
     *
     * @return bool
     */
    public function hasAccess(string $permit, bool $cache = true): bool
    {
        if (! $cache || $this->cachePermissions === null) {
            $this->cachePermissions = $this->roles()
                ->pluck('permissions')
                ->prepend($this->permissions)
                ->filter(function ($permission) {
                    return is_array($permission);
                });
        }

        return $this->cachePermissions
            ->filter(function (array $permissions) use ($permit) {
                return isset($permissions[$permit]) && $permissions[$permit];
            })
            ->isNotEmpty();
    }

    /**
     * @param Model $role
     *
     * @return Model
     */
    public function addRole(Model $role): Model
    {
        $result = $this->roles()->save($role);

        $this->eventAddRole($role);

        return $result;
    }

    /**
     * Remove Role Slug.
     *
     * @param string $slug
     *
     * @return int
     */
    public function removeRoleBySlug(string $slug): int
    {
        $role = $this->roles()->where('slug', $slug)->first();

        if ($role === null) {
            return 0;
        }

        $this->eventRemoveRole($role);

        return $this->roles()->detach($role);
    }

    /**
     * @param RoleInterface $role
     *
     * @return int|null
     */
    public function removeRole(RoleInterface $role): int
    {
        return $this->removeRoleBySlug($role->getRoleSlug());
    }

    /**
     * @param array|null $roles
     *
     * @return $this
     */
    public function replaceRoles(?array $roles = [])
    {
        $this->roles()->detach();

        $this->eventRemoveRole($roles);

        $this->roles()->attach($roles);

        $this->eventAddRole($roles);

        return $this;
    }

    /**
     * @param Model|RoleInterface|RoleInterface[] $roles
     */
    public function eventAddRole($roles)
    {
        event(new AddRoleEvent($this, $roles));
    }

    /**
     * @param Model|RoleInterface|RoleInterface[] $roles
     */
    public function eventRemoveRole($roles)
    {
        event(new RemoveRoleEvent($this, $roles));
    }

    /**
     * @throws Exception
     *
     * @return bool
     *
     */
    public function delete(): bool
    {
        $isSoftDeleted = array_key_exists(SoftDeletes::class, class_uses($this));

        if ($this->exists && ! $isSoftDeleted) {
            $this->roles()->detach();
        }

        return parent::delete();
    }

    /**
     * @return self
     */
    public function clearCachePermission(): self
    {
        $this->cachePermissions = null;

        return $this;
    }
}
