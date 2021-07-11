<?php

namespace App\Http\Controllers;
use App\Models\Rosclad;
use App\Repositories\RoscladRepository;
use Illuminate\Http\Request;

class RoscladController extends Controller
{
    protected $roscladRepository;
    public function __construct(RoscladRepository $roscladRepository)
    {
        $this->roscladRepository = $roscladRepository;
    }
    public function index(Request $request)
    {
        return $this->roscladRepository->index($request);
    }
    public function create(Request $request)
    {
        return $this->roscladRepository->create($request);
    }
    public function update(Request $request,$id)
    {
        return $this->roscladRepository->update($request,$id);
    }
    public function delete($id)
    {
        return $this->roscladRepository->update($id);
    }
}
