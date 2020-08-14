@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Customer Profile Page </h2>
	<form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
              	@csrf
               <div class="form-group">
               	<img src="{{asset('frontend/img/1.jpg')}}" class="rounded-circle w-25 h-25">
                {{-- <input type="file" class="form-control-file" placeholder="profile" name="user_profile">
                
                  <small class="text-danger">
                    
                  </small> --}}

                 
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" name="user_name" value="Mg Mg">
                
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              
              <div class="form-group">
                <input type="email" class="form-control form-control-user" placeholder="Email Address" name="user_email" value="mgmg@gmail.com">
                
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              
              <div class="form-group">
                <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="user_phone" value="0987654356">
               
                  <small class="text-danger">
                    
                  </small>

                  
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Address" name="user_address" >Mandalay</textarea>
                
                  <small class="text-danger">
                  </small>

              </div>

              
              
              <input type="submit" class="btn btn-primary " value="Edit Profile
              ">
              
              
            </form>
</div>
@endsection