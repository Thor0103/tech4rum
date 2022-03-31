<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\News_Image;

class NewsImageApiController extends Controller
{
    //

    public function getAllNewsImage()
    {
        if (News_Image::all()->count() > 0) {
            return response()->json(News_Image::all(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function getNewsImageById($id)
    {
        if (News_Image::find($id)) {
            return response()->json(News_Image::find($id), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function getNewsImageByNewsId($id)
    {
        if (News_Image::where('news_id', $id)->count() > 0) {
            return response()->json(News_Image::where('news_id', $id)->get(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function createNewsImage(Request $request)
    {
        // get data from request body
        $data = $request->all();

        if (News::find($data['news_id'])) {
            // create new data
            $news_image = new News_Image();
            $news_image->news_id = $data['news_id'];
            $news_image->news_image = $data['news_image'];
            $news_image->created_at = date('Y-m-d H:i:s');
            $news_image->updated_at = date('Y-m-d H:i:s');
            if ($news_image->save()) {
                return response()->json('Create success', 200);
            } else {
                return response()->json('Create failed', 200);
            }
        } else {
            return response()->json('Create failed', 200);
        }
    }

    public function updateNewsImage(Request $request, $id)
    {
        // get data from request body
        $data = $request->all();
        if (News_Image::find($id)) {
            $news_image = News_Image::find($id);
            $news_image->news_id = $data['news_id'];
            $news_image->news_image = $data['news_image'];
            $news_image->updated_at = date('Y-m-d H:i:s');
            if ($news_image->save()) {
                return response()->json('Update success', 200);
            } else {
                return response()->json('Update failed', 200);
            }
        } else {
            return response()->json('Update failed', 200);
        }
    }

    public function deleteNewsImage($id)
    {
        if (News_Image::find($id)) {
            $news_image = News_Image::find($id);
            $news_image->delete();
            return response()->json('Delete success', 200);
        } else {
            return response()->json('No data', 200);
        }
    }
}
