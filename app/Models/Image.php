<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $image_id
 * @property integer $topic_id
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property Topic $topic
 */
class Image extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'image';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'image_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['topic_id', 'image', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo('App\Models\Topic', 'topic_id', 'topic_id');
    }

    public function scopebyParam($query, $request)
    {
        if($request-> topic_id)
        {
            $query->where('topic_id', $request-> topic_id);
        }
        return $query;
    }
}
