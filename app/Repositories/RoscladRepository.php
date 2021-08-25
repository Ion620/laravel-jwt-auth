<?php


namespace App\Repositories;


use App\Http\Action\Rosclad\GetRoscladAction;
use App\Models\Rosclad;
use Illuminate\Http\Request;

class RoscladRepository
{
    public static function getRosclad($search)
    {
        return GetRoscladAction::perform($search);
    }

}
