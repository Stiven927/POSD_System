<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class privacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'privacy',
    ];
    protected $table = 'privacy';
}
