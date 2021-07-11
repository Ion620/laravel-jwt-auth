<?php


namespace App\Repositories;


use App\Models\Rosclad;
use Illuminate\Http\Request;

class RoscladRepository
{
    public function index(Request $request)
    {
        $param = $request->get('param');
        $rosclad = Rosclad::where('numb_lec', 'like', "%{$param}%")
            ->OrWhere('day', 'like', "%{$param}%")
            ->paginate(10);
        return response()->json($rosclad);
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
