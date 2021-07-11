<?php

namespace App\Http\Controllers;
use App\Models\Audience;
use App\Repositories\AudienceRepository;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    protected $audienceRepository;
    public function __construct(AudienceRepository $audienceRepository)
    {
        $this->audienceRepository = $audienceRepository;
    }
    public function index(Request $request)
    {
        return $this->audienceRepository->index($request);
    }
    public function create(Request $request)
    {
        return $this->audienceRepository->create($request);
    }
    public function update(Request $request,$id)
    {
        return $this->audienceRepository->update($request,$id);
    }
    public function delete($id)
    {
        return $this->audienceRepository->update($id);
    }
}
