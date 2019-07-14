<?php

namespace Gunaseelan\Admin\http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Gunaseelan\Admin\Models\Admin;
class AdminController extends Controller
{
     public function index()
    {
        return view('admin::index');
    }
     public function login(Request $request)
    {
       $user=$request->username;
       $pass=$request->pass;
       if($user != '' && $user==config('admin.Admin_username'))
       {
       	if($pass != '' && $pass==config('admin.Admin_password'))
       	{
       		return view('admin::home',['user'=>$user]);
       	}
       	else 
       		return "Entered password is incorrect";
       }
       else 
       		return "Entered Username is incorrect Or We Think You Are Just A Guest ,SO Not Allowed To Access Admin Account";
    }
}

?>