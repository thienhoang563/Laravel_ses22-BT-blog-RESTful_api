<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 04/03/2019
 * Time: 21:45
 */

namespace App\Http\Repositories;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($obj);
    public function update($object);
    public function destroy($object);

}