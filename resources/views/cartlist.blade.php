@extends('master')
@section('content')



<div class="container login-custom">

	<!--  Trending Product section start  -->
	<div class="row">
	<h2 class="pagemainheading"> Products Cart List </h2>
	 @if($products->count() > 0)    
	<a href="/ordernow" class="btn btn-info" style="    float: right;"> Order Now </a>		
	
	<div class="col-12">
	<table class="table">
	<thead class="thead-dark">
	<tr>
	<th scope="col">#</th>
	<th scope="col">Gallery</th>
	<th scope="col">Product Name</th>
	<th scope="col">Price</th>
	<th scope="col">Action</th>
	</tr>
	</thead>

	<tbody>
	<?php
	$sn=1;
	?>
	@foreach($products as $item)
	<tr>
	<th scope="row"><?php echo $sn; ?></th>
	<td><img src="{{$item->gallery}}" class="card-img-top trading-prodcut-img" alt="..."></td>
	<td>{{$item->name}}</td>
	<td>{{$item->price}}</td>
	<td>
	<a href="/removecart/{{$item->cart_id}}" class="btn btn-danger" >Remove From Cart</a>   
	</td>
	</tr>
	<?php
	$sn++;
	?>
	@endforeach
	</tbody>
	</table>
	</div>
	<a href="/ordernow" class="btn btn-info" style="    float: right;"> Order Now </a>	
	@else  
    <div class="col-12">
	<h4 class="text-danger text-bold"> No Product In Cart </h4>
	</div>
    @endif 
	</div>

	

</div>
@endsection