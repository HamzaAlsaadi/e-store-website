<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class couppon_order extends Model
{
    use HasFactory;
    protected $fillable = ['couppon_id ', 'order_id '];
}
