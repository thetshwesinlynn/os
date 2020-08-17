@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Order Detail (Your UI)</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Casher:{{Auth::user()->name}}<br>
				Voucher:{{$order->voucherno}}<br>
				Date:{{$order->orderdate}}</th>
			</tr>
			<tr>
				<th>No</th>
				<th>Item Name</th>
				<th>Price</th>
				<th>Discount</th>
				<th>Qty</th>
				<th>Total</th>
			</tr>
		</thead>

		<tbody>
			@php $i=1;@endphp
			@foreach($order->items as $order1)
			<tr>
			<td>{{$i++}}</td>
			<td>{{$order1->name}}</td>
			<td>{{$order1->price}}</td>
			<td>{{$order1->discount}}</td>
			<td>{{$order1->pivot->qty}}</td>
			<td>{{$order1->pivot->qty*$order1->price}}</td>
			</tr>
			@endforeach
			<tr>
				<td>total</td>
				<td colspan="4"></td>
				<td>{{$order->total}}</td>
			</tr>
		</tbody>

	</table>
	@endsection