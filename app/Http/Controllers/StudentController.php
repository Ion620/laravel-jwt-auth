<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index(Request $request)
    {
        $param = $request->get('param');
        $student = Student::where('name_student', 'like', "%{$param}%")
            ->paginate(10);
        return response()->json($student);
    }

    public function create(Request $request){
        $request->validate([
            'id_group',
            'name_student'
        ]);
        return Student::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_group',
            'name_student'
        ]);
        $group = Student::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Student::destroy($id);
    }
}
