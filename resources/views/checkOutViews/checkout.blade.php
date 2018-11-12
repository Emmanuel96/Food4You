  <!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121124308-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121124308-1');
        </script>

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

            .payment-link:active 
            {
                text-decoration: none; 
                color: black; 

            }

            .payment-link:visited
            {
                text-decoration: none; 
                color: black;
            }

            .payment-link:link 
            {
                color: black; 
                text-decoration: none;   
            }

            .payment-link:hover 
            {
                text-decoration: none; 
                color: black;
            }

            .form-label
            {
               font-family: Montserrat, Helvetica, sans-serif;
               color: black;
               font-weight: 100;
            }
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
                .col-xs-12
                {
                  padding-left: 0; 
                  padding-right: 0; 
                }

                .dropDownDiv
                {
                    padding-left: 5% !important; 
                    padding-right: 6% !important;
                }
                .panel-body
                {
                    height: 100%; 
                }

                #restaurant_info
                {
                    width: 100% !important;
                }

                footer
                {
                    display: none !important;   

                }
               #mobile_footer{
                    display: block !important;
                    visibility: visible;
                    height: auto !important;
                    padding: 2px !important; 
                }


                #basket_div
                {
                    visibility: hidden !important; 
                    display:none !important;

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

            @media screen and (max-width: 768px)
            {
                .navbar-toggle
                {
                    margin-right: 30px; 
                }

                .navbar-brand
                {
                    font-size: 25px; 
                    padding: 15px 15px; 
                    margin-left: 15px; 
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

        <script src="https://js.stripe.com/v2/"></script>
    </head>
   <body id="page-top" class="index">

    <!-- Navigation -->
    <nav style="background-color:#fff;" id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> LOGIN <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/home"><i class = "fa fa-cutlery"></i>Naija Bites</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style = "">
               <ul class="nav navbar-nav navbar-right" ">
                      @if (!Auth::user())
                            <li class = "nav-item"> <a class="nav-link btn btn-primary disabled" href="/login" style="color: black; text-transform: none; ">Sign in</a></li>
                            <li class = "nav-item"> <a class="nav-link btn btn-primary disabled" href="/register" style="border-color:#fed136; background-color: transparent; margin-left: 10px; color: black; text-transform: none; ">Register</a></li>
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



  <div class="container" style = "margin-top: 100px; ">
    <div class="row">


      <div class="col-sm-7 col-xs-12 dropDownDiv" style = "padding-left: 20%;  ">

        <div style = "display:none; " class="alert alert-danger {{ !Session::has('error')? 'invisible': '' }}" id = "charge-error" >
            {{Session::get('error')}}
        </div>


      <div class="panel-group">
          <div class="panel panel-default">
                <div class="panel-heading"  style = "background-color: #fed136;"   >
                  <a class = "payment-link" style="width:100%; height: 100%; " > 
                    <h4 class="panel-title bold">
                        Delivery Details
                        <i  class = "fa fa-caret-down pull-right"></i>
                    </h4>
                   </a>
                </div>
                <div id="collapse1" >
                    <div class= "panel-body">
                         <form style = "background-color:#fff; height: auto;   padding: 40px; padding-top: 20px;"  action=" {{route('pay')}}" method="post">
                         
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"  placeholder="Emmanuel Adakole Audu " required="true">
                                </div>

                                <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="adu@gmail.com" required="true">         
                                </div>

                                <div class="form-group">
                                <label for="phone_number" class="form-label">Phone No</label>
                                <input type="text" class="form-control" id="phone-number" name="phone" placeholder="07037699184" required="true">
                                </div>
                                <div class="form-group">
                                <label for="address" class="form-label">Address #1</label>
                                <input type = "Address Line #1" class="form-control" id="address" required="true" rows="5" name="address"></textarea>
                                </div>   
                                <div class="form-group text-center">
                                <button type = "submit" class = "btn btn-primary" >
                                    PAYMENT  <i class = "fa fa-lock"> </i>
                                </button>
                                </div>   
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                    {{ csrf_field() }} 

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                <input type = "hidden" name = "amount" value = "{{$totalPrice * 100}}">
                        </form>
                    </div>
                </div>
          </div>
      </div>

     

    </div>

    <div class = "col-sm-5" style = "margin: 0; ">

     <div id = "basket_div" class="basket" style="margin-top: 0; padding-top: 30px;    background-color:#fff; border-color: black; height:auto; width:80%;">
        <h3 class = "text-center" style = "margin-top: 0; "> Your Order</h3>
        <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >
        <h5 class = "text-center">Pls call <span style= "color: red; ">07037699184</span> if you encouter any issues. Thank you for your order. </h5>
         <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >
           <div id = "basket_basket">
           <?php
            $subTotal = 0; 
            $total = 0;  
           ?>
          @if($products!= null)
          <?php
                $subTotal += $totalPrice;
                $total += $subTotal; 
           ?>

        <!-- So after the Hr, i need to list the items in the cart -->
          
             <table style="margin-left:0px; width: 100%; border-top:0px;" class="table table-hover" id= "cartTable">
                <tbody >
                    @foreach($products as $product)
                    <tr id = "{{$product['item']['product_id']}}">                          
                        <td>
                        
                            <span style = "font-size: 13px; font-weight: 13px;" id = "quantity{{$product['item']['product_id']}}">{{$product['qty']}}</span>x
                           
                        </td>
                        <td>  {{$product['item']['product_name']}}  </td>
                        <td align="right" id="price{{$product['item']['product_id']}}" style = "vertical-align:middle;">₦{{$product['price']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          @else
            <p id= "emptyCart" style="margin-left:20px;"> There's nothing in the cart </p>
         @endif

        <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >
         <table style="margin-left:0px; padding-right:0px solid #fff;" class="table table-hover" id= "cartTable">
                <tbody>
                    <tr>                            
                        <td colspan="2">
                            Subtotal
                        </td>
                        <td  style = "" id = "subTotal" align="right">@if( $subTotal ==null || ($subTotal == 0)) ₦0 @else {{$subTotal}} @endif</td>
                    </tr>
                </tbody>
         </table>
         <table style="margin-left:0px; border-top:0px;" class="table table-hover" id= "cartTable">
            <tbody>
                <tr>                            
                    <td colspan="2">
                        <i class= "fa fa-bicycle"></i> Delivery Fee
                    </td>
                    <td align="right"  style = "color: red; font-style: italic; ">₦500</td>
                </tr>
            </tbody>
        </table>

          <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >

        <table style="margin-left:0px; border-top:0px; font-weight: bolder; color: black;" class="table table-hover" id= "cartTable">
            <tbody>
                <tr>                            
                    <td>
                        Total
                    </td>
                    <td> </td>
                    <td align="right" id="total" style = "vertical-align:middle;">₦ {{$total}}</td>
                </tr>
            </tbody>
        </table>

      </div>
    </div>
  </div>
    </div>
    </div>
    </div>

  </div>


</div>
</div>
</div>


<footer id= "mobile_footer" style = "display:none; background-color:#fff; height: 30px; position: fixed; bottom: 0%; width: 100%; "> 
    <a id = "footerPrice" href = "/cart" class = "btn btn-primary" style = "width: 70%; border-radius: 0; color: black; ">
    @if($products == null) Basket is Empty @else ₦{{$totalPrice}}@endif  <i class="fa fa-shopping-cart fa-1x"></i></a>
</footer>

<footer class = "container-fluid" style = "margin-top:80px;  width: 100%; margin-left: -20; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <i class="copyright">Copyright &copy; Naija Bites 2017</i>
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
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src = "{{URL::asset('js/checkout.js')}}"></script>


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

        event.preventDefault() 
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

                    if(document.getElementById('footerPrice') != null)
                    {
                       $('#footerPrice').text("₦"+output.subTotal);
                    }

                    $('#subTotal').text("₦"+output.subTotal +"<i class = 'fa fa-shopping-cart'></i>");
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

