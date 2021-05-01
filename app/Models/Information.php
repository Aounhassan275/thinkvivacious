<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'phone','image','email','about','address','hdescription','bcdescription','bdescription','cdescription',
        'adescription','pdescription','fb','insta','twitter','pt'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveIImage($value,'/information/');
    }
}
