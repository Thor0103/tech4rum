<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $comment_id
 * @property integer $user_id
 * @property string $comment
 * @property string $datetime
 * @property integer $topic_id
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Reply[] $replies
 */
class Comment extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'comment_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'comment', 'datetime', 'topic_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('App\Models\Reply','comment_id', 'comment_id');
    }
    public function topic()
    {
        return $this->belongsTo('App\Models\Topic', 'topic_id', 'topic_id');
    }
    public function scopebyComment($query,$request)
    {
        if($request -> topic_id)
        {
            $query->where('topic_id',$request -> topic_id);
        }
        return $query;
    }
}
