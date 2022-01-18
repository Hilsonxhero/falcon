<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Brand extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['title', 'media_id', 'category_id', 'slug', 'link', 'description', 'status'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function banner()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
