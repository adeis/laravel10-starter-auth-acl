<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            $permissions = $user->getAllPermissions()->pluck('name');
            $scopes = $permissions->toArray();
            if($user->getRoleNames()->first() == 'Super Admin') {
                $scopes = ['*'];

            }
            $token = $request->user()->createToken('myAppToken', $scopes)->plainTextToken;


            return (new UserResource($user))->additional([
                'token' => $token , //$user->createToken('myAppToken')->plainTextToken,
                'perm' => $scopes ,
            ]);
        }

        return response()->json([
            'message' => 'Your credential does not match.',
        ], 401);
    }
}
