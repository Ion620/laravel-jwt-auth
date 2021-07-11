<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $fillable = [
        'id_group',
        'name_student'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function students()
    {
        return $this->belongsTo(Group::class,'id_group');
    }
}
