<?php


namespace App\Repositories;


use App\Http\Action\Teacher\GetTeacherAction;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherRepository
{
    public static function getTeacher($search)
    {
        return GetTeacherAction::perform($search);
    }
//    public function index(Request $request)
//    {
//        $param = $request->get('param');
//        $teacher = Teacher::where('name_teacher', 'like', "%{$param}%")
//            ->orWhere('position', 'like', "%{$param}%")
//            ->orWhere('scientific_degree', 'like', "%{$param}%")
//            ->paginate(5);
//        return response()->json($teacher);
//    }
//
//    public function create(Request $request){
//        $request->validate([
//            'name_teacher',
//            'position',
//            'scientific_degree'
//        ]);
//        return Teacher::create($request->all());
//    }
//
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'name_teacher',
//            'position',
//            'scientific_degree'
//        ]);
//        $group = Teacher::find($id);
//        $group->update($request->all());
//        return $group;
//    }
//    public function delete($id){
//        return Teacher::destroy($id);
//    }
}
