<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Admin;
use App\Models\Category;

class NewsApiController extends Controller
{
    public  function getAllNews()
    {
        if (News::all()->count() > 0) {
            $data = News::all();
            $res = array();
            foreach ($data as $item) {
                $res[] = array(
                    'news' => $item,
                    'admin' => Admin::find($item->admin_id)->fullname
                );
            }

            $data1 = News::orderByDesc('view')->limit(3)->get();
            $res1 = array();
            foreach ($data1 as $item) {
                $res1[] = array(
                    'news' => $item,
                    'admin' => Admin::find($item->admin_id)->fullname
                );
            }

            $data2 = News::orderBy('datetime')->limit(3)->get();
            $res2 = array();
            foreach ($data2 as $item) {
                $res2[] = array(
                    'news' => $item,
                    'admin' => Admin::find($item->admin_id)->fullname
                );
            }

            $data3 = News::orderBy('datetime')->limit(1)->get();
            $res3 = array();
            foreach ($data3 as $item) {
                $res3[] = array(
                    'news' => $item,
                    'admin' => Admin::find($item->admin_id)->fullname
                );
            }
            $data4 = News::orderBy('news_id')->limit(2)->get();
            $res4 = array();
            foreach ($data4 as $item) {
                $res4[] = array(
                    'news' => $item,
                    'admin' => Admin::find($item->admin_id)->fullname
                );
            }

            return response()->json(['res' => $res,'res1'=>$res1,'res2'=>$res2,'res3'=>$res3, 'res4'=>$res4], 200);
        } else {
            return response()->json('No data', 200);
        }
    }


    public function getNewsById($id)
    {
        if (News::find($id)) {
            return response()->json([
                'news' => News::find($id),
                'admin' => Admin::find(News::find($id)->admin_id)->fullname,
                'category' => Category::find(News::find($id)->category_id)->category_name
            ], 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function getNewsByUserId($id)
    {
        if (News::where('admin_id', $id)->count() > 0) {
            return response()->json(News::where('admin_id', $id)->get(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function getNewsByCategoryId($id)
    {
        if (News::where('category_id', $id)->count() > 0) {
            return response()->json(News::where('category_id', $id)->get(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function updateNews($id, Request $request)
    {
        // get data from request body
        $data = $request->all();
        // update data
        if (News::find($id)) {
            $news = News::find($id);
            $news->admin_id = $data['admin_id'];
            $news->category_id = $data['category_id'];
            $news->title = $data['title'];
            $news->content = $data['content'];
            $news->updated_at = date('Y-m-d H:i:s');
            $news->save();
            return response()->json('Update success', 200);
        } else {
            return response()->json('Update failed', 200);
        }
    }

    public function createNews(Request $request)
    {
        // get data from request body
        $data = $request->all();
        // create new data
        $news = new News();
        $news->admin_id = $data['admin_id'];
        $news->category_id = $data['category_id'];
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->datetime = date('Y-m-d H:i:s');
        $news->created_at = date('Y-m-d H:i:s');
        $news->updated_at = date('Y-m-d H:i:s');
        $news->save();
        return response()->json('Create success', 200);
    }

    public function deleteNews($id)
    {
        if (News::find($id)) {
            News::find($id)->delete();
            return response()->json('Delete success', 200);
        } else {
            return response()->json('Delete failed', 200);
        }
    }
}
