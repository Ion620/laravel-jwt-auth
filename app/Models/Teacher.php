<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table ='teacher';
    protected $fillable=[
        'name_teacher',
        'position',
        'scientific_degree'
    ];
    protected $hidden = ['created_at', 'updated_at'];

    public function rosclads()
    {
        return $this->hasMany(Rosclad::class,'id_teacher');
    }
}
