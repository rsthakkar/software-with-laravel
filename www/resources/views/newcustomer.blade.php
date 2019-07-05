@extends('layout')
@section('content')
<div class="container">
    	<h3>Add new customer</h3>

    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 

    <div class="container">
    	
	    <form  action="store" id="new_C">
	    	@include('customer_form')
		</form>

    </div>
@endsection
