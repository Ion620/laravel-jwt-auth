<?php

namespace App\Repositories;

use App\Models\Group;
use App\Repositories\Interfaces\GroupRepositoryInterface;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class GroupRepository.
 */
class GroupRepository implements GroupRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */

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
