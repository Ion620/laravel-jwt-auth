<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Repositories\StudentRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentRepository;
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function index(Request $request)
    {
        return $this->studentRepository->index($request);
    }
    public function create(Request $request)
    {
        return $this->studentRepository->create($request);
    }
    public function update(Request $request,$id)
    {
        return $this->studentRepository->update($request,$id);
    }
    public function delete($id)
    {
        return $this->studentRepository->update($id);
    }



}
