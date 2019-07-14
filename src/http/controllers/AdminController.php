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
        $admin=new Admin;
        $admin->name=config('admin.name');
        $admin->permission_level=config('admin.permission_level');
        if($admin->save())
        {
        	return "success";
        }
        else 
        	return "something went wrong";
    }
}

?>