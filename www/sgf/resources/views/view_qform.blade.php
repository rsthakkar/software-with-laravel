@extends('layout')
@section('content')
	<div class="container">
		<h1>Add Quantity</h1>
	</div>
	<div class="container">
		<form action="insert_q"> 
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
				        <th>Name</th>
				        <th>Address</th>
				        <th>Quantity</th>
					</tr>
				</thead>
				<tbody>
				@foreach($customers as $customer)
					<tr>
						<td>{{$customer->id}}</td>
						<td>{{$customer->name}}</td>
						<td><pre>{{$customer->address}}</pre></td>
						<td>
							<input class="form-control" type="text" name="entities[{{$customer->id}}][quantity]" required>
							<input type="hidden" name="entities[{{$customer->id}}][customer_id]" value="{{$customer->id}}">
						</td>
					</tr>
				@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4"><button class="btn btn-primary btn-block"  type="submit">Add data</button></td>
					</tr>					
				</tfoot>
			</table>
		</form>
	</div>
@endsection