<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveCImage($value,'/category/');
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }   
}
