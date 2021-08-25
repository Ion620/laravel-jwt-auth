<?php

namespace App\Http\Controllers;
use App\Http\Requests\Teacher\CreateTeacherRequest;
use App\Http\Requests\Teacher\DeleteTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Repositories\TeacherRepository;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getTeacher(Request $request)
    {
        $response = TeacherRepository::getTeacher($request);
        return response()->json($response, $response['status_code']);
    }

    public function create(CreateTeacherRequest $request)
    {
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }


    // PUT /jobs/ID
    public function update($id, UpdateTeacherRequest $request)
    {
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }



    public function delete($id,DeleteTeacherRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }
}
