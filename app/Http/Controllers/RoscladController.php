<?php

namespace App\Http\Controllers;
use App\Http\Requests\Rosclad\CreateRoscladRequest;
use App\Http\Requests\Rosclad\DeleteRoscladRequest;
use App\Http\Requests\Rosclad\UpdateRoscladRequest;
use App\Models\Rosclad;
use App\Repositories\RoscladRepository;
use Illuminate\Http\Request;

class RoscladController extends Controller
{
    public function getRosclad(Request $request)
    {
        $response = RoscladRepository::getRosclad($request);
        return response()->json($response, $response['status_code']);
    }

    public function create(CreateRoscladRequest $request)
    {
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }


    // PUT /jobs/ID
    public function update($id, UpdateRoscladRequest $request)
    {
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }



    public function delete($id,DeleteRoscladRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }
}
