<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{

  protected $table = 'pagamenti';
  protected $fillable = [
    "id",
    "status",
    "price"
  ];

}
