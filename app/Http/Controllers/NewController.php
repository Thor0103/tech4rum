<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Classifileds;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\CommentClass;

class NewController extends Controller
{
    public function showNew (Request $request)
    {
        return News::with('admin')->byId($request)->get();
    }

    public function showidClass (Request $request)
    {
        return Classifileds::with('user')->byId($request)->get();
    }
    public function showClassifileds(){

        $data = Classifileds::with('user')->get();
        $res = array();
        foreach ($data as $item) {
            $res[] = array(
                'classifiled' => $item,
                'user' => User::find($item->user_id),
            );
        }
        return response()-> json(['data'=>$res], 200);
    }

    public function likeClassifileds( Request $request){

        $data = Classifileds::find($request->id);
        $data -> status_like = $request->id;
        $data -> like = $data ->like + 1;
        $like = User::find($data->user_id);
        $like -> score = $like -> score + 10 ;
        $like ->save();
        $data ->save ();

        return response()-> json(['res'=>true], 200);
    }

    public function dislikeClassifileds( Request $request){

        $data = Classifileds::find($request->id);
        $data -> status_like = 0;
        $data -> like = $data ->like - 1;
        $like = User::find($data->user_id);
        $like -> score = $like -> score - 5;
        $like ->save();
        $data ->save ();

        return response()-> json(['res'=>true], 200);
    }

    public function viewClassifileds( Request $request){

        $data = Classifileds::find($request->id);
        $data -> view =  $data -> view + 1;
        $data ->save ();

        return response()-> json(['res'=>true], 200);
    }

    public function getComment( Request $request){


        $data = new CommentClass();
        $data -> comment = $request ->comment;
        $data -> id_classifieds = $request ->id_classifieds;
        $data -> user_id = $request -> id;
        $data -> save();
        return response()-> json(['data'=>$request->id_classifieds], 200);
    }

    public function showComment( Request $request){
        $data =  CommentClass::where("id_classifieds",$request->id_classifieds)->orderByDesc('id_comment')->get();
        $res = array();
        foreach ($data as $item) {
            $res[] = array(
                'comment' => $item,
                'user' => User::find($item->user_id),
            );
        }
        return response()-> json(['data'=>$res], 200);
    }

    public function showClassgood( Request $request){
        $data =  Classifileds::orderByDesc('view')->limit(4)->get();
      
        return response()-> json(['data'=>$data], 200);
    }

    public function createClass( Request $request){
        $data = new Classifileds();
        $data->name_classifieds = $request->name;
        $data->area = $request->city;
        $data->status_pro = $request->status;
        $data->price_pro = $request->price;
        $data->addr_pro = $request->address;
        $data->phone_pro = $request->phone;
        $data->contact_pro = $request->contact;
        $data->image = "https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/uploads/images/2015/Tin-Tuc/Duyen/image001(71).jpg";
        $data->description = $request->editorData;
        $data->view = 0;
        $data->like = 0;
        $data->status_like = 0;
        $data->user_id = $request->id_user;
        $data->date = Carbon::now()->timezone('Asia/Phnom_Penh');;
        $data->save();
        return response()-> json(true, 200);
    }
    
}
