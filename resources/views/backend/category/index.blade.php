@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-block">Category List (Table)</h2>
	<a href="{{route('category.create')}}" class="btn btn-success">Add Brand</a>
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
				<td>1</td>
				<td>001 <a href="{{route('category.show',1)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
				
				<td>5500 MMK</td>
				<td>
					<a href="{{route('category.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection