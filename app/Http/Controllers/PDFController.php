<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use PDF;
use Mail;
use App\Models\Student;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {

        $data["email"] = "ioncostinean61@gmail.com";
        $data["title"] = "From Ion";
        $data["student"] = Student::all();
        $data["group"]=Group::all();
            //->join('student','group.id','=','student.id_group')
            //->select('student.name_student','group.name_group');


        $pdf = PDF::loadView('emails.Email', $data);


        Mail::send('emails.Email', $data, function($message) use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "text.pdf");
        });

        return response()->json(['message' => 'Email успішно відправлено']);
    }


}
