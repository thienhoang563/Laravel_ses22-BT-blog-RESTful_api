<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 04/03/2019
 * Time: 22:43
 */

namespace App\Http\Services\Impl;


use App\Http\Repositories\PostRepository;
use App\Http\Services\PostService;
use App\Post;

class PostServiceImpl implements PostService
{
    protected $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
        $post = $this->postRepository->getAll();
        return $post;
    }
    public function findById($id)
    {
        // TODO: Implement findById() method.
        $post = $this->postRepository->findById($id);
        return $post;
    }
    public function create($request)
    {
        // TODO: Implement create() method.
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $post->image = $path;
        }

        $post = $this->postRepository->create($post);
        return $post;
    }
    public function update($post, $request)
    {
        // TODO: Implement update() method.
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $post->image = $path;
        }
        return $this->postRepository->update($post);
    }
    public function destroy($obj)
    {
        // TODO: Implement destroy() method.
        $post = $this->postRepository->destroy($obj);
        return $post;
    }

}