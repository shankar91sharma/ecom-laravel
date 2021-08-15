@extends('master')
@section('content')



<div class="container login-custom">

	<!--  Trending Product section start  -->
	<div class="row">
	<h1> Result Products <hr></h1>
	@foreach($products as $item)
	<div class="col-sm-3">
	<div class="card trading-prodcut-section">
	<img src="{{$item['gallery']}}" class="card-img-top trading-prodcut-img" alt="...">
	<div class="card-body">
	<h5 class="card-title">{{$item['name']}}</h5>
	<a href="detail/{{$item['id']}}" class="btn btn-primary">Add To Cart </a>
	</div>
	</div>
    </div>
	@endforeach
	</div>

</div>
@endsection