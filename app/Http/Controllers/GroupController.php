<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\DeleteGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
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

    //public function delete(DeleteGroupRequest $request,$id){
     //   $response = $request->perform($id);
      //  return response()->json($response,$response['status_code']);
    //}

    public function delete($id,DeleteGroupRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }

}
