<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentClass extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'comment',
        'id_classifieds',
        'user_id'
    ];

    protected $primaryKey = 'id_comment';
    protected $table = 'classifieds_comment';

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','user_id');
    }
}
