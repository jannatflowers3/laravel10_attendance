<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
  public function allusers()
  {
     $userdata = User::all();
    return view('admin.user.userlist',compact('userdata'));
  }
  public function delete_user($id)
  {
    $deleteuser = User::find($id);
    $deleteuser->delete();
    return redirect()->back();
  }
}
