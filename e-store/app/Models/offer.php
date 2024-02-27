<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;

    protected $fillable = ['percent_of_discount', 'expiration_date'];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
