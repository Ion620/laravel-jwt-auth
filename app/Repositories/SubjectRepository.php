<?php


namespace App\Repositories;


use App\Http\Action\Subject\GetSubjectAction;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectRepository
{
    public static function getSubject($search)
    {
        return GetSubjectAction::perform($search);
    }
//    public function index(Request $request)
//    {
//        $param = $request->get('param');
//        $subj = Subject::where('name_subj', 'like', "%{$param}%")
//            ->OrWhere('numb_semest', 'like', "%{$param}%")
//            ->paginate(10);
//        return response()->json($subj);
//    }
//
//    public function create(Request $request){
//        $request->validate([
//            'name_subj',
//            'numb_semest'
//        ]);
//        return Subject::create($request->all());
//    }
//
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'name_subj',
//            'numb_semest'
//        ]);
//        $group = Subject::find($id);
//        $group->update($request->all());
//        return $group;
//    }
//    public function delete($id){
//        return Subject::destroy($id);
//    }
}
