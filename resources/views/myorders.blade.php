@extends('master')
@section('content')
<div class="container custom-product">
	<div class="row">
		
		<div class="col-sm-10">
			<div class="trending-wrapper">
				<h4>My Orders</h4>
				
				@foreach($orders as $item)
					<div class="row searched-item cart-list-devider">
						
							<div class="col-sm-3">
								<a href="#">
									<img src="{{$item->gallery}}" class="trending-image">
									
								</a>
							</div>
							<div class="col-sm-4">
								<div class="">
									<h2>Name : {{$item->name}}</h2>
									<h5> Delivery Status : {{$item->status}}</h5>
									<h5>Address : {{$item->address}}</h5>
									<h5> Payment Status : {{$item->payment_status}}</h5>
									<h5>Payment Method : {{$item->payment_method}}</h5>
								</div>
							</div>
							
						
					</div>
				@endforeach
			</div>
		</div>
		
	</div>
</div>
@endsection
