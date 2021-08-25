<?php


namespace App\Repositories;


use App\Http\Action\Audience\GetAudienceAction;
use App\Models\Audience;
use Illuminate\Http\Request;

class AudienceRepository
{
    public static function getAudience($search)
    {
        return GetAudienceAction::perform($search);
    }
//    public function index(Request $request)
//    {
//        $param = $request->get('param');
//        $audience = Audience::where('capacity', 'like', "%{$param}%")
//            ->OrWhere('name_aud', 'like', "%{$param}%")
//            ->paginate(10);
//        return response()->json($audience);
//    }
//
//    public function create(Request $request){
//        $request->validate([
//            'capacity',
//            'name_aud'
//        ]);
//        return Audience::create($request->all());
//    }
//
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'capacity',
//            'name_aud'
//        ]);
//        $group = Audience::find($id);
//        $group->update($request->all());
//        return $group;
//    }
//    public function delete($id){
//        return Audience::destroy($id);
//    }
}
