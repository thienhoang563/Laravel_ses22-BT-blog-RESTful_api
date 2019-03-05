<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 04/03/2019
 * Time: 21:51
 */

namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $result = $this->model->all();
        return $result;
    }
    public function findById($id)
    {
        // TODO: Implement findById() method.
        $result = $this->model->findOrFail($id);
        return $result;
    }
    public function create($obj)
    {
        // TODO: Implement create() method.
        return $obj->save();
    }
    public function update($object)
    {
        // TODO: Implement update() method.
        return $object->save();
    }
    public function destroy($object)
    {
        // TODO: Implement destroy() method.
        return $object->delete();
    }

}