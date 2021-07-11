<?php

namespace App\Http\Controllers;
use App\Repositories\Interfaces\GroupRepositoryInterface;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $groupRepository;
    //public function __construct(GroupRepository $groupRepository)
    //{
     //   $this->groupRepository = $groupRepository;
   // }
    public function __construct(GroupRepositoryInterface $groupRepository){
        $this->groupRepository = $groupRepository;
    }
    public function index(Request $request)
    {
        return $this->groupRepository->index($request);
    }

    public function create(Request $request)
    {
        return $this->groupRepository->create($request);
    }

    public function update(Request $request,$id)
    {
        return $this->groupRepository->update($request,$id);
    }

    public function delete($id)
    {
        return $this->groupRepository->update($id);
    }
}
