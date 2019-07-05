			<div class="form-group">
		    	<label for="name">Name:</label>
		    	<input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="number">Mobile number:</label>
		    	<input type="text" class="form-control" id="number" name="mobile"  pattern="^\d{10}$" maxlength="10" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="address">Address:</label>
		    	<textarea rows="7" class="form-control" id="address" name="address" required></textarea>
		  	</div>
		  	
		  	<button  id="register" type="submit" class="btn btn-default" name="submit" >Submit</button>