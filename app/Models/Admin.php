<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $admin_id
 * @property string $fullname
 * @property string $username
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property News[] $news
 */
class Admin extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'admin_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['fullname', 'username', 'password', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany('App\Models\News', null, 'admin_id');
    }
}
