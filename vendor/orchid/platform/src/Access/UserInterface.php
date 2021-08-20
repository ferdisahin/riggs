<?php

declare(strict_types=1);

namespace Orchid\Access;

use IteratorAggregate;

interface UserInterface
{
    /**
     * Returns all role for the user.
     *
     * @return IteratorAggregate
     */
    public function getRoles();
}
