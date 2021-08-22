@extends('master')
@section('content')


<div class="container login-custom">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
		    <h2 class="pagemainheading"> Customer Register </h2>
            <form action="register" method="POST">
            @csrf
            <div class="form-group">
            <label for="exampleInputname">Full Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter Full Name" required autofocus >
            </div>
			
			<div class="form-group">
            <label for="exampleInputEmail1">Email Id</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Id" required>
            </div>
			
			<div class="form-group">
            <label for="exampleInputmobile">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputmobile" aria-describedby="mobileHelp" placeholder="Enter Password" required>
            </div>
			

            <button type="submit" class="btn btn-info"> Register </button>
            </form>
        </div>
    </div>

</div>


@endsection