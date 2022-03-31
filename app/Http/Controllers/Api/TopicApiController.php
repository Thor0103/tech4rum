<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\CategoryTopic;
use App\Models\ImageTopic;
use App\Models\ViewModel\TopicReviewViewModel;
use App\Models\ViewModel\TopicViewModel;
use App\Models\User;

class TopicApiController extends Controller
{
    public function getAllTopic()
    {
       if(Topic :: all()->count() > 0)
       {
           $data = Topic :: all();
           return response()->json(Topic :: all(), 200);
       }
       else
       {
           return response()->json('No data', 200);
       }
    }

    public  function getTopicById($id)
    {
        if(Topic :: find($id))
        {
            return response()->json([
                'topic' => Topic :: find($id),
                'category' => Category :: find(Topic :: find($id)->category_id)->category_name,
                'user' => User :: find(Topic :: find($id)->user_id)-> fullname
            ], 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }
    public function getTopicByIdCategory($id)
    {
        if(Topic :: where('category_id', $id)->count() > 0)
        {
            $data = Topic :: where('category_id', $id)->get();
            $res = array();
            foreach ($data as $item)
            {
                $res[] = array(
                    'topic' => $item,
                    'category' => Category :: find($item->category_id)->category_name,
                    'user' => User :: find($item->user_id)-> fullname
                );
            }
            return response()->json($res, 200);

        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function getTopicByIdUser($id)
    {
        if(Topic :: where('user_id', $id)->count() > 0)
        {
            $data = Topic :: where('user_id', $id)->get();
            $res = array();
            foreach ($data as $item)
            {
                $res[] = array(
                    'topic' => $item,
                    'category' => Category :: find($item->category_id)->category_name,
                    'user' => User :: find($item->user_id)-> fullname
                );
            }
            return response()->json($res, 200);

        }
        else
        {
            return response()->json('No data', 200);
        }

    }

    public function updateTopic($id, Request $request)
    {
        // get data from request body
        $data = $request->all();
        // update data
        if(Topic :: find($id))
        {
            $topic = Topic :: find($id);
            $topic->category_id = $data['category_id'];
            $topic->user_id = $data['user_id'];
            $topic->title = $data['title'];
            $topic->content = $data['content'];
            $topic->datetime  = date('Y-m-d');
            $topic->category = $data['category'];
            $topic->updated_at = date('Y-m-d');
            $topic->save();
            return response()->json('Update success', 200);
        }
        else
        {
            return response()->json('Update failed', 200);
        }
    }

    public function createTopic(Request $request)
    {
        // get data from request body
        $data = $request->all();
        // create new data
        $topic = new Topic();
        $topic->category_id = $data['category_id'];
        $topic->user_id = $data['user_id'];
        $topic->title = $data['title'];
        $topic->content = $data['content'];
        $topic->datetime = date('Y-m-d');
        $topic->category = $data['category'];
        $topic->created_at = date('Y-m-d');
        $topic->updated_at = date('Y-m-d');
        if($topic->save())
        {
            return response()->json('Create success', 200);
        }
        else
        {
            return response()->json('Create failed', 200);
        }
    }

    public function deleteTopic($id)
    {
        if(Topic :: find($id))
        {
            Topic :: destroy($id);
            return response()->json('Delete success', 200);
        }
        else
        {
            return response()->json('Delete failed', 200);
        }
    }
}
