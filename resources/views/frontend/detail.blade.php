@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Item Detail Page Filter By Brand and Category</h2>
	<div class="row">
		<div class="col-md-3 mt-2 pt-2 animated in-left">
			<p><img src="{{asset($item->photo)}}" class="img-fluid"></p>
		</div>

		<div class="col-md-9 mt-2 pt-2 animated in-right">
			<p>Product Name:{{$item->name}}</p>
			<p>Product Code:{{$item->codeno}}</p>
			<p>Product Price:{{$item->price}}</p>
			<p>Description:{{$item->description}}</p>
			<p>Brand:{{$item->brand->name}}</p>
			<p>Subcategory:{{$item->subcategory->name}}</p>
             <a href="#" class="btn1 btn btn-info"data-id='{{$item->id}}' data-name='{{$item->name}}' data-photo='{{$item->photo}}' data-price='{{$item->price}}' data-discount='{{$item->discount}}'>Add To Cart</a>

		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection