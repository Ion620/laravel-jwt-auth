<?php

namespace App\Http\Controllers;
use App\Http\Requests\Subject\CreateSubjectRequest;
use App\Http\Requests\Subject\DeleteSubjectRequest;
use App\Http\Requests\Subject\UpdateSubjectRequest;
use App\Repositories\SubjectRepository;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getSubject(Request $request)
    {
        $response = SubjectRepository::getSubject($request);
        return response()->json($response, $response['status_code']);
    }

    public function create(CreateSubjectRequest $request)
    {
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }


    // PUT /jobs/ID
    public function update($id, UpdateSubjectRequest $request)
    {
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }



    public function delete($id,DeleteSubjectRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }

}
