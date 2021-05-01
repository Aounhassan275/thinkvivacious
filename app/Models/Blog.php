<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'image','description','category_id','admin_id','views','name'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveBImage($value,'/blog/');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }  
    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }  
    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
