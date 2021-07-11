<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Repositories\TeacherRepository;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teacherRepository;
    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }
    public function index(Request $request)
    {
        return $this->teacherRepository->index($request);
    }
    public function create(Request $request)
    {
        return $this->teacherRepository->create($request);
    }
    public function update(Request $request,$id)
    {
        return $this->teacherRepository->update($request,$id);
    }
    public function delete($id)
    {
        return $this->teacherRepository->delete($id);
    }
}
