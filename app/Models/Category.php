<?php

namespace App\Models;

use Cocur\Slugify\Slugify;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Category extends Model{
    use HasFactory;
    use AsSource;
    use Sluggable;

    protected $fillable = ['title', 'slug'];

    protected $table = 'categories';

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function customizeSlugEngine(Slugify $engine, $attribute){
        $engine->activateRuleSet('turkish');
        return $engine;
    }

    public function posts(){
        return $this->hasMany('App\Models\Post', 'cat_id', 'id');
    }
}
