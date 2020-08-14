@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Item Register Page </h2>
	 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
          	<img src="{{asset('frontend/img/1.jpg')}}" class="img-fluid w-100 h-100">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
              	@csrf
               <div class="form-group">
                <input type="file" class="form-control-file" placeholder="profile" name="user_profile">
                
                  <small class="text-danger">
                    
                  </small>

                 
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" name="user_name" value="">
                
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              
              <div class="form-group">
                <input type="email" class="form-control form-control-user" placeholder="Email Address" name="user_email" value="">
                
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user" placeholder="password" name="user_password" value="" >
                
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user" placeholder="Confirm password" name="user_cpassword" value="">
                
                  <small class="text-danger">
                    
                  </small>

                 
              </div>
              <div class="form-group">
                <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="user_phone" value="">
               
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Address" name="user_address" ></textarea>
                
                  <small class="text-danger">
                  </small>

              </div>

              
              
              <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account
              ">
              
              
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="login.html">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection