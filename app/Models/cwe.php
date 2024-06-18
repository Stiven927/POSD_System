<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cwe extends Model
{
    protected $fillable = [
        'id',
        'CWE',
        'Titolo',
        'Descrizione',
    ];
    use HasFactory;
    protected $table = 'cwe';
}
