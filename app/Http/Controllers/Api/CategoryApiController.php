<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryApiController extends Controller
{
    public function getAllCategory()
    {
        if (Category::all()->count() > 0) {
            return response()->json(Category::all(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function getCategoryById($id)
    {
        if (Category::find($id)) {
            return response()->json(Category::find($id), 200);
        } else {
            return response()->json('No data', 200);
        }
    }

    public function updateCategory($id, Request $request)
    {
        // get data from request body
        $data = $request->all();
        // update data
        if (Category::find($id)) {
            $category = Category::find($id);
            $category->category_name = $data['category_name'];
            $category->updated_at = date('Y-m-d H:i:s');
            $category->save();
            return response()->json('Update success', 200);
        } else {
            return response()->json('Update failed', 200);
        }
    }

    public function createCategory(Request $request)
    {
        // get data from request body
        $data = $request->all();
        // create new data
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->created_at = date('Y-m-d H:i:s');
        $category->updated_at = date('Y-m-d H:i:s');
        if ($category->save()) {
            return response()->json('Create success', 200);
        } else {
            return response()->json('Create failed', 200);
        }
    }

    public function deleteCategory($id)
    {
        if (Category::find($id)) {
            Category::destroy($id);
            return response()->json('Delete success', 200);
        } else {
            return response()->json('Delete failed', 200);
        }
    }
}
