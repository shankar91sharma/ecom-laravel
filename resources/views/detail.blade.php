@extends('master')
@section('content')


<div class="container">
    <div class="row">
        <h3> Product Detail : {{$products['name']}} <hr></h3>
        <div class="col-sm-6">
            <img src="{{$products['gallery']}}" style="width: 530px;">
        </div>

        <div class="col-sm-6">
            <p><a href="/" class="btn btn-sm btn-warning"> Go Back </a></p>
            <h3> Product Name : {{$products['name']}} </h3>
            <h4> Price : {{$products['price']}} </h4>
            <h5> Category : {{$products['category']}} </h5>
            <h5> Description : {{$products['description']}} </h5>
            <br><br>
            <form action="/add-to-cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                <button class="btn btn-sm btn-primary"> Add To Cart </button>
            </form>

            <button class="btn btn-sm btn-success"> Buy Now </button>
        </div>

    </div>

</div>


@endsection