@extends('master')

@section('title', 'menu')

@section('content')
    <div class="w3-container mx-auto">
		<div class="row">
			<h1 class="text-center"> MENU ITEMS </h1>
		</div>
		

		
		<div class="row mx-auto menu_row">
			<div class="col-sm-4">
				<div class="w3-card-4 " >

					<div class="w3-container w3-center">
						<h3>ITEM 1</h3>
						<img class="img-fluid" src="{{ URL::asset('img/images.jpg')}}" alt="Avatar" >

						<div class="w3-section">
							<button class="btn btn-primary">BUY NOW</button>
							<button class="btn btn-primary">ADD TO CART</button>
						</div>
						<div class="w3-section">
						    <label for="sel1">Select Quantity:</label>
							<select id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<h3>Price: ₦43</h3>
						</div>
					</div>

				</div>
			</div>
			
			<div class="col-md-4">
			
				<div class="w3-card-4 " >
					<div class="w3-container w3-center">
						<h3>ITEM 2</h3>
						<img class="img-fluid" src="{{ URL::asset('img/images.jpg')}}" alt="Avatar" >

						<div class="w3-section">
							<button class="btn btn-primary">BUY NOW</button>
							<button class="btn btn-primary">ADD TO CART</button>
						</div>
						<div class="w3-section">
						    <label for="sel1">Select Quantity:</label>
							<select id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<h3>Price: ₦43</h3>
						</div>
					</div>

				</div>		
			</div>
			
			<div class="col-sm-4">
				<div class="w3-card-4 " >

					<div class="w3-container w3-center">
						<h3>ITEM 3</h3>
						<img class="img-fluid" src="{{ URL::asset('img/images.jpg')}}" alt="Avatar" >

						<div class="w3-section">
							<button class="btn btn-primary">BUY NOW</button>
							<button class="btn btn-primary">ADD TO CART</button>
						</div>
						<div class="w3-section">
						    <label for="sel1">Select Quantity:</label>
							<select id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<h3>Price: ₦43</h3>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		<div class="row mx-auto">
			<div class="col-sm-4">
				<div class="w3-card-4 " >

					<div class="w3-container w3-center">
						<h3>ITEM 4</h3>
						<img class="img-fluid" src="{{ URL::asset('img/images.jpg')}}" alt="Avatar" >

						<div class="w3-section">
							<button class="btn btn-primary">BUY NOW</button>
							<button class="btn btn-primary">ADD TO CART</button>
						</div>
						<div class="w3-section">
						    <label for="sel1">Select Quantity:</label>
							<select id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<h3>Price: ₦43</h3>
						</div>
					</div>

				</div>
			</div>
			
			<div class="col-sm-4">
			
				<div class="w3-card-4 " >
					<div class="w3-container w3-center">
						<h3>ITEM 5</h3>
						<img class="img-fluid" src="{{ URL::asset('img/images.jpg')}}" alt="Avatar" >

						<div class="w3-section">
							<button class="btn btn-primary">BUY NOW</button>
							<button class="btn btn-primary">ADD TO CART</button>
						</div>
						<div class="w3-section">
						    <label for="sel1">Select Quantity:</label>
							<select id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<h3>Price: ₦43</h3>
						</div>
					</div>

				</div>		
			</div>
			
			<div class="col-sm-4">
				<div class="w3-card-4 " >

					<div class="w3-container w3-center">
						<h3>ITEM 6</h3>
						<img class="img-fluid" src="{{ URL::asset('img/images.jpg')}}" alt="Avatar" >

						<div class="w3-section">
							<button class="btn btn-primary">BUY NOW</button>
							<button class="btn btn-primary">ADD TO CART</button>
						</div>
						<div class="w3-section">
						    <label for="sel1">Select Quantity:</label>
							<select id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<h3>Price: ₦43</h3>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</div>

@endsection

@section('footerScripts')
    @parent
@endsection

