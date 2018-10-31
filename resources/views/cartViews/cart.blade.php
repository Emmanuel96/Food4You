<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Naija Bites</title>



        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/Chendu.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        {{--Google Fonts--}}
    <!-- Custom Fonts -->
        {{--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


   <!--   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]--> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


        <style>

            .flat-table {
                display: block;
                font-family: Montserrat, Helvetica, sans-serif;
                -webkit-font-smoothing: antialiased;
                font-size: 115%;
                overflow: auto;
                width: auto;
            }
            th {
                background-color: black;
                color: white;
                font-weight: normal;
                padding: 20px 30px;
                text-align: center;
            }
            td {
                background-color: rgb(238, 238, 238);
                color: rgb(111, 111, 111);
                padding: 20px 30px;
            }

           
            body
            {
                background-color: #eee;
                margin:0; 
                padding: 0; 
            }
            .menu_row{
                margin-bottom:50px;
            }
            .qty
            {
                width: 35px;
            }
            
            .center{
                margin: auto;
            }
            
            .smallFont
            {
                font-size: 20px;
            }
            
            img.center
            {
              display: block;
              margin-left: auto;
              margin-right: auto;
            }
            .restaurantCards
            {
                width: 60%; 
                margin-bottom: 40px;
            }

            .fullContainer 
            {
                padding: 0; 
                margin-left: 20;
            }
            .container
            {
                padding: 0;
                /*margin: 0px; */
            }

          

            @media screen and (max-width: 414px)
            {

                td
                {
                    width: 30%;
                }
            	.cartButtons 
            	{
            		margin-left: 70px !important; 
            		width: 60% !important; 	
            	}

                footer
                {
                    display: none !important;     
                }
                 
				.categoryNav
				{
					padding-right: 10px !important; 
					padding-left: 7px !important;

				}

                .w3-card-4
                {
                    margin-bottom: 30px; 
                }

                .mobile_resp
                {
                    width: 100% !important;
                }

                .row
                {
                    margin-bottom: 0;
                    margin-left: auto !important;
                    margin-right: auto !important;
                }
                #category_nav.affix
              {
                top: 51px;
                width: 100%;
                z-index: 1; 
              }

                .nav
                {
                    padding-left: 13px; 
                }
                .nav .navbar-nav
                {
                    background-color:black !important;
                }
                .navbar-nav li
                {

                    display:inline !important;
                    list-style-type:none !important; 
                    float:left !important; 

                }

                .first_category_mobile
                {
                    /*margin-lef*/
                }

                .nav-item .cat-link
                 {
                    font-size: 12px !important;
                    padding: 15px 5px !important; 
                 }
            }

            @media screen and (min-width: 768px)
            {
            	.cartButtons 
            	{
            		margin-left: 200px !important; 
            	}

                 .categoryNav
                 {
                    padding-right: 10px !important; 
                    padding-left: 7px !important;

                 }
                 #basket_div.basket
                 {
                    margin-left: 0px !important;
                    /*padding-right: 3px !important;*/  
                 }   
                 .nav-item .cat-link
                 {
                    padding: 15px 5px !important; 
                 }
            }

           
               @media screen and (min-width: 991px) {
             /* start of large tablet styles */

             .cartButtons 
            	{
            		margin-left: 250px !important; 
            	}
                 .categoryNav
                 {
                     padding-right: 10px !important; 
                    padding-left: 10px !important;
                 }
                 #basket_div.basket
                 {

                 }

                  .basket.pull-right
                  {
                    /*padding-right: 20px; */
                  }
            }


        


                        /* #####################################################################
               #
               #   Project       : Modal Login with jQuery Effects
               #   Author        : Rodrigo Amarante (rodrigockamarante)
               #   Version       : 1.0
               #   Created       : 07/28/2015
               #   Last Change   : 08/02/2015
               #
               ##################################################################### */
               
/*            @import url(http://fonts.googleapis.com/css?family=Roboto);

            * {
                font-family: 'Roboto', sans-serif;
            }*/

        </style>
    </head>
   <body id="page-top" class="index">

    <!-- Navigation -->
    <nav style="background-color:#fff;" id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><i class = "fa fa-cutlery"></i>Naija Bites</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style = "">
               <ul class="nav navbar-nav navbar-right" ">
                      @if (!Auth::user())
                            <li class = "nav-item"> <a class="nav-link btn btn-primary" href="/login" style="color: black; text-transform: none; ">Sign in</a></li>
                            <li class = "nav-item"> <a class="nav-link btn btn-primary" href="/register" style="border-color:#fed136; background-color: transparent; margin-left: 10px; color: black; text-transform: none; ">Register</a></li>
                        @else
                            <li class=" nav-item dropdown">
                                <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @if(Auth::user()->user_role == 1 || Auth::user()->user_role == 3)
                                        <li class = "nav-item">
                                            <a class="nav-link" href="{{route('admin.viewProducts')}}">
                                                Dashboard
                                            </a>

                                    @endif
                                </ul>
                            </li>
                        @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    


    <div id = "category_nav" class="categoryNav center" style = "font-family: Montserrat, Helvetica, sans-serif; background-color: #fff; padding-left: 72px; padding-right:100px; height: 55px; margin-bottom: 20px; border-bottom: 1px solid #e8ebeb; border-top: 3px solid #e8ebeb;">
    	<ul class="nav navbar-nav nav-left " style = "margin-top: auto; margin-bottom: auto;    font-family: ClanPro-News, Helvetica, sans-serif;
 ">
    		<li class="nav-item"><a href = "#most_popular" class="nav-link cat-link page-scroll">Most Popular</a></li>
    		<li class="nav-item"><a href = "#ice_tea" class="page-scroll cat-link" > Organic Milk</a></li>
    		<li class="nav-item"><a href = "" class= "page-scroll cat-link" >Green Tea</a></li>
<!--     		<li class="nav-item"><a href = "" class= "page-scroll cat-link" >Iced tea</a></li>
 -->    </ul> 
    </div>

    </div>



<div class = "container">
	<div id = "basket_div" class="basket" style="padding-top: 3px; background-color:#fff; border-color: black; height:100%; width:100%;">
	        
             <div id = "basket_basket">
	        <!-- So after the Hr, i need to list the items in the cart -->
	          @if($products != null)
	            <div>
	             <table style="border-top:0px;" class="table table-hover" id= "cartTable">
	                <tbody >
	                    @foreach($products as $product)
	                     <tr id = "{{$product['item']['product_id']}}">                          
                        <td style = "width:30%; ">
                            <a style = "border-radius: 9px; height: 5px; padding: 0;" href="" onclick = "deleteCartItem('{{$product['item']['product_id']}}')" >
                                <span class="fa-stack fa-sm">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-minus  fa-stack-1x" style="color: white; padding-top:1px;"></i>
                                </span>
                            </a>
                            <span style = "font-size: 13px; font-weight: 13px;" id = "quantity{{$product['item']['product_id']}}">{{$product['qty']}}</span>
                            <a href="#" style = "border-radius: 20px;" onclick = "openModalAndStoreId({{$product['item']['product_id']}})">
                                <span class="fa-stack">
                                    <i  class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i style="padding-top:1px; color:white;" class="fa fa-plus fa-stack-1x"   ></i>
                                </span></a>
                        </td>
                        <td>  {{$product['item']['product_name']}}  </td>
                        <td align="right" id="price{{$product['item']['product_id']}}" style = "vertical-align:middle;">£{{$product['price']}}</td>
                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	          </div>
	          @else 
	            <p style="margin-left:20px; margin-top: 10px;"> There's nothing in the cart </p>
	         @endif
             </div>
   	         <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >

	         <a  href="./checkout" class = "btn btn-primary btn-lg cartButtons" style="color:black; margin-left: 300px; margin-bottom: 30px;  border-radius: 0px; width: 50%;" href = "./checkout" >Go to Checkout</a>

	           <a  href="/menu/Eat Is Greek" class = "btn btn-success btn-lg cartButtons" style="color:white; margin-left: 300px; margin-bottom: 10px;   border-radius: 0px; width: 50%;" >Add More Items</a>

	 </div>
</div>

<footer id= "mobile_footer" style = "display:none; background-color:#fff; height: 30px; position: fixed; bottom: 0%; width: 100%; "> 
    <a href="www.google.com" class = "btn btn-primary" style = "width: 70%; border-radius: 0; color: black; "> Basket is Empty  <i class="fa fa-shopping-cart fa-1x"></i></a>
</footer>

<footer class = "container-fluid" style = "width: 100%; margin-left: -20; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Naija Bites 2017</span>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-wechat"></i></a>
                        </li>
						<li><a href="https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com"><i class="fa fa-weibo"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src ="{{URL::asset('js/agency.js')}}" ></script>
    <script src ="{{URL::asset('js/contact_me.js')}}" ></script>
    <script src ="{{URL::asset('js/jqBootstrapValidation.js')}}" ></script>
<script> 
    var id; 
    function openModalAndStoreId(idd)
    {
        event.preventDefault() 
        id = idd;  
        addItemToCart(id); 
        // $('#extras_menu').modal('show');
    }
    
    //FUNCTOIN PASSES A SELECTED PRODUCT TO CART CONTROLLER
    //TO BE ADDED TO THE CART

    function incrementQty(idd)
    {
         event.preventDefault() 
         id = idd;  

        //AJAX with jquery to pass the selected item to the cart controller
        $.ajax({
              type: 'GET',
              url: '{{route('product.addToCart')}}',
              data: {id: id,qty: 1, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                    //after the item is added to the cart, then i want to change the cart quantity at the top of the page
                    $('#totalQty').text(output.productQty);

                    // document.getElementById('quantity'+id).html= " "; 
                    $('#extras_menu').modal('hide');
                    //on success change the number 

                    //yh we are  hiding the modal, but we also need to get the list of products 


                    document.getElementById('basket_basket').innerHTML = output.listOfItems; 
                    document.getElementById('quantity'+id).textContent =  output.productQty; 

                    $('#total').text("₦"+output.total);

                    $('#subTotal').text("₦"+output.subTotal);
              }
        });   
    }

   function addItemToCart(id)
    {   


        //get all the inputs (checkboxes and radio boxes) 
        // var extras = ($("form").serializeArray());

        // //extra string is meant to hold the extras array by contatonating them into itself 
        // //get the value of the fillingsOption as it's a radio box
        // var extraString = $('input[name="fillingsOption"]:checked').val();

        // //get values of other extras options 
        // jQuery.each( extras, function( i, field ) {
        //     // $( "#results" ).append( field.value + " " );
        //     if(field.value == "on")
        //     {
        //         //contantonate value of extra string with name of input
        //         extraString += ", " + field.name; 
        //     }
        // });

        //AJAX with jquery to pass the selected item to the cart controller
        $.ajax({
              type: 'GET',
              url: '{{route('product.addToCart')}}',
              data: {id: id,qty: 1, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                    //after the item is added to the cart, then i want to change the cart quantity at the top of the page
                    $('#totalQty').text(output.productQty);

                    // document.getElementById('quantity'+id).html= " "; 
                    // $('#extras_menu').modal('hide');
                    //on success change the number 

                    //yh we are  hiding the modal, but we also need to get the list of products 


                    document.getElementById('basket_basket').innerHTML = output.listOfItems; 
                    document.getElementById('quantity'+id).textContent =  output.productQty; 

                    $('#total').text("₦"+output.total);

                    $('#subTotal').text("₦"+output.subTotal);
              }
        });   

    }

    function deleteCartItem(id)
    {
        event.preventDefault() 
          //AJAX with jquery to pass the selected item to the cart controller
        var qty = 1;
        $.ajax({
              type: 'DELETE',
              url: '{{route('cart.delete')}}',
              data: {id: id,qty: qty, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output)
              {
                  //after the item is added to the cart, then i want to change the cart quantity at the top of the page
                    $('#totalQty').text(output.productQty);

                    // document.getElementById('quantity'+id).html= " "; 
                    $('#extras_menu').modal('hide');

                    $('#total').text("₦"+output.total);

                    $('#subTotal').text("₦"+output.subTotal);

                    document.getElementById('basket_basket').innerHTML = output.listOfItems;  
              }
        });   
    }
</script>

