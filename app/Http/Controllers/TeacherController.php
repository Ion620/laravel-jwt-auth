<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request){
        $param = $request->get('param');
        $teacher = Teacher::where('name_teacher', 'like', "%{$param}%")
        ->orWhere('position', 'like', "%{$param}%")
        ->orWhere('scientific_degree', 'like', "%{$param}%")
        ->paginate(10)
        ->get();

        return response()->json($teacher);
    }

    public function create(Request $request){
        $request->validate([
            'name_teacher',
            'position',
            'scientific_degree'
        ]);
        return Teacher::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_teacher',
            'position',
            'scientific_degree'
        ]);
        $group = Teacher::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Teacher::destroy($id);
    }
}
