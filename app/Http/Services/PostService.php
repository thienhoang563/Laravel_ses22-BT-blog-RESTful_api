<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 04/03/2019
 * Time: 22:41
 */

namespace App\Http\Services;


interface PostService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($post, $request);
    public function destroy($obj);

}