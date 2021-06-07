<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table ='subj';
    protected $fillable=[
        'name_subj',
        'numb_semest'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
