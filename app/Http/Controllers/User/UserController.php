<?php

namespace App\Http\Controllers\User;

use App\Enums\User\UserEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Http\Requests\UserCriminalRecordRequest;
use App\Http\Services\Service;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends MainController
{
    public function __construct(UserService $service)
    {
        parent::__construct($service);
    }
    public function hasCriminalRecordUser(UserCriminalRecordRequest $request)
    {
        $user = $this->service->findOneWheresConditions([
            [
                UserEnum::NAME,'=',$request->name
            ],
            [
                UserEnum::LASTNAME,'=',$request->lastname
            ],

        ]);
        if(!$user){
            return response()->json([
                'message'=>'user not found'
            ],404);
        }
        if(!$user->has_criminal_record){
            return response()->json([
                'message'=>'user found but dont have criminal record'
            ]);
        }
        return response()->json($user);
    }

}
