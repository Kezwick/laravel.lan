<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Category
 * @package App\Models
 * @version April 16, 2019, 4:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection articles
 * @property string name
 * @property string image
 * @property string description
 */
class Category extends Model
{

    public $table = 'categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'image',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'image' => 'required',
        'description' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function articles()
    {
        return $this->hasMany(\App\Models\Article::class);
    }
}
