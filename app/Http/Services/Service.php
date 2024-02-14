<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface Service
{
    public function find(int $id):Model;
    public function getAll():Collection;
    public function update(int $id, array $data):Model | null;
    public function store(array $data):Model;
    public function delete(int $id):Model | null;
    public function findOneWheresConditions (array $wheres): Model | null;

}
