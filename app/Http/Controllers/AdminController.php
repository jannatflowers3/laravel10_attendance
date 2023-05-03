<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;

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


  // attendance start
  public function attendance(Request $request)
  {
    $attendance = new Attendance;
    $attendance->fullname = $request->fullname;
    $attendance->employee_number = $request->employee_number;
    $attendance->address = $request->address;
    $attendance->phone_number = $request->phoneNumber;
    $attendance->day = $request->day;
    $attendance->date = $request->date;
    $attendance->time = $request->time;
    $attendance->customer_feedback = $request->cus_feedback;
    $attendance->expenses = $request->expenses;
    $attendance->expenses_des = $request->express_details;
    $attendance->comment = $request->comment;
    $attendance->save();
    return redirect()->back();

  }

  public function all_attendance()
  {
  $all_attendances = Attendance::all();
  return view('admin.attendance.all_attendance',compact('all_attendances'));
  }
}


