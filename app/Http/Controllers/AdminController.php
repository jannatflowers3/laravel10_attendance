<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
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
//     // date_default_timezone_get('Asia/Dhaka');
//     // $attendance->time = $request->time('H:i:s');


//     $userTimezone = Auth::user()->timezone;

// date_default_timezone_set($userTimezone);

// // and change the configuration so they match

// Config::set('app.timezone', $userTimezone);

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

  public function alltendance_delete($id){
    $delete_attendance = Attendance::find($id);
    $delete_attendance->delete();
    return redirect()->back();
  }
// public function attendance_report()
// {

//   $user_attendances = Attendance::all();
//   return view('admin.attendance.attendance_report',compact('user_attendances'));
//   // return view('admin.attendance.attendance_report');
// }
  public function search_report(Request $request)
  {
     $userreport = $request->search_username;
     $user_attendances = Attendance::where('fullname','Like','%'.$userreport.'%')->get();

     return view('admin.attendance.attendance_report',compact('user_attendances'));
  }
  public function date_search(Request $request)
  {
    //  $date_report = $;
     $start = $request->start_date;
     $end = $request->end_date;
 $date_report = Attendance::whereBetween('date', [$start, $end])->get();
    
     return view('admin.attendance.date_search',compact('date_report'));
  }
}


