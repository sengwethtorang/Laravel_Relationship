<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'property';

    //
    public function propertyImage(){
        return $this->hasMany(PropertyImage::class,'id_property');
    }


}
