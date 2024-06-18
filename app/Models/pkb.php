<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkb extends Model
{
    protected $fillable = [
        'id',
        'Pattern',
        'Strategia',
        'CWE',
    ];
    use HasFactory;
    protected $table = 'pkb';

}
