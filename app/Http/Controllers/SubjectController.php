<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request){
        $param = $request->get('param');
        $subj = Subject::where('name_subj', 'like', "%{$param}%")
            ->OrWhere('numb_semest', 'like', "%{$param}%")
            ->paginate(10);
        return response()->json($subj);
=======
    public function index(){
        return Subject::all();
>>>>>>> origin/api
    }

    public function create(Request $request){
        $request->validate([
            'name_subj',
            'numb_semest'
        ]);
        return Subject::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_subj',
            'numb_semest'
        ]);
        $group = Subject::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Subject::destroy($id);
    }
}
