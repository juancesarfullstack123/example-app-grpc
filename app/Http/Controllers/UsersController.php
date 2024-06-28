<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Grpc;
use Illuminate\Support\Facades\Http;
use Services\Users\QueryUsers;
use Services\Users\resdata;
use Services\Users\RESUSERS;
use Services\Users\UsersServiceClient;

class UsersController extends Controller
{
    public function index(Request $request){
        $client = new UsersServiceClient('localhost:5000', [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);
        $userInfoRequest = new QueryUsers();
        $userInfoRequest->setTotal($request->total);
        $userInfoRequest->setFrom($request->from);
        list($userInfoResponse, $status) = $client->Find($userInfoRequest)->wait();
        if ($status->code !== \Grpc\CALL_OK) {
            throw new \Exception($status->details, $status->code);
        }
        if ($userInfoResponse instanceof resdata) {
            $data = collect($userInfoResponse->getData())->transform(function (RESUSERS $userData) {
                
                return [
                    'id' => $userData->getId(),
                    'username' => $userData->getUsername(),
                    'password' => $userData->getPassword(),
                    'roles_id' => $userData->getRolesId(),
                    'status' => $userData->getStatus(),
                    'roles' => [
                        'id' => $userData->getRoles()->getId(),
                        'roles_code' => $userData->getRoles()->getRolesCode()
                    ],
                    'profile_teacher' =>[
                        'address' => $userData->hasProfile() ? $userData->getProfile()->getFullName() : null  ,
                    ]
                ];
            });
        }
        return response()->json([
            'data' => $data,
            'total' => $userInfoResponse->getTotal()
        ]);
    }
    public function getUsers(){
        $res = Http::get('http://localhost:3005/v1/user/users?page=1&perPage=10')->throw()->collect();
        $data = $res->get('data') ?? NULL;

        if (empty($data)) {
            throw new Exception("Cant get data lists company");
        }

        /*
        * return first because response from /cabang/detail is array
        */
        return collect($data);
    }
}
