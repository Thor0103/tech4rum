<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageApiController extends Controller
{
    //
    public function getAllImage()
    {
        if(Image :: all()->count() > 0)
        {
            return response()->json(Image :: all(), 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function getImageById($id)
    {
        if(Image :: find($id))
        {
            return response()->json(Image :: find($id), 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public function getImageByTopicId($id)
    {
        if(Image :: where('topic_id', $id)->count() > 0)
        {
            $imageTopic = Image :: where('topic_id', $id)->get();
            return response()->json($imageTopic, 200);
        }
        else
        {
            return response()->json('No data', 200);
        }
    }

    public  function createImage(Request $request)
    {
        $data = $request->all();
        $imageTopic = new Image();
        $imageTopic->topic_id = $data['topic_id'];
        $imageTopic->image = $data['image'];
        $imageTopic->created_at = date('Y-m-d H:i:s');
        $imageTopic->updated_at = date('Y-m-d H:i:s');
        if($imageTopic->save())
        {
            return response()->json('Create success', 200);
        }
        else
        {
            return response()->json('Create failed', 200);
        }
    }

    public function updateImage(Request $request, $id)
    {
        $data = $request->all();
        if(Image :: find($id))
        {
            $imageTopic = Image :: find($id);
            $imageTopic->image = $data['image'];
            $imageTopic->save();
            return response()->json('Update success', 200);
        }
        else
        {
            return response()->json('Update failed', 200);
        }
    }

    public function deleteImage($id)
    {
        if(Image :: find($id))
        {
            Image :: find($id)->delete();
            return response()->json('Delete success', 200);
        }
        else
        {
            return response()->json('Delete failed', 200);
        }
    }
}
