<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index(Request $request)
    {
        $param = $request->get('param');
        $group = Group::where('name_group', 'like', "%{$param}%")
            ->paginate(10);
        return response()->json($group);
    }
    public function create(Request $request){
        $request->validate([
            'name_group'=>'required'
        ]);
        return Group::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_group'=>'required'
        ]);
        $group = Group::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Group::destroy($id);
    }
}
