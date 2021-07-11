<?php


namespace App\Repositories\Interfaces;


use Illuminate\Http\Request;

interface GroupRepositoryInterface
{
    public function index(Request $request);
}
