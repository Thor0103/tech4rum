<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $topic_id
 * @property integer $user_id
 * @property integer $category_id
 * @property string $title
 * @property string $content
 * @property string $datetime
 * @property string $category
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Category $category
 */
class Topic extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Topic';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'topic_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'category_id', 'title', 'content', 'datetime', 'category', 'created_at', 'updated_at'];

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
    public function category()
    {
        return $this->belongsTo('App\Models\Category', null, 'category_id');
    }
    public function scopebyParam($query, $request){
        if($request->category_id)
        {
            $query->where('category_id', $request->category_id);
        }
        return $query;
    }
    public function scopebyId($query, $request){
        if($request->topic_id)
        {
            $query->where('topic_id', $request->topic_id);
        }
        return $query;
    }
}
