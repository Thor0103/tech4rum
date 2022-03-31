<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $migration
 * @property int $batch
 */
class Migrations extends Model
{
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = ['migration', 'batch'];

}
