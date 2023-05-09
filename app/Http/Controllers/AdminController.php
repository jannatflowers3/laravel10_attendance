<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use RealRashid\SweetAlert\Facades\Alert;
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
    Alert::success('User Delete Successfully');
    $deleteuser->delete();
    return redirect()->back();
  }
  // attendance start
  public function attendance(Request $request)
  {

    $request->validate([
      'fullname' => 'required|string|max:20',
      // 'email' => 'required|email|unique:users,email',
      'employee_number' => 'required',
      'address' => 'required|string',
      'phoneNumber' => 'required',
      'day' => 'required',
      'date' => 'required',
      'time' => 'required',
      'cus_feedback' => 'required|string',
      'expenses' => 'required',
      'express_details' => 'required|string',
     

      // 'password' => 'required|alpha_num|min:6',
      // 'confirmPassword' => 'required|same:password',
      // 'gender' => 'required|string',
      
  ],[
    
      'fullname.required' => 'Name field is required.',
      'employee_number.required' => 'Employee Number field is required.',
      'address.required' => 'Address field is required.',
      'phoneNumber.required' => 'Phone Number field is required.',
      'day.required' => 'Day field is required.',
      'date.required' => 'Date field is required.',
      'time.required' => 'Time field is required.',
      'cus_feedback.required' => 'Customer Feedback field is required.',
      'expenses.required' => 'Expenses  field is required.',
      'express_details.required' => 'Expenses  Details  field is required.',
  ]);

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

// // and change the configuration9 so they match

// Config::set('app.timezone', $userTimezone);
    $attendance->customer_feedback = $request->cus_feedback;
    $attendance->expenses = $request->expenses;
    $attendance->expenses_des = $request->express_details;
    $attendance->comment = $request->comment;
    $attendance->save();
 Alert::success('Attendance Submite Successfully');
    return redirect()->back();
  }

  public function all_attendance()
  {
  $all_attendances = Attendance::all();
  $paginations = Attendance::paginate(3);
  return view('admin.attendance.all_attendance',compact('all_attendances','paginations'));
  }

  public function alltendance_delete($id){
    $delete_attendance = Attendance::find($id);
    Alert::success('Attendance Delete Successfully');
    $delete_attendance->delete();
    return redirect()->back();
  }
  public function search_report(Request $request)
  {
     $userreport = $request->search_username;
     $user_attendances = Attendance::where('fullname','Like','%'.$userreport.'%')->get();
     $paginations = Attendance::paginate(3);
     return view('admin.attendance.attendance_report',compact('user_attendances','paginations'));
  }
  public function date_search(Request $request)
  {
    //  $date_report = $;
     $start = $request->start_date;
     $end = $request->end_date;
   $date_report = Attendance::whereBetween('date', [$start, $end])->get();
   $paginations = Attendance::paginate(3);
     return view('admin.attendance.date_search',compact('date_report','paginations'));
  }
}


