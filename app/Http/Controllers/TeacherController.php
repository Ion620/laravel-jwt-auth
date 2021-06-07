<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return Teacher::all();
    }

    public function create(Request $request){
        $request->validate([
            'name_teacher',
            'position',
            'scientific degree'
        ]);
        return Teacher::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_teacher',
            'position',
            'scientific degree'
        ]);
        $group = Teacher::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Teacher::destroy($id);
    }
}
