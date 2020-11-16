@extends('master')
@section('content')
<div class="custom-product">
	<div id="demo" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  <div class="carousel-inner">
			  	@foreach($products as $item)
			  		 <a href="/detail/{{$item['id']}}">
				  		  <div class="carousel-item {{$item['id']==1?'active':''}}">
				  		  <img src="{{$item['gallery']}}" alt="Los Angeles"  height="500" class="center slider-image">
					      <div class="carousel-caption">
					        <h3>{{$item['name']}}</h3>
					      	<p>{{$item['description']}}</p>
					      </div>
			  		 </a>
			  		  	
				    </div>
			    @endforeach
		  		</div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>

		<div class="trending-wrapper">
			<h3>Trending Products</h3>
			@foreach($products as $item)
			<a href="/detail/{{$item['id']}}">
				<div class="trending-item">
			  		  <img src="{{$item['gallery']}}" alt="Los Angeles"  height="500" class="trending-image">
				      <div class="">
				        <h3>{{$item['name']}}</h3>
				      </div>	
				</div>
			</a>
			@endforeach
		</div>
</div>
@endsection