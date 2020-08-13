@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail (Your UI)</h2>
	<div class="row">
		<div class="col-md-3 mt-2 pt-2 animated in-left">
			<p><img src="{{asset($item->photo)}}" class="img-fluid"></p>
		</div>

		<div class="col-md-9 mt-2 pt-2 animated in-right">
			<p>Product Name:{{$item->name}}</p>
			<p>Product Code:{{$item->codeno}}</p>
			<p>Product Price:{{$item->price}}</p>
			<p>Description:{{$item->description}}</p>
		</div>
	</div>
</div>
@endsection