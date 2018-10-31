@extends('master')

@section('title', 'menu')

@section('content')
	@if(Session::has('success'))
		<div class="row">
		    <div style="margin-top:20px;" class = "alert alert-success mx-auto">
		        <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
		        {{Session::get('success')}}
		    </div>
		</div>
	@endif
    <div class="w3-container mx-auto">
		<div class="row">
			<h1 class="text-center"> MENU ITEMS </h1>
		</div>
		
			<?php $i = 0;  ?>

			
            <!-- FOR EACH LOOP TO DISPLAY MENU  -->
			@foreach ($menu as $m)
				@if( $i == 0 || $i == 3 )
					<div class="row mx-auto menu_row">
					
				@endif
				<div class="col-sm-4">
					<div class="w3-card-4">
						<div class="w3-container w3-center">
							<h3>{{$m->product_name}}</h3>
							<img class="img-fluid" src="/storage/images/{{$m->product_image}}" alt="Avatar" >

							<div class="w3-section">
								@if($restaurant_status == 1)<a  class ="btn btn-primary" href="#" onclick = "openModalAndStoreId({{$m->product_id}})" >ADD TO CART <i class="fa fa-cart-plus"></i></a>@endif
							</div>
							<div class="w3-section">
								<h3>Price: ₦{{$m->product_price}}</h3>
							</div>
						</div>
					</div>
		      	</div>
				@if($i == 2 || $loop->last)
					</div>
					<?php 
						$i = 0; 
					?>
				@else 
					<?php $i++ ?>
				@endif
			@endforeach		
	</div>

<div class="pagination-bar text-center">
       {{ $menu->links() }}
</div>


<!-- Begin of my modal  -->
<div class="modal fade" id = "extras_menu">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Extra's Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <h5 style = "width: 100%; text-align:center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;"><span style = "background: #fff; padding: 0 10px; font-weight:bold;">FILLINGS</span></h5>
         
         	<!-- <fieldset class = "form-group"> -->
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" value = "Slow Cooked Chilli Beef" name = "fillingsOption">
						Slow Cooked Chilli Beef
					</label>
         		</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name = "fillingsOption" value = "Chicken chipotle">
						Chicken chipotle
					</label>
	         	</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name = "fillingsOption" id= "Vegetarian Chilli" value = "Vegetarian Chilli">
						Vegetarian Chilli
					</label>
         		</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name = "fillingsOption" id = "Pulled Pork" value = "Pulled Pork">
						Pulled Pork
					</label>
         		</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name = "fillingsOption" value = "Halloumi">
						Halloumi
					</label>
				</div>
         <!-- </fieldset> -->
         
        <h5 style = "width: 100%; text-align:center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;"><span style = "background: #fff; padding: 0 10px; font-weight: bold;">TOPPINGS</span></h5>

				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
						Lettuce
					</label>
         		</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name= "Pico De Gallao" class="form-check-input">
						Pico De Gallao 
					</label>
	         	</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Guacomole" class="form-check-input">
						Guacamole
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Grated Cheese" class="form-check-input">
						Grated cheese
					</label>
         		</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name="Jalapeno" class="form-check-input">
						Jalapeño
					</label>
         		</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Sour Cream" class="form-check-input">
						Sour cream
					</label>
         		</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Chipotle Mayo" class="form-check-input">
						Chipotle mayo
					</label>
         		</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Lime Wedge" class="form-check-input">
						Lime wedge
					</label>
	         	</div>

        <h5 style = "width: 100%; text-align:center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;"><span style = "background: #fff; padding: 0 10px; font-weight: bold;">HOT SAUCE</span></h5>

				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Medium Saucec" class="form-check-input">
						Medium
					</label>
         		</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name= "Hot Sauce" class="form-check-input">
						Hot 
					</label>
         		</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" name = "Inferno Sauce" class="form-check-input">
						Inferno
					</label>
         		</div>
    	</form>
      <div class="modal-footer">
        @if($restaurant_status == 1)<button type="button" class="btn btn-primary" onclick = "addItemToCart()">Add to Cart</button> @endif 
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



@endsection

@section('footerScripts')
    @parent
@endsection

<script>
	var id; 
	function openModalAndStoreId(idd)
	{
		id = idd;  
		$('#extras_menu').modal('show');
	}
	
	//FUNCTOIN PASSES A SELECTED PRODUCT TO CART CONTROLLER
	//TO BE ADDED TO THE CART
   function addItemToCart()
    {   
	
    	//get all the inputs (checkboxes and radio boxes) 
    	var extras = ($("form").serializeArray());

    	//extra string is meant to hold the extras array by contatonating them into itself 
    	//get the value of the fillingsOption as it's a radio box
		var extraString = $('input[name="fillingsOption"]:checked').val();

		//get values of other extras options 
		jQuery.each( extras, function( i, field ) {
			// $( "#results" ).append( field.value + " " );
			if(field.value == "on")
			{
				//contantonate value of extra string with name of input
				extraString += ", " + field.name; 
			}
		});

		//AJAX with jquery to pass the selected item to the cart controller
    	var qty = 1;
    	$.ajax({
			  type: 'GET',
			  url: '{{route('product.addToCart')}}',
			  data: {extras: extraString, id: id,qty: qty, _token: '{{ csrf_token() }}'},
			  dataType: 'json',
			  success: function(output){
			  		//after the item is added to the cart, then i want to change the cart quantity at the top of the page
			  		$('#totalQty').text(output);
			  		$('#extras_menu').modal('hide');
			  }
		});	  
    }


</script>


