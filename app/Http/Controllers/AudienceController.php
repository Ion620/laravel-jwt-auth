<?php

namespace App\Http\Controllers;
use App\Models\Audience;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    public function index(){
        return Audience::all();
    }

    public function create(Request $request){
        $request->validate([
            'capacity',
            'name_aud'
        ]);
        return Audience::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'capacity',
            'name_aud'
        ]);
        $group = Audience::find($id);
        $group->update($request->all());
        return $group;
    }
    public function delete($id){
        return Audience::destroy($id);
    }
}
