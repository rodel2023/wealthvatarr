<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserArchetype extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_archetype';
    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'isregistered', 'user_id', 'archetype'
    ];
}
