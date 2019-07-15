<?php

namespace Gunaseelan\Admin\http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Gunaseelan\Admin\Models\Admin;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
     public function index()
    {
        //return view('admin::index');
        //$state=Schema::exists('admin');
        $admin_table=config('admin.Admin_table_name');
        if(Schema::hasTable($admin_table))
        {
        	return $admin_table;
        }
        else 
        	return "The $admin_table Table is Not Exists";
        // $tables = DB::select('SHOW TABLES');

        // return $tables;
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