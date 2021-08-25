<?php

namespace App\Http\Action\Group;

use App\Models\Group;
use Illuminate\Support\Facades\DB;

class GetGroupAction
{
    /**
     * @OA\Get (
     *     path="/api/group",
     *     operationId="groupAll",
     *     tags={"groups"},
     *     summary="Display a listing of the resource",
     *      @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="The page number",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything"
     *     ),
     * )
     */
    private $group;
    private $search;
    public function __construct($search)
    {
        $this->search = $search;
    }

    public static function perform($search)
    {
        return (new static($search))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'groups'          => $this->group
            ];
        }catch (\Throwable $exception){
            return [
                'status_code'   => 422,
                'groups'          => [],
                'error'         => $exception->getMessage()
            ];
        }
    }
    public function index(){
        $param = $this->search->get('param');
        $this->group = Group::where('name_group', 'like', "%{$param}%")
            ->paginate(10);
        return $this;
    }
}
