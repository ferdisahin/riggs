<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Cocur\Slugify\Slugify;

class Post extends Model{
    use HasFactory;
    use AsSource;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'body', 'cat_id', 'cover'];

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

    public function category(){
        return $this->hasOne('App\Models\Category', 'id', 'cat_id');
    }
}
