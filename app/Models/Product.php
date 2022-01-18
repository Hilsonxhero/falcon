<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'category_id',
        'brand_id',
        'color_id',
        'shipment_id',
        'guarantee_id',
        'media_id',
        'title',
        'title_en',
        'slug',
        'body',
        'description',
        'price',
        'discount',
        'count',
        'weight',
        'order_count',
        'view',
        'status',
        'original',
        'special',
        'confirmation_status'

    ];

    protected $appends = ['banner_src'];

    const CONFIRMATION_STATUS_ACCEPTED = 'accepted';
    const CONFIRMATION_STATUS_REJECTED = 'rejected';
    const CONFIRMATION_STATUS_PENDING = 'pending';

    static $confirmationStatuses = [
        self::CONFIRMATION_STATUS_ACCEPTED,
        self::CONFIRMATION_STATUS_REJECTED,
        self::CONFIRMATION_STATUS_PENDING
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function banner()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function getBannerSrcAttribute()
    {
        // dd($this->banner);
        // return $this->banner->thumb();
        // return $this->banner->id;
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
