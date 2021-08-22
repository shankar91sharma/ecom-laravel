@extends('master')
@section('content')



<div class="container login-custom">

	<!--  Trending Product section start  -->
	<div class="row">
	<h2 class="pagemainheading"> Order List </h2>
	@if($orderdata->count() > 0)    
	<div class="col-12">
	<table class="table">
	<thead class="thead-dark">
	<tr>
	<th scope="col">#</th>
	<th scope="col">Gallery</th>
	<th scope="col">Product Name</th>
	<th scope="col">Price</th>
	<th scope="col">Address</th>
	<th scope="col">Payment Mode </th>
	<th scope="col">Payment Status</th>
	<th scope="col">Delivery Status</th>
	</tr>
	</thead>

	<tbody>
	<?php
	$sn=1;
	?>
	@foreach($orderdata as $item)
	<tr>
	<th scope="row"><?php echo $sn; ?></th>
	<td><img src="{{$item->gallery}}" class="card-img-top trading-prodcut-img" alt="..."></td>
	<td>{{$item->name}}</td>
	<td> INR {{$item->price}}</td>
	<td>{{$item->address}}</td>
	<td>{{$item->payment_method}}</td>
	<td><button class="btn btn-warning">{{$item->payment_status}}</button></td>
	<td><button class="btn btn-info">{{$item->status}}</button></td>
	</tr>
	<?php
	$sn++;
	?>
	@endforeach
	</tbody>
	</table>
	</div>
	@else  
    <div class="col-12">
	<h4 class="text-danger text-bold"> No Order Available </h4>
	</div>
    @endif 
	</div>

</div>
@endsection