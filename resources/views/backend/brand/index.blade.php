@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-block">Brand List (Table)</h2>
	<a href="{{route('brand.create')}}" class="btn btn-success">Add Brand</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@php $i=1;@endphp
				@foreach($brand as $brand)
				<td>{{$i++}}</td>
				<td>{{$brand->name}} <a href="{{route('brand.show',$brand->id)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
				
				<td>
					<a href="{{route('brand.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
					
					<form method="post" action="{{route('brand.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection