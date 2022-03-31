<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;


class ReplyApiController extends Controller
{
    //
    public function getAllReply(){
        if(Reply::all()->count() > 0){
            return response()->json(Reply::all(), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getReplyById($id){
        if(Reply::find($id)->count() > 0){
            return response()->json([
                'reply' => Reply::find($id),
                'user' => User :: find(Reply::find($id)->user_id) -> fullname,
            ], 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getReplyByCommentId($id_comment){
        if(Reply::where('comment_id', $id_comment)->count() > 0){
            $data = Reply::where('comment_id', $id_comment)->get();
            $res  = array();
            foreach($data as $item){
                $res[] = array(
                    'reply' => $item,
                    'user' => User :: find($item->user_id) -> fullname,
                );
            }
            return response()->json($res, 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getReplyByUserId($id_user){
        if(Reply::where('user_id', $id_user)->count() > 0){
            $data = Reply::where('user_id', $id_user)->get();
            $res  = array();
            foreach($data as $item){
                $res[] = array(
                    'reply' => $item,
                    'user' => User :: find($item->user_id) -> fullname,
                );
            }
            return response()->json($res, 200);
        }
        else{
            return response('No data', 200);
        }
    }


    public function updateReply($id_reply, Request $request){
        $data = $request->all();
        if(Reply::find($id_reply)){
            $reply = Reply::find($id_reply);
            $reply -> reply = $data['reply'];
            $reply -> updated_at = date( 'Y-m-d H:i:s' );
            $reply -> save();
            return response() -> json ('Update success', 200);
        }
        else{
            return response() -> json ('Update failed', 200);
        }
    }

    public function createReply(Request $request){
        $data = $request->all();
        $reply = new Reply();
        $reply -> user_id = $data['user_id'];
        $reply -> reply = $data['reply'];
        $reply -> datetime = date( 'Y-m-d H:i:s' );
        $reply -> comment_id = $data['comment_id'];
        $reply -> datetime = date( 'Y-m-d H:i:s' );
        $reply -> created_at = date( 'Y-m-d H:i:s' );
        $reply -> updated_at = date( 'Y-m-d H:i:s' );
        if($reply -> save()){
            return response() -> json ('Create success', 200);
        }
        else{
            return response() -> json ('Create failed', 200);
        }
    }

    public function deleteReply($id_reply){
        if(Reply::find($id_reply)){
            Reply::find($id_reply)->delete();
            return response() -> json ('Delete success', 200);
        }
        else{
            return response() -> json ('Delete failed', 200);
        }
    }
}
