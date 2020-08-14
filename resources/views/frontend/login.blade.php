@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Item Login Page </h2>
	<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
              	<img src="{{asset('frontend/img/login.jpg')}}" class="img-fluid">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" method="POST" action="backend/signin.php">
                  	@csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" placeholder="Enter Email Address..." name="login_email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  placeholder="Password" name="login_password">
                    </div>
                   
                    <button type="submit"class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>
@endsection