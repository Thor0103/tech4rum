<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Carbon;

class TopicController extends Controller
{
    public function index()
    {
        return Topic::with(['user'])->orderBy('like_topic','DESC')->paginate(9);
    }
    public function show(Request $request)
    {
        return Topic::with(['user'])->byParam($request)->orderBy('topic_id','DESC')->paginate(17);
    }
    public function shows(Request $request)
    {
        return Topic::with(['user'])->byId($request)->get();
    }

    public function createTopic(Request $request)
    {
        $topic = new Topic();
        $topic->title = $request->title;
        $topic->content = $request->content;
        $current = Carbon::now()->timezone('Asia/Phnom_Penh');
        $topic -> datetime = $current;
        $topic->category = $request->category;
        $topic->user_id = $request->user_id;
        $topic->category_id = $request->category_id;
        $topic->like_topic = $request->like_topic;
        $topic->save();
        echo"success create topic";
        if($topic->save())
        {
            return response()->json(['status'=> true,'message'=>'Thêm bài viết thành công !']);
        }else{
            return response()->json(['status'=> false,'message'=>'Thêm bài viết thất bại !']);

        }
    }
    public function topicCount(){
        return  DB::table('topic')->count();
    }
    public function likeTopic(Request $request){
        $data = Topic::find($request->topic_id);
        $data -> like_topic = $data -> like_topic + 1;
        $like = User::find($data->user_id);
        $like -> score = $like -> score + 10 ;
        $data -> save();
        $like -> save();
        return response()-> json(['res'=>true], 200);
    }
}
