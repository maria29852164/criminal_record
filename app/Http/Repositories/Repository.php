<?php

namespace App\Http\Repositories;

use App\Http\Services\Service;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Repository implements Service
{
    public function __construct(protected Model $model)
    {
    }


    public function find(int $id): Model
    {
        return $this->model->find($id);
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function update(int $id, array $data): Model | null
    {
        $instance = $this->find($id);
        if($instance){
            $instance->update($data);
            return $instance;

        }
        return null;
    }

    public function store(array $data): Model
    {
        $instance=$this->model->save($data);
        return $instance;
    }

    public function delete(int $id): Model | null
    {
       $instance= $this->find($id);
       if($instance){
           $instance->delete();
           return $instance;
       }
       return null;
    }

    public function findOneWheresConditions(array $wheres): Model|null
    {
        return $this->model->where($wheres)->get()->first();
    }
}
