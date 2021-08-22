@extends('master')
@section('content')


<div class="container login-custom">
    <div class="row">
        <div class="col-sm-7 col-sm-offset-3">
		   <h1> Contact Us </h1>
            <form action="contact" method="POST">
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
            <label for="exampleInputmobile">Mobile No</label>
            <input type="number" class="form-control" name="mobile" id="exampleInputmobile" aria-describedby="mobileHelp" placeholder="Enter Mobile No" required>
            </div>
			
			<div class="form-group">
            <label for="exampleInputmessage">Message</label>
            <textarea class="form-control" name="message" id="exampleInputmessage" aria-describedby="messageHelp" placeholder="Enter Message" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>
            </form>
        </div>
    </div>

</div>


@endsection