<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Resources\SessionResource;

class SessionController extends Controller
{
    public function create(Request $request)
    {
    	$session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);

    	return new SessionResource($session);
    }
}
