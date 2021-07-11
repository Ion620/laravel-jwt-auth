<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\Rosclad;
use App\Repositories\PdfRepository;
use Illuminate\Support\Facades\DB;
use PDF;
use Mail;
use App\Models\Student;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    protected $pdfRepository;
    public function __construct(PdfRepository $pdfRepository)
    {
        $this->pdfRepository = $pdfRepository;
    }
    public function index(){
        return $this->pdfRepository->index();
    }


}
