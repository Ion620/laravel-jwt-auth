<?php

namespace App\Http\Controllers;
use App\Repositories\SubjectRepository;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    protected $subjectRepository;
    public function __construct(SubjectRepository $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }
    public function index(Request $request)
    {
        return $this->subjectRepository->index($request);
    }
    public function create(Request $request)
    {
        return $this->subjectRepository->create($request);
    }
    public function update(Request $request,$id)
    {
        return $this->subjectRepository->update($request,$id);
    }
    public function delete($id)
    {
        return $this->subjectRepository->delete($id);
    }

}
