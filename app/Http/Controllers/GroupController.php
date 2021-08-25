<?php

namespace App\Http\Controllers;
use App\Http\Requests\Group\CreateGroupRequest;
use App\Http\Requests\Group\DeleteGroupRequest;
use App\Http\Requests\Group\UpdateGroupRequest;
use App\Repositories\GroupRepository;
use App\Repositories\RoscladRepository;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class GroupController extends Controller
{
    public function getGroup(Request $request)
    {
        $response = GroupRepository::getGroup($request);
        return response()->json($response, $response['status_code']);
    }

    public function create(CreateGroupRequest $request)
    {
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }


    // PUT /jobs/ID
    public function update($id, UpdateGroupRequest $request)
    {
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }

    public function delete($id,DeleteGroupRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }

}
