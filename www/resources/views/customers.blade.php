@extends('layout')
@section('content')
    <div class="form-group container">
    	<input id="myInput" type="text" class="form-control" placeholder="Search">
    </div>
    <div class="container">
    	 @if ($message = $head)
        <div class="">
            <h3>{{ $message }}</h3>
        </div>
    @endif
      	<table class="table" >
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Name</th>
		        <th>MobileNumber</th>
		        <th>Address</th>
		        <th>Quantity</th>
		        <th>Action</th>
            <th>Edit</th>
		        <th>Invoice</th>
            <th>Last month bill</th>
		      </tr>
		    </thead>
    		<tbody id="myTable">
      			@foreach($customers as $customer)
      				<tr>
      					<td>{{$customer->id}}</td>
      					<td>{{$customer->name}}</td>
      					<td>{{$customer->mobile}}</td>
      					<td><pre>{{$customer->address}}</pre></td>
      					<td>{{$customer->quantity}} LTR</td>
      					@if($current)
      					<td>
      						<form method="get" action="disable">
      							<input type="hidden" name="id" value="{{$customer->id}}">
      							<button type="submit" class="btn btn-danger">Disable</button>
      						</form>
      					</td>
      					@endif
      					@if($all)
      					<td>
      						<form method="get" action="enable">
      							<input type="hidden" name="id" value="{{$customer->id}}">
      							<button type="submit" class="btn btn-success">Enable</button>
      						</form>
      					</td>
      					@endif
      					<td>
      						<form method="get" action="editc">
      							<input type="hidden" name="id" value="{{$customer->id}}">
      							<button type="submit" class="btn btn-primary">Edit</button>
      						</form>
      					</td>
                <!-- <td>
                  <form method="get" action="view_invoice">
                    <input type="hidden" name="id" value="{{$customer->id}}">
                    <button type="submit" class="btn btn-success">View invoice</button>
                  </form>
                </td> -->
                <td>
                  <form method="get" action="view_invoice">
                    <input type="hidden" name="id" value="{{$customer->id}}">
                    <input class="" type="month" name="month" value="{{\Carbon\Carbon::now()->format('Y-m')}}">
                    <button type="submit" class="btn btn-success">Bill</button>
                  </form>
                </td>
                <td>
                  <form method="get" action="view_last_invoice">
                    <input type="hidden" name="id" value="{{$customer->id}}">
                    <button type="submit" class="btn btn-success">View last month invoice</button>
                  </form>
                </td>
                
                
      				</tr>
      			@endforeach
    		</tbody>
  		</table>
    </div>
    
@endsection