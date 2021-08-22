@extends('master')
@section('content')



<div class="container login-custom">

	<!--  Trending Product section start  -->
	<div class="row">
	<div class="col-12">
	<h1> Order Now </h1>
    </div>
	
	<div class="col-12">
	<table class="table">
	<tr>
	<th> Price </th>
	<td>INR {{$total}}</td>
	</tr>
	
	<tr>
	<th> GST </th>
	<td>INR 0</td>
	</tr>
	
	<tr>
	<th> Delivery Charge </th>
	<td>INR 100</td>
	</tr>
	
	<tr>
	<th> Total Amount  </th>
	<td>INR {{$total+100}}</td>
	</tr>
	
	</table>
	
	
	<form method="POST" action="orderplace">
	@csrf
	<div class="form-group row">
	<label class="col-sm-2 col-form-label"> Delivery Address</label>
	<div class="col-sm-10">
	<textarea class="form-control" name="address" placeholder="Enter Delivery Address "></textarea>
	</div>
	</div>
	<div class="form-group row">
	<label class="col-sm-2 col-form-label">Payment Mode </label>
	<div class="col-sm-10">
	<input type="radio" name="payment" value="online"> Online Payment  &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp; 
	<input type="radio" name="payment" value="cod"> COD  &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp; 
	<input type="radio" name="payment" value="emi"> EMI Payment  &nbsp; &nbsp; 
	</div>
	</div>
	
	<div class="form-group row">
	<label class="col-sm-2 col-form-label"> </label>
	<div class="col-sm-10">
	<input type="submit" value="Payment Now" class="btn btn-danger">
	</div>
	</div>
	
	</form>

	</div>
	</div>

</div>
@endsection