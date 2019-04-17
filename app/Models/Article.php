<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Article
 * @package App\Models
 * @version April 16, 2019, 4:32 am UTC
 *
 * @property \App\Models\Category category
 * @property string title
 * @property string slug
 * @property string image
 * @property string intro
 * @property string body
 * @property integer category_id
 */
class Article extends Model
{

    public $table = 'articles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'title',
        'slug',
        'image',
        'intro',
        'body',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'image' => 'string',
        'intro' => 'string',
        'body' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'required',
        'intro' => 'required',
        'body' => 'required',
        'category_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
}
