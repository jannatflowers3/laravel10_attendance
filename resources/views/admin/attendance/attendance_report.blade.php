

@include('admin.header')
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- left sidebabr start -->
          @include('admin.leftsidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                  @include('admin.topsitebar')
                <!-- Begin Page Content -->
<!-- 
                @yield('content') -->
                <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Attendance Report</h1>
</div>
@include('sweetalert::alert')
<!-- Content Row -->
<div class="row" >
<div class=col-lg-10>
</div>
<div class="col-lg-4 ml-auto ">
    <form action="{{url('/search_report')}}" method="get">
        @csrf
<div class="input-group rounded report_searchbtn">
    <label for="attendance_label"> User Name : </label>
  <input type="search" class="form-control rounded" id="attendance_label" name="search_username" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <!-- <i class="fas fa-search"></i> -->
  </span>
</div>
</form>
</div>

<div class="tablelist" style="overflow-x:auto;">
<table class=" table table-bordered" >
  <thead>
    <tr class="bg-primary text-white border" >
    <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Employee Number</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Day</th>
      <th scope="col" class="date_width">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Customer Feedback</th>
      <th scope="col">Expenses</th>
      <th scope="col">Expenses Description</th>
      <th scope="col">Comment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($user_attendances as $user_attendance)
<tr class="border text-dark ">
  <td>{{$user_attendance->id}}</td>
  <td>{{$user_attendance->fullname}}</td>
  <td>{{$user_attendance->employee_number}}</td>
  <td>{{$user_attendance->address}}</td>
  <td>{{$user_attendance->phone_number}}</td>
  <td>{{$user_attendance->day}}</td>
  <td >{{$user_attendance->date}}</td>
  <td>{{$user_attendance->time}}</td>
  <td>{{$user_attendance->customer_feedback}}</td>
  <td>{{$user_attendance->expenses}}</td>
  <td>{{$user_attendance->expenses_des}}</td>
  <td>{{$user_attendance->comment}}</td>
  <td>  <a href="{{url('/alltendance_delete',$user_attendance->id)}}" onclick="return confirm('Are you sure?')" class="bg-danger text-white p-2 text-decoration-none"> Delete </a> </td>


</tr>
@endforeach

</tbody>
</table>

</div>
</div>

{!! $paginations->withQueryString()->links('pagination::bootstrap-5') !!}


<!-- /.container-fluid -->
<!-- {{ $paginations->links() }} -->
</div>
<!-- End of Main Content -->


<!-- Footer -->
<footer class="sticky-footer  bg-primary text-white adminfooter">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>  © Copyright 2023 A & A Consulting Limited - All Rights Reserved</span>
</div>
</div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

    @include('admin.footer')