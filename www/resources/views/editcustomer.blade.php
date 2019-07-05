@extends('layout')
@section('content')
<div class="container">
    	<h3>Edit customer</h3>

    </div>
   
 
    <div class="container">
    	
	    <form  action="updatec" id="new_C" method="GET">
            <input type="hidden" name="id" value="{{$customer->id}}">
	    	          <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{$customer->name}}" required>
            </div>
            <div class="form-group">
                <label for="number">Mobile number:</label>
                <input type="text" value="{{$customer->mobile}}" class="form-control" id="number" name="mobile"  pattern="^\d{10}$" maxlength="10" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea rows="7" class="form-control"  id="address" name="address" required>{{$customer->address}}</textarea>
            </div>
            
            <button  id="register" type="submit" class="btn btn-default" name="submit" >Submit</button>
		</form>

    </div>
@endsection
