@extends('layout')
@section('content')
<div class="container">
	<h3 style="text-align: center; margin: 30px; font-weight: bolder;">Invoice</h3>
</div>

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<table class="table " >
			<tbody>
				<tr>
					<th>Name:</th>
					<td>{{$customer->name}}</td>
				</tr>
				<tr>
					<th>Number:</th>
					<td>{{$customer->mobile}}</td>
				</tr>
				<tr>
					<th>Address:</th>
					<td><pre>{{$customer->address}}</pre></td>
				</tr>
			</tbody>
		</table>
	</div>

</div>
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Quantity</th>
					<th>Date</th>
					<th>Time</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $order)
					<tr>
						<td>{{$order->id}}</td>
						<td class="qnt">{{$order->quantity}} LTR</td>
						<td>{{\Carbon\Carbon::parse($order->created_at)->format('d/m/Y')}}</td>
						<td>{{\Carbon\Carbon::parse($order->created_at)->format('h:i A')}}</td>
					</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td>Total:<span id="total"></span>
						<div>Price:<strong>&nbsp;₹</strong>&nbsp;<span id="bill"></span></div>
					</td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
@endsection