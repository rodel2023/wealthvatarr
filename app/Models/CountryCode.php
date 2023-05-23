<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CountryCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country_code';
    protected $fillable = ['name', 'code', 'code1','code2'];
}
