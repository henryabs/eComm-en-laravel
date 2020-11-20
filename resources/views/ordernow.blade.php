@extends('master')
@section('content')
<div class="container custom-product">
	<div class="col-sm-10">
		<table class="table">
		  	<tr>
		      <td>Amount</td>
		      <td>PHP {{$total}}</td>
		    </tr>
		    <tr>
		      <td>Tax</td>
		      <td>PHP 0</td>
		    </tr>
		    <tr>
		      <td>Delivery Charge</td>
		      <td>PHP 10</td>
		    </tr>
		    <tr>
		      <td>Total Amount</td>
		      <td>PHP {{$total + 10}}</td>
		    </tr>
		</table>
		<div>
			<form action="/orderplace" method="POST">
			  @csrf
			  <div class="form-group">
			    <textarea class="form-control" name="address">
			    </textarea>
			  </div>
			  <div class="form-group">
			  	<label for="exampleInputPassword1">Payment Method</label>
			  	<p><input type="radio" value="cash" name="payment"> <span>Gcash</span></p>
			  	<p><input type="radio" value="cash" name="payment"> <span>BDO</span></p>
			  	<p><input type="radio" value="cash" name="payment"> <span>Unionbank</span></p>
			  	<p><input type="radio" value="cash" name="payment"> <span>Cash on delivery</span></p>
			  </div>
			  <button type="submit" class="btn btn-primary">Order Now</button>
			</form>
		</div>
	</div>
</div>
@endsection
