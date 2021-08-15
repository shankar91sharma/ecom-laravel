<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Website </title>

    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

</head>
<body>
    {{View :: make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .login-custom{
        min-height:490px;
    }
    .slider-img
    {
        height: 400px !important;
    }
    .login-product
    {
        height: 950px; 
    }
    .slider-img-h3 {
        color: black;
    }
    .trading-prodcut-section{
        height: 224px !important;
    /*
    width: 12%;
    margin: 1%;
    */
    float: left;
    text-align: center;
    }

    .trading-prodcut-img{
        height: 130px !important;
    }
    .header-search{
        width: 380px !important;
    }
</style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>