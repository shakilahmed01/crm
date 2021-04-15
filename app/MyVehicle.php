<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyVehicle extends Model
{
  protected $fillable=[
  'product_name',
  'product_price',
  'companyname',
  'product_quantity',
  'product_category',
  'product_subcategory',
  'product_description',
  'brand',
  'activation',
  'photo',
  'child_photo_1',
  'child_photo_2',
  'child_photo_3',
  'slug',
  'form_checked'
];


function relationBetweenCategory()
{

  return $this->hasOne('App\Category','id','product_category');
}
function relationBetweenSubCategory()
{
  return $this->hasOne('App\SubCategory','id','product_subcategory');
}









}
