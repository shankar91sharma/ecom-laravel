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
      <a class="navbar-brand" href="/"> Digital Business </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/"> Home </a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/search">
        <div class="form-group">
          <input type="text" name="query" class="form-control header-search" placeholder="Search Product Here">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#">Add To Cart </a></li>
         @if(Session::has('user'))
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Order List</a></li>
            <li><a href="#">Change Password </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
          <li><a href="/login">Login</a></li>
          @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>