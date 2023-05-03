
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="registration.css" rel="stylesheet">
</head>
<body>
<section class=" gradient-custom">

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
    <h3 class="attendance_sheet text-center">A & A Daily Attendence</h3>
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
             <x-app-layout>
                </x-app-layout>
            <form>
              <div class="row">
              <!-- name start -->
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="firstName">Full Name :</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                  </div>
                </div>

                <!-- employees number start -->

                <div class="col-md-12 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="phoneNumber">Employee Number :</label>
                    <input type="number" id="phoneNumber" class="form-control form-control-lg" />     
                  </div>
                </div>
             </div>
            <!-- address  start -->

             <!-- phone email row start -->
             <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="emailAddress">Email :</label>
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="phoneNumber">Phone Number :</label>
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
            <!-- end phone email -->
      <!-- address start -->
             <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="address">address :</label>  
                                  <input type="text" id="address" class="form-control form-control-lg" />
                            </div>
                            </div>
               </div>
       <!-- address end -->
<!-- day start -->
   <div class="row">
              <div class="col-md-16 mb-4 pb-2">
                      <div class="form-outline">
                            <label class="form-label" for="address">Day :</label>  
                            <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Saturday</option>
                    <option value="3">Sunday</option>
                    <option value="4">Monday</option>
                    <option value="5">Tuesday</option>
                    <option value="6">Wednesday</option>
                    <option value="7">Thursday</option>
                    <option value="8">Friday</option>
                  </select>
                        </div>
                     </div>
               </div>
       <!-- day end -->
           <!-- date time row start -->
           <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="date">Date :</label>
                    <input type="date" id="date" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="time">Time:</label>
                    <input type="time" id="time" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
      <!--  date time  Expenses row end -->
               <!-- customer feedback Expenses  row start -->
             <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="express">Expenses :</label>
                    <input type="number" id="express" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="emailAddress">Expenses  Description :</label>
                    <input type="text" id="emailAddress" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
      <!-- customer feedback Expenses row end -->
      <!-- comment start -->
        <!-- address start -->
        <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="comment">Comment :</label>  
                                  <input type="text" id="comment" class="form-control form-control-lg" />
                            </div>
                            </div>
               </div>
       <!-- address end -->
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