<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view('home');
   }

   public function admindashboard()
   {
     $usertype = Auth::user()->user_type;
     if($usertype =='1')
     {
       $useradmin = 1;
       $total_user = 0;
       $total_admin= User::where('user_type',$useradmin)->get()->count();
       $total_users = User::where('user_type',$total_user)->get()->count();
      return view('admin.adminhome',compact('total_admin','total_admin','total_users'));
     }
     else{
      return view('dashboard');
     }
   }
   

}
