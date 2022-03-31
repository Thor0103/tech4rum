<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $news_image_id
 * @property integer $news_id
 * @property string $news_image
 * @property string $created_at
 * @property string $updated_at
 * @property News $news
 */
class News_Image extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news_image';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'news_image_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['news_id', 'news_image', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function news()
    {
        return $this->belongsTo('App\Models\News', null, 'news_id');
    }
}
