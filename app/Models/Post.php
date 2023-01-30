<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    // protected $with = ['parent', 'children'];

    // public function parent(){
    //     return $this->belongsTo(self::class, 'parent_id');
    // }
    
    // public function children(){
    //     return $this->hasMany(self::class, 'children_id');
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function PortfolioPosts()
    {
        $posts = self::where('parent_id', 1)->orderBy('created_at', 'DESC')->get();
        return $posts;
    }

    public function ProjectPosts()
    {
        $posts = self::where('parent_id', 2)->orderBy('created_at', 'DESC')->get();
        return $posts;
    }

}
