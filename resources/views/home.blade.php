

<!DOCTYPE html>
<html lang="en">
<head>
  <title>A & A Daily Attendance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="admin/img/logo.jpg">
  <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
  <div class="container-fluid">
     <div class="row justify-content-center">
     <div class="col-lg-10 text-center">
       <div class="headerbody">
         <h1 class="text-center">A & A Daily Attendance</h1>
         <p>Here is the daily attendance time sheet for contractor and employees.</p>
    </div>
  </div>
   <div class="col-lg-2">
   <div class="login_registration text-center">
   
    @if (Route::has('login'))
                <div class="loginauthentication">
                    @auth
                        <a href="{{ url('dashboard') }}" >Attendance</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</div>
</div>
</div>
<div class="container">
  <!-- contact start -->
  <div class="contactinfo">
<div class="row">
  
   <div class="col-lg-4">
     <div class="contactpart_one">
       <h1>Contact Us </h1>
       <i class="fa-thin fa-id-card"></i>
         
         <p> 
       Address : House #: 01 (4th Floor), Road #: 20, Block - J, Baridhara, Dhaka 1212, Bangladesh
          <p>
      </div>
    </div>
    <!-- second.. -->
    <div class="col-lg-4">
     <div class="contactpart_second">
       <h1>Email </h1>
         <p> 
         Email :  info@aaconsulting.tech </p>
      </div>
    </div>

   <!-- third .. -->
   <div class="col-lg-3">
     <div class="contactpart_third">
     <i class="fa-solid fa-user"></i>
     <h1>Phone </h1>
         <p> 
         Phone : +88 02 4881 2159</p>
      </div>
    </div>
   </div>
  </div>
</div>
 <!-- contact end -->
</header>
<Footer >
  <p>Copyright © 2023  | All Rights Reserved by A & A Consulting Limited.</p>
</Footer>
</body>
</html>