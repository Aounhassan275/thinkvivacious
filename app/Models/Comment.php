<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name','email','comment','blog_id','image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveCImage($value,'/comment/');
    }
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    } 
}
