<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App\Models
 */
class Todo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'todos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
              'todo'
    ];

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
