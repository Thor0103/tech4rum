<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CommentController extends Controller
{
    public function showComment(Request $request)
    {
        return Comment::with(['topic','user'])->byComment($request)->get();
    }
    public function addComment(Request $request)
    {
        $comment = new Comment();
        $current = Carbon::now()->timezone('Asia/Phnom_Penh');
        $comment -> comment = $request->comment;
        $comment -> datetime = $current;
        $comment -> topic_id = $request->topic_id;
        $comment -> user_id = $request->user_id;
        $comment->save();
        if($comment->save())
        {
            return response()->json(['status'=> true,'message'=>'Thêm comment !']);
        }else{
            return response()->json(['status'=> false,'message'=>'Thêm comment thất bại !']);

        }
    }
}
