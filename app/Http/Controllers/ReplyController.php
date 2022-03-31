<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;

class ReplyController extends Controller
{
    public function Reply(Request $request)
    {
        return Reply::with(['comment','user'])->byIdComment($request)->get();
    }
}
