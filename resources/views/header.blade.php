<?php 
use App\Http\COntrollers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"> 
       <span class="webistefname"><span class="first-letter">W</span>ork</span>
       <span class="webistemname"><span class="first-letter">W</span>ith</span>
       <span class="webistelname"><span class="first-letter">S</span>hankar</span>
    </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/"> Home </a></li>
        <li><a href="/about-us">About Us</a></li>
        <li><a href="/contact-us">Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/search">
        <div class="form-group">
          <input type="text" name="query" class="form-control header-search" placeholder="Search Product Here" required >
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
         @if(Session::has('user'))
         <li><a href="/cartlist">Cart Item ({{$total}})</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="/myorder">Order List</a></li>
            <li><a href="#">Change Password </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
          <li><a href="/register"><button class="btn btn-primary btn-sm">Register</button></a></li>
          <li><a href="/login"><button class="btn btn-success btn-sm">Login</button></a></li>
          @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>