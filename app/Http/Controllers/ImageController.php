<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function showImage(Request $request)
    {
        return Image::with('topic')->byParam($request)->get();
    }
}
