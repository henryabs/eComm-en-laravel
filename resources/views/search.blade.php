@extends('master')
@section('content')
<div class="custom-product">
	
		  

		<div class="trending-wrapper">
			
			@if(count($products) > 0)
				<h3>Result for product:</h3>
				@foreach($products as $item)
				<a href="/detail/{{$item['id']}}">
					<div class="searched-item">
				  		  <img src="{{$item['gallery']}}" alt="Los Angeles"  height="500" class="trending-image">
					      <div class="">
					        <h2>{{$item['name']}}</h2>
					        <h5>{{$item['description']}}</h5>
					      </div>	
					</div>
				</a>
				@endforeach
			@else
				<h3>Result for product: no match found!</h3>
			@endif
			
		</div>
</div>
@endsection