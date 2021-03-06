@extends('master')
@section('content')
<div class="container custom-product">
	<div class="row">
		
		<div class="col-sm-10">
			<div class="trending-wrapper">
				<h4>Result for products</h4>
				<a class="btn btn-success" href="ordernow">Order Now</a><br><br>
				@foreach($data as $item)
					<div class="row searched-item cart-list-devider">
						
							<div class="col-sm-3">
								<a href="#">
									<img src="{{$item->gallery}}" class="trending-image">
									
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#">
									
									<div class="">
										<h2>{{$item->name}}</h2>
										<h5>{{$item->description}}</h5>
									</div>
								</a>
							</div>
							<div class="col-sm-3">
								<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
							</div>
						
					</div>
				@endforeach
				<a class="btn btn-success" href="ordernow">Order Now</a><br><br>
			</div>
		</div>
		
	</div>
</div>
@endsection
