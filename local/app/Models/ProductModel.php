<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table ='products';
    protected $primaryKey ='prod_id';
    protected $guarded =[];

    public function getImageProduct(){
        return $this->hasOne(ProductImageModel::class,'id');

    }
}
