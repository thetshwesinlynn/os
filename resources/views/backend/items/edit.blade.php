@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Edit (Form /Old Value)</h2>
	{{-- @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group row">
			<label for="codeno" class="col-sm-2 col-form-label">Codeno</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="codeno" name="codeno" value="{{$item->codeno}}" readonly="readonly">
				<small class="text-danger">{{ $errors->first('codeno') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
				<small class="text-danger">{{ $errors->first('name') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="price" class="col-sm-2 col-form-label">Price</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="price" name="price" value="{{$item->price}}">
				<small class="text-danger">{{ $errors->first('price') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="discount" class="col-sm-2 col-form-label">Discount</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="discount" name="discount" value="{{$item->discount}}">
				<small class="text-danger">{{ $errors->first('discount') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="photo" class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-10">
				<input type="file" class="form-control" id="photo" name="photo" ><p><img src="{{asset($item->photo)}}" class="img-fluid w-25"></p><input type="hidden" name="oldphoto" value="{{$item->photo}}">
				
			</div>
		</div>

		<div class="form-group row">
			<label for="description" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="description" name="description" value="{{$item->description}}">
				<small class="text-danger">{{ $errors->first('description') }}</small>
			</div>
		</div>

		<div class="form-group row">
			<label for="brand" class="col-sm-2 col-form-label">Brand:</label>
			<select class="form-control brand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}"
						@if($brand->id==$item->brand_id)
						{{'selected'}}
						@endif
						>{{$brand->name}}</option>
					@endforeach
					
				</optgroup>
			</select></div>
			<div class="form-group row">
			<label for="subcategory" class="col-sm-2 col-form-label">Subcategory:</label>
			<select class="form-control " name="subcategory">
				<optgroup label="Choose Subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}"
						@if($subcategory->id==$item->subcategory_id)
						{{'selected'}}
						@endif
						>{{$subcategory->name}}</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		</div>

		<button type="submit" class="btn btn-primary" id="update">Update</button>
	</form>
</div>
@endsection