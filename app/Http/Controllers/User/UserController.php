<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index() {
        return view("pages.user.user");
    }
    public function addUser(){
        $db = DB::select("select * from nguoidung");
        dd($db);
        return view("pages.user.addUser");
    }
    
    public function handleAddUser(UserRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'required'
        // ],
        // [
        //     'name.required' => "Ten khong duoc bo trong",
        //     'address.required' => "Dia chi khong duoc bo trong"
        // ]);
        // echo "Tao thanh cong";
    }
}
