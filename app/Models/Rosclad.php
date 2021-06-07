<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rosclad extends Model
{
    use HasFactory;
    protected $table='rosklad';
    protected $fillable=[
        'id_group',
        'id_subj',
        'id_teacher',
        'id_aud',
        'numb_lec',
        'day'
    ];
}
