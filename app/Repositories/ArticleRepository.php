<?php

namespace App\Repositories;

use App\Models\Article;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version April 16, 2019, 4:32 am UTC
 *
 * @method Article findWithoutFail($id, $columns = ['*'])
 * @method Article find($id, $columns = ['*'])
 * @method Article first($columns = ['*'])
*/
class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'image',
        'intro',
        'body',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
