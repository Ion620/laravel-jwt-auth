<?php


namespace App\Repositories;

use App\Http\Action\Student\GetStudentAction;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentRepository
{
    public static function getStudent($search)
    {
        return GetStudentAction::perform($search);
    }
}
