<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function userList(){
        $users = User::all();
        return view('userlist.list', [
            'users' => $users
        ]);
    }
    public function deleteUser($id){
        $shoe= User::find($id)->delete();
        return redirect()->action([UserListController::class, 'userList']);
    }
}
