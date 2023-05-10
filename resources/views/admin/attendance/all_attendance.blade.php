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
    <h1 class="h3 mb-0 text-gray-800">All Attendance List</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>
@include('sweetalert::alert')
<!-- Content Row -->
<div class="row" style="overflow-x:auto;">
<table class=" table table-bordered" >
  <thead>
    <tr class="bg-primary text-white border" >
      <!-- <th scope="col">No</th> -->
      <th scope="col">Full Name</th>
      <th scope="col">ID</th>
      <th scope="col">Employee Number</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Customer Feedback</th>
      <th scope="col">Expenses</th>
      <th scope="col">Expenses Description</th>
      <th scope="col">Comment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($all_attendances as $all_attendances)
    <tr class="border text-dark ">
      <!-- <th scope="row">{{$all_attendances->id}}</th> -->
      <td>{{$all_attendances->id}}</td>
      <td>{{$all_attendances->fullname}}</td>
      <td>{{$all_attendances->employee_number}}</td>
      <td>{{$all_attendances->address}}</td>
      <td>{{$all_attendances->phone_number}}</td>
      <td>{{$all_attendances->day}}</td>
      <td>{{$all_attendances->date}}</td>
      <td>{{$all_attendances->time}}</td>
      <td>{{$all_attendances->customer_feedback}}</td>
      <td>{{$all_attendances->expenses}}</td>
      <td>{{$all_attendances->expenses_des}}</td>
      <td>{{$all_attendances->comment}}</td>
      <td>  <a href="{{url('/alltendance_delete',$all_attendances->id)}}" onclick="return confirm('Are you sure?')" class="bg-danger text-white p-2 text-decoration-none"> Delete </a> </td>

      
       
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>


<!-- /.container-fluid -->

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