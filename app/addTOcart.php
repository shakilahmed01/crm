<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addTOcart extends Model
{
  protected $fillable=[
  'product_name',
  'usernumber',
  'quantity',
  'price',
  'from',
  'to',
  'booked_price'
  ];


  function relationBetweenStripe()
  {
    return $fillable->hasOne('App\User','id','name');
  }


  // function relationBetweenUser()
  // {
    // return $fillable->hasOne('App\User','id','id');
  // }



}
