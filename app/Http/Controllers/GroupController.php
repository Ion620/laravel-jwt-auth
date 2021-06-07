<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        return Group::all();
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
