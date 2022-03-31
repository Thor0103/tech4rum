<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classifileds extends Model
{
    public $timestamps = false;
    protected $fillable = [
         'name_classifieds', 'area','status_pro','price_pro', 'contact_pro','addr_pro','phone_pro', 'image','description','view', 'like','status_like','user_id','date'
    ];

    protected $primaryKey = 'id_classifieds';
    protected $table = 'classifieds';

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','user_id');
    }

    public function scopebyId ($query, $request){
        if($request->id_classifieds){
            $query->where('id_classifieds', $request->id_classifieds);

        }
        return $query;
    }
}
