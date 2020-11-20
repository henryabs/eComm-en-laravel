<!DOCTYPE html>
<html>
<head>
	<title>Peachy n` Posh</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
	<div>
		{{View::make('header')}}
		@yield('content')
		<!-- {{View::make('footer')}} -->
	</div>
</body>
<style type="text/css">
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	body{
		/*background-color: #f6b7b1;*/
	}
	
	.center {
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  width: 50%;
	}
	.slider-image{
		height: 500px !important;

	}
	.custom-product{
		height: 500px;
	}
	.carousel-caption{
		background-color: #79a5797a;
	}
	.trending-image{
		height: 100px;
	}
	.trending-item{
		float: left;
		width: 20%;

	}
	.trending-wrapper{
		margin: 30px;
		
	}
	.detail-img{
		height: 400px;
	}
	.search-box{
		width: 500px !important;
	}
	.cart-list-devider{
		border-bottom: 1px solid #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}
</style>
</html>