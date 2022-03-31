<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentApiController extends Controller
{
    //

    public function getAllComment(){
        if(Comment::all()->count() > 0){
            return response()->json(Comment::all(), 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getCommentById($id){
        if(Comment::find($id)->count() > 0){
            return response()->json([
                'comment' => Comment::find($id),
                'user' => User :: find(Comment::find($id)->user_id) -> fullname,
            ], 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getCommentByUserId($id_user){
        if(Comment::where('user_id', $id_user)->count() > 0){
            $data = Comment::where('user_id', $id_user)->get();
            $res  = array();
            foreach($data as $item){
                $res[] = array(
                    'comment' => $item,
                    'user' => User :: find($item->user_id) -> fullname,
                );
            }
            return response()->json($res, 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function getCommentByTopicId($id_topic){
        if(Comment::where('topic_id', $id_topic)->count() > 0){
            $data = Comment::where('topic_id', $id_topic)->get();
            $res  = array();
            foreach($data as $item){
                $res[] = array(
                    'comment' => $item,
                    'user' => User :: find($item->user_id) -> fullname,
                );
            }
            return response()->json($res, 200);
        }
        else{
            return response('No data', 200);
        }
    }

    public function updateComment($id_comment, Request $request){
        $data = $request->all();
        if(Comment::find($id_comment)){
            $comment = Comment::find($id_comment);
            $comment -> comment = $data['comment'];
            $comment -> updated_at = date( 'Y-m-d H:i:s' );
            $comment -> save();
            return response() -> json ('Update success', 200);
        }
        else{
            return response() -> json ('Update failed', 200);
        }
    }

    public function createComment(Request $request){
        $data = $request->all();
        $comment = new Comment();
        $comment -> user_id = $data['user_id'];
        $comment -> comment = $data['comment'];
        $comment -> datetime = date( 'Y-m-d H:i:s' );
        $comment -> topic_id = $data['topic_id'];
        $comment -> created_at = date( 'Y-m-d H:i:s' );
        $comment -> updated_at = date( 'Y-m-d H:i:s' );
        if($comment -> save()){
            return response()->json('Create success', 200);
        }
        else{
            return response()->json('Create failed', 200);
        }
    }

    public function deleteComment($id_comment){
        if(Comment::find($id_comment)){
            Comment::find($id_comment)->delete();
            return response()->json('Delete success', 200);
        }
        else{
            return response()->json('Delete failed', 200);
        }
    }
}
