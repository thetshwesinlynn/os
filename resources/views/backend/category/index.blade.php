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
				@php $i=1; @endphp
			@foreach($category as $category)
				<td>{{$i++}}</td>
				<td>{{$category->name}} <a href="{{route('category.show',$category->id)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
				
				<td>{{$category->price}}</td>
				<td>
					<a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Edit</a>
					<form method="post" action="{{route('category.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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