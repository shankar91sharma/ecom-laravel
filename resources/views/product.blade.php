@extends('master')
@section('content')


<div class="login-product">
        
	<div id="myCarousel" class="carousel slide homeslidercss" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">

	@foreach($products as $item)
	<div class="item {{$item['id']==1?'active':''}}"><a href="detail/{{$item['id']}}">
	<img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
	<div class="carousel-caption">
	<h3 class="slider-img-h3">{{$item['name']}}</h3>
	<p  class="slider-img-h3">{{$item['description']}}</p>
	</div></a>
	</div>
	@endforeach

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	<span class="sr-only">Next</span>
	</a>
	</div>
	</div>
	
	<!--  Trending Product section start  -->
	<div class="row">
	<h2 class="pagemainheading"> Trending Product </h2>
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