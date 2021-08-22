@extends('master')
@section('content')



<div class="container login-custom">

	<!--  Trending Product section start  -->
	<div class="row">
	<h1> Products Cart List 
	<a href="/ordernow" class="btn btn-info" style="    float: right;"> Order Now </a>		
	<hr></h1>
	
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
	@foreach($products as $item)
	<tr>
	<th scope="row">1</th>
	<td><img src="{{$item->gallery}}" class="card-img-top trading-prodcut-img" alt="..."></td>
	<td>{{$item->name}}</td>
	<td>{{$item->price}}</td>
	<td>
	<a href="/removecart/{{$item->cart_id}}" class="btn btn-danger" >Remove From Cart</a>   
	</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>

	<a href="/ordernow" class="btn btn-info" style="    float: right;"> Order Now </a>	

</div>
@endsection