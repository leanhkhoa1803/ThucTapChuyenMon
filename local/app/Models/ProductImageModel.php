<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImageModel extends Model
{
    protected $table ='product_image';
    protected $primaryKey ='id';
    //protected $filltable =['image'];
    protected $guarded =[];
}
