<?php

namespace App\Http\Controllers;
use App\Http\Requests\Audience\CreateAudienceRequest;
use App\Http\Requests\Audience\DeleteAudienceRequest;
use App\Http\Requests\Audience\UpdateAudienceRequest;
use App\Models\Audience;
use App\Repositories\AudienceRepository;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    public function getAudience(Request $request)
    {
        $response = AudienceRepository::getAudience($request);
        return response()->json($response, $response['status_code']);
    }

    public function create(CreateAudienceRequest $request)
    {
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }


    // PUT /jobs/ID
    public function update($id, UpdateAudienceRequest $request)
    {
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }



    public function delete($id,DeleteAudienceRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }
}
