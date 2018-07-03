<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Get User List
     *
     */
    public function getUsers()
    {
        return User::all();
    }

    /**
     * Get One User
     * @param int $id
     * @return mixed
     */
    public function getUser($id)
    {
        $id = (int)$id;
        if (!$id){
            return 'Id Not Found in url...';
        }
        else{
            $user =  User::find($id);
            if (!$user)
            {
                return 'User not found...';
            }else{
                return $user;
            }
        }
    }

    /**
     * Create User
     * @param Request $request
     * @return mixed
     */
    public function createUser(Request $request)
    {
        return User::create($request->all());
    }
}
