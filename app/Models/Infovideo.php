<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infovideo extends Model
{
    use HasFactory;

    protected $table = 'infosvideos';

    protected $fillable = [
        'name',
        'new_name',
        'date',
        'description',
        'user_name',
        'url',
        'weight',
    ];
}
