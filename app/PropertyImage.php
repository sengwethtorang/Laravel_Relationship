<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    //
    protected $table = 'property_image';

    public function image(){
        return $this->belongsTo(Image::class,'id_image');
    }

}
