<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $news_id
 * @property integer $admin_id
 * @property string $title
 * @property string $content
 * @property string $datetime
 * @property string $created_at
 * @property string $updated_at
 * @property int $view
 * @property string $header
 * @property string $img
 * @property Admin $admin
 */
class News extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'news_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['admin_id', 'title', 'content', 'datetime', 'created_at', 'updated_at', 'view', 'header', 'img'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id', 'admin_id');
    }

    public function scopebyId ($query, $request){
        if($request->news_id){
            $query->where('news_id', $request->news_id);

        }
        return $query;
    }
}
