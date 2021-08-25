<?php

namespace App\Http\Controllers;
use App\Http\Action\Student\CreateStudentAction;
use App\Http\Action\Student\DeleteStudentAction;
use App\Http\Action\Student\UpdateStudentAction;
use App\Http\Requests\Student\CreateStudentRequest;
use App\Http\Requests\Student\DeleteStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Student;
use App\Repositories\StudentRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudent(Request $request)
    {
        $response = StudentRepository::getStudent($request);
        return response()->json($response, $response['status_code']);
    }

    public function create(CreateStudentRequest $request)
    {
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }


    // PUT /jobs/ID
    public function update($id, UpdateStudentRequest $request)
    {
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response, $response['status_code']);
    }



    public function delete($id,DeleteStudentRequest $request){
        $request->id=$id;
        $response = $request->perform();
        return response()->json($response,$response['status_code']);
    }



}
