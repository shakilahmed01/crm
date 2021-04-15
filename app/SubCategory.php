<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $fillable=[
    'subcategory_name',
    'category_id',
    'created_at',

  ];
}
