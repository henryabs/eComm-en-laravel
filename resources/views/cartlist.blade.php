@extends('master')
@section('content')
<div class="container custom-product">
	<div class="row">
		
		<div class="col-sm-10">
			<div class="trending-wrapper">
				<h4>Result for products</h4>
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
								<button class="btn btn-warning">Remove from Cart</button>
							</div>
						
					</div>
				@endforeach
			</div>
		</div>
		
	</div>
</div>
@endsection
