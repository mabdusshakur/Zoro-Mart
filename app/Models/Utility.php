<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotline',
        'about',
        'email',
        'logo',
        'favicon',
        'web_name',
    ];
}
