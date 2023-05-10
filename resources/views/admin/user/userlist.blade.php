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
    <h1 class="h3 mb-0 text-gray-800">All Users List</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>
@include('sweetalert::alert')
<!-- Content Row -->
<div class="row">
<table class="table border">
  <thead>
    <tr class=" bg-primary text-white border" >
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($userdata as $data)
    <tr class="border">
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
        @if($data->user_type=='0')
        <!-- <a href="/" class="bg-success text-white p-2"> Edit </a> -->
        <td>  <a href="{{url('/delete_user',$data->id)}}" class="bg-warning text-white p-2 text-decoration-none" onclick="return confirm('Are you sure?')"> Delete </a> </td>
        @else
        <td>  <a href="{{url('/allusers')}}" class="bg-danger text-white p-2 text-decoration-none"> Not Allowed </a> </td>
        @endif
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