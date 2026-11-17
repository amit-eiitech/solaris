<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'scope',
        'description',
    ];

    public function news(): MorphToMany
    {
        return $this->morphedByMany(News::class, 'categorizable', 'categorizables');
    }

    public function events(): MorphToMany
    {
        return $this->morphedByMany(Event::class, 'categorizable', 'categorizables');
    }

    public function blogPosts(): MorphToMany
    {
        return $this->morphedByMany(BlogPost::class, 'categorizable', 'categorizables');
    }
}
