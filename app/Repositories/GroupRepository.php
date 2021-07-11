<?php

namespace App\Repositories;

use App\Http\Action\CreateGroupAction;
use App\Http\Action\GetGroupAction;
use App\Http\Action\UpdateGroupAction;
use App\Models\Group;
use Illuminate\Http\Request;
//use Your Model

/**
 * Class GroupRepository.
 */
class GroupRepository
{
    public static function getGroup($search)
    {
        return GetGroupAction::perform($search);
    }
}
