
<!DOCTYPE html>
<html lang="en">
<head>
  <title>A & A DAILY ATTENDENCE
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="registration.css" rel="stylesheet">
</head>
<body>
<section class=" gradient-custom">

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
    <h3 class="attendance_sheet text-center">A & A Daily Attendance</h3>
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
             <x-app-layout>
                </x-app-layout>
            <form action="/attendance" method="POST" class="attendance_form">
            @csrf
              <div class="row">
              <!-- name start -->
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="firstName">Full Name :</label>
                    <input type="text" id="firstName" name="fullname" class="form-control form-control-lg" />
                  </div>
                </div>

                <!-- employees number start -->

                <div class="col-md-12 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="employee_number">Employee Number :</label>
                    <input type="number" id="employee_number" name="employee_number" class="form-control form-control-lg" />     
                  </div>
                </div>
             </div>
            <!-- address  start -->
   <!-- address start -->
   <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="address">address :</label>  
                                  <input type="text" id="address" name="address" class="form-control form-control-lg" />
                            </div>
                            </div>
                  </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="phoneNumber">Phone Number :</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                            <label class="form-label" for="day">Day :</label>  <br>
                            <select class="select form-control-lg"  id="day" name="day">
                    <option value="1" disabled>Choose option</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                  </select>
                        </div>
                     </div>
              </div>
            <!-- end phone email -->
   
           <!-- date time row start -->
           <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="date">Date :</label>
                    <input type="date" id="date" name="date" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="time">Time:</label>
                    <input type="time" id="time" name="time" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
      <!--  date time  Expenses row end -->

      <!--  customer feedback start -->
      <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="cus_feedback">Feedback from the Customer :</label>  
                                  <input type="text" id="cus_feedback" name="cus_feedback" class="form-control form-control-lg" />
                            </div>
                            </div>
               </div>
      <!-- customer feedback end -->
               <!--  Expenses  row start -->
             <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="expenses">Expenses :</label>
                    <input type="number" id="expenses" name ="expenses" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="express_details">Expenses  Description :</label>
                    <input type="text" id="express_details" name="express_details" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
      <!-- customer feedback Expenses row end -->
      <!-- comment start -->
        <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="comment">Comments :</label>  
                                  <input type="text" id="comment" name="comment" class="form-control form-control-lg" />
                            </div>
                            </div>
               </div>
      <!-- comment end -->
              <div class="mt-4 pt-2 submitbutton">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>