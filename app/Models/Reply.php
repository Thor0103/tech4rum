<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $reply_id
 * @property integer $comment_id
 * @property integer $user_id
 * @property string $reply
 * @property string $datetime
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Comment $comment
 */
class Reply extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Reply';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'reply_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['comment_id', 'user_id', 'reply', 'datetime', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo('App\Models\Comment', 'comment_id', 'comment_id');
    }

    public function scopebyIdComment($query, $request){
        if($request->comment_id)
        {
            $query->where('comment_id', $request->comment_id);
        }
        return $query;
    }
}
