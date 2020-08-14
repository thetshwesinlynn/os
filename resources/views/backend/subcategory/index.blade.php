@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-block">Subcategory List (Table)</h2>
	<a href="{{route('subcategory.create')}}" class="btn btn-success">Add Subcategory</a>
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
			@foreach($subcategory as $subcategory)
				<td>{{$i++}}</td>
				<td>{{$subcategory->name}} <a href="{{route('subcategory.show',$subcategory->id)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
				
				
				<td>
					<a href="{{route('subcategory.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
					<form method="post" action="{{route('subcategory.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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