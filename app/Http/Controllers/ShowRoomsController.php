<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // return response('A listing of Rooms',200);
        $rooms = DB::table('rooms')-> get();
        if($request->query('id') !==nul){
            $rooms=$rooms->where('room_type_id',$request->query('id'));
        }
        return response() ->json($rooms);
    }
}
