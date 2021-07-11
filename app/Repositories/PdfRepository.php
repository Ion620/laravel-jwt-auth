<?php


namespace App\Repositories;
use App\Models\Group;
use App\Models\Rosclad;
use Illuminate\Support\Facades\DB;
use PDF;
use Mail;
use App\Models\Student;
use Illuminate\Http\Request;

class PdfRepository
{
    public function index()
    {
        $data["group"]=Group::all();
        $data["student"]=Student::all();
        $data["rosclad"]=Rosclad::all();
        //query()
        //  ->join('student','group.id','=','student.id_group')
        //->select('student.name_student','group.name_group');


        $pdf = PDF::loadView('emails.Email', $data);


        Mail::send('emails.email_send', [], function($message) use($pdf) {
            $message->to("ioncostinean61@gmail.com", "ioncostinean61@gmail.com")
                ->subject("From Ion")
                ->attachData($pdf->output(), "rosclad.pdf");
        });

        return response()->json(['message' => 'Email успішно відправлено']);
    }
}
