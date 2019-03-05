<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 04/03/2019
 * Time: 22:39
 */

namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Repositories\PostRepository;
use App\Post;

class PostRepositoryImpl extends EloquentRepository implements PostRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        $model = Post::class;
        return $model;
    }

}