<?php

namespace App\Http\Controllers;
use App\Models\Rosclad;
use Illuminate\Http\Request;

class RoscladController extends Controller
{
    public function index(){
        return Rosclad::all();
    }

    public function create(Request $request){
        $request->validate([
            'id_group',
            'id_subj',
            'id_teacher',
            'id_aud',
            'numb_lec',
            'day'
        ]);
        return Rosclad::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_group',
            'id_subj',
            'id_teacher',
            'id_aud',
            'numb_lec',
            'day'
        ]);
        $group = Rosclad::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Rosclad::destroy($id);
    }
}
