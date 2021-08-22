<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workwithshankar :: E Commerce Website </title>

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
    .row {
    margin-right: 0px !important; 
    margin-left: 0px !important;
}

.webistefname{
    color: #4285f4;
}
.webistemname{
    color: #ea4335;
    margin-left: -4px;
    margin-right: -4px;
    font-weight: 700;
}
.webistelname{
    color: #34a853;
}

.first-letter {
  font-size: 35px;
}
.pagemainheading{
    font-size: 25px;
    border-bottom: 1px solid #ccc;
    color: #ed5135;
}
.panel-default {
    background: #4285f4 !important;
    color: #fff !important;
    border-color: #ddd !important;
}

.navbar {
    position: relative !important;
    min-height: 50px !important;
    margin-bottom: 2px !important;
    border-bottom: 3px solid #00de05;
    border-top: 3px solid #ea4335
}
.homeslidercss
{
    border-bottom: 1px solid #00de05;
}

.productdetailbtn
{
    display: inline-block;
    float: left;
    margin-right: 30px;
}

.productdetailbuy
{
    display: inline-block;
    float: left;
}

</style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>