<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
  /** @use HasFactory<\Database\Factories\CustomerFactory> */
  use HasFactory;

  public function orders(): HasMany
  {
    return $this->hasMany(Order::class);
  }

  public function order()
  {
    return $this->hasOne(Order::class);
  }

  public function latestOrder()
  {
    return $this->order()->latestOfMany();
  }

  public function orderPrice()
  {
    return $this->order()->ofMany('price', 'max');
  }
}