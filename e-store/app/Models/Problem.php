<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $fillable = [
        'Text_of_problem',
        'file',
        'Status',
        'User_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
