<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use HasFactory, SoftDeletes;

    const CREATE_ACTION = '1';
    const UPDATE_ACTION = '2';
    const DELETE_ACTION = '3';
    const CHANGE_STATUS_ACTION = '4';

    static $actions = [
        self::CREATE_ACTION,
        self::UPDATE_ACTION,
        self::DELETE_ACTION,
        self::CHANGE_STATUS_ACTION
    ];


    // protected $appends = [
    //     'created_at',
    // ];


    protected  $fillable = ['user_id', 'url', 'action', 'title'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getCreatedAtAttribute()
    // {
    //     return verta($this->attributes['created_at'])->formatDifference();
    // }
}
