<?php

namespace App\Http\Repositories;

use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository implements UserService
{
 public function __construct(User $model)
 {
     parent::__construct($model);
 }


}
