@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2 class="my-4">Item Page Filter By Brand and Category</h2>
	<div class="row">
	@foreach($items as $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$item->name}}</a>
                </h4>
                <h5>{{$item->price}}</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn1 btn btn-info" data-id='{{$item->id}}' data-name='{{$item->name}}' data-photo='{{$item->photo}}' data-price='{{$item->price}}' data-discount='{{$item->discount}}'>Add To Cart</a>
                <a href="{{route('detail',$item->id)}}" class="btn btn-primary">Detail</a>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

         
          @endforeach
</div></div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection