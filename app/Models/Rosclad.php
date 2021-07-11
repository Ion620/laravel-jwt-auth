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

    protected $hidden = ['created_at', 'updated_at'];

    public function groups()
    {
        return $this->belongsTo(Group::class,'id_group');
    }
    public function subjects()
    {
        return $this->belongsTo(Subject::class,'id_subj');
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class,'id_teacher');
    }
    public function auditoris()
    {
        return $this->belongsTo(Audience::class,'id_aud');
    }

}
