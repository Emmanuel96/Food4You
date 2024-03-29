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
        <link rel="shortcut icon" href="{{URL::asset('storage/images/title.ico')}}" />

        <title>Wailodile - A satisfying meal.</title>



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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script>
            function formatCur(id, value){
                const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'NGN',
                currencyDisplay: 'symbol',
                minimumFractionDigits: 2
                })
                alert(document.getElementById(id));
                console.log(id);
                // thatPrice.value = formatter.format(value);
                // alert(thatPrice);
            }


            // return formatter.format(value) // "$123,233,000.00"
        </script>

        <style>

            .sign-in-btn{
                margin-right: 10px;
            }

            .blur-up {
                -webkit-filter: blur(5px);
                filter: blur(5px);
                transition: filter 400ms, -webkit-filter 400ms;
            }

            .blur-up.lazyloaded {
                -webkit-filter: blur(0);
                filter: blur(0);
            }

           .ellipse{
            font-size: 15px; display: block; width: 12em; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
           }
            header{
                background-image: url("{{env('DGS_TEST_IMAGE_PATH')}}{{ $restaurant->header_image }}") !important;
            }
            body{
                background-image: '';
                font-family: 'Roboto';
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
            }

            .navbar-brand img{
                display: inline;
                margin-top: -9px;
                vertical-align: top;
            }

            @media screen and (max-width: 450px)
            {
                .navbar-header{
                    background-color: black;
                }
                .ellipse{
                    width: 20em;
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
                    overflow: scroll;
                  }

                .nav
                {
                    /* background-color: black; */
                }
                .nav .navbar-nav
                {
                    background-color:black !important;
                }
                .nav-black{
                    background-color: black;
                }
                .navbar-nav{
                    margin: 0px -15px !important;
                }

                .nav li
                {
                    display:inline-block !important;
                    padding-right: 10px;
                    padding-left: 10px !important;
                    margin-left: 5px;
                    margin-bottom: 10px;
                    list-style-type:none !important;
                }
                ul .sadfa{
                    background-color:black;
                }

                .auth-btn{
                    color: white;
                    width: 90%;
                    margin-left: 17px;
                    margin-right: 20px;
                }

                .sign-in-btn{
                    width: 100%;
                    margin-top: 10px;
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
                    /* padding: 15px 15px;  */
                    margin-left: 10px;
                }
                .navbar-brand img{
                    margin-top: -9px;
                    vertical-align: top;
                }
                 .categoryNav
                 {
                    overflow: scroll;
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

                 <!-- nav li{
                     padding-left: 10px;
                 } -->
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

              .qty-edit-td
              {
                width: 40% !important;
              }
              .product-name-td
              {
                margin-left: -100px !important;
                width: 100% !important;
              }
            }

          @media screen and (min-width: 760px) and (max-width: 800px)
          {
                .ellipse{
                    width: 7em;
                }
          }

          @media screen and (min-width: 1000px) and (max-width: 1080px)
          {
                .ellipse{
                    width: 10em;
                }
          }


        </style>

           <?php
            $productImage = "----";
            $productName = "---- ";
            $productPrice = "--- ";
            $productDescription = "---- ";
            ?>
    </head>
   <body  id="page-top" class="index">


    <!-- Navigation -->
    <nav style="background-color:black;" id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" @if(!Auth::user()) data-target="#bs-example-navbar-collapse-1"@else data-target ="#"@endif>
                    @if(!Auth::user())
                        <span class="sr-only">Toggle navigation</span>
                        Sign Up  <i class="fa fa-bars"></i>
                    @else
                        <li class="nav-item dropdown">
                            <a style = "color:black;"  class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->user_name }} <span class="caret"></span>
                            </a>

                            <ul style="color:black;" class="dropdown-menu" role="menu">
                                <li class="nav-item">
                                    <a style = "color:black;" class="nav-link" href="{{ route('logout') }}"
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
                                        <a style = "color:black;" class="nav-link" href="{{route('admin.viewProducts')}}">
                                            Dashboard
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                </button>
                <a class="navbar-brand page-scroll" href="/home" style = "display:inline;">
                    <img height ="40px" src ="{{URL::asset('storage/images/title.ico')}}"/> Wailodile
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style = "">
               <ul class="nav navbar-nav navbar-right nav-black">
                      @if (!Auth::user())
                            <li class = "nav-item auth-btn"> <a class="nav-link btn btn-primary sign-in-btn" href="/login" style="text-transform: none; ">SIGN IN</a></li>
                            <li class = "nav-item auth-btn"> <a class="nav-link btn btn-primary" href="/register" style="border-color:#fed136; background-color: transparent;">Register</a></li>
                        @else
                            <li class=" nav-item dropdown">
                                <a style = "color:black;" href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_name }} <span class="caret"></span>
                                </a>

                                <ul style="color:black;" class="dropdown-menu" role="menu">
                                    <li class="nav-item">
                                        <a style = "color:black;" class="nav-link" href="{{ route('logout') }}"
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
                                            <a style = "color:black;" class="nav-link" href="{{route('admin.viewProducts')}}">
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

    <!-- Header -->
    <header style = "height: 500px;" class = "img" src="{{URL::asset('storage/images/title.ico')}}" data-src ="{{URL::asset('storage/images/title.ico')}}">
        <div class="container">
        	<div id = "restaurant_info" style="background-color: #fff; padding: 20px; margin-top: 200px; margin-left: auto; margin-right: auto; color: black; width: 400px; border-radius: 5px; text-align:center;">
        		<h3 style = "font-weight:bold; font-size:3em;">{{$restaurant->restaurant_name}}</h2>
        		<h6 class="label label-warning"><i class="fa fa-map-marker"></i> {{$restaurant->restaurant_address }}</h6>
                <h6 class="label label-success"></i> Opens for: {{ $restaurant->restaurant_opening_times }}</h6>
                <h6 class="label label-warning">Closes by: {{$restaurant->restaurant_closing_times }}</h6>
                <h6 class="label label-danger">Minimum Order: {{$restaurant->restaurant_minimum_order }}</h6>
        		<div style = " border-radius: 3px;">
        			<a style = "color: #fed136;" ></a>
        		</div>

        	</div>
        </div>
    </header>


    <div id = "category_nav" class="categoryNav center" style = " font-family: Montserrat, Helvetica, sans-serif; background-color: #fff; padding-left: 72px; padding-right:100px; height: 55px; margin-bottom: 20px; border-bottom: 1px solid #e8ebeb; border-top: 3px solid #e8ebeb;">
    	<ul class="nav navbar-nav nav-left " style = "margin-top: auto; margin-bottom: auto;    font-family: ClanPro-News, Helvetica, sans-serif;">
            @if($categories != null)
               @foreach($categories as $category)
                    <li class="nav-item"><a href = "#{{$category->category_name}}" class="nav-link cat-link page-scroll">{{$category->category_name}}</a></li>
               @endforeach
            @endif
    		<!-- <li class="nav-item"><a href = "#sandwich" class="nav-link cat-link page-scroll">Sandwich</a></li>
    		<li class="nav-item"><a href = "#platter" class="page-scroll cat-link" >Christmas Specials</a></li>
    		<li class="nav-item"><a href = "#others" class= "page-scroll cat-link" >Others</a></li> -->
        </ul>

         <div id = "basket_div" class="basket pull-right" style="padding-top: 3px; background-color:#fff; border-color: black; height:auto; width:33%;">
         <a id = "checkout-button" href="/checkout" class = "btn btn-primary btn-lg @if($products== null)disabled @endif" style="color:black; border-radius: 0px;  width: 100%;" >Go to Checkout</a>

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

             <table class="table table-hover" id= "cartTable" style = "height: 70px; ">
                <tbody style = "height: 100%; overflow-y:scroll; overflow-x: hidden; display: block;  ">
                    @foreach($products as $product)
                        <tr id = "{{$product['item']['product_id']}}">
                            <td class= "qty-edit-td" style = "width: 45.5%;">
                                <a style = "border-radius: 9px; height: 5px; padding: 0;" href="" onclick = "deleteCartItem('{{$product['item']['product_id']}}')" >
                                    <span class="fa-stack fa-sm">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-minus  fa-stack-1x" style="color: white; padding-top:1px;"></i>
                                    </span>
                                </a>
                                <span style = "font-size: 13px; font-weight: 13px;" id = "quantity{{$product['item']['product_id']}}">{{$product['qty']}}</span>
                                <a href="#" style = "border-radius: 20px;" onclick = "addItemToCart({{$product['item']['product_id']}})">
                                    <span class="fa-stack">
                                        <i  class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i style="padding-top:1px; color:white;" class="fa fa-plus fa-stack-1x"   ></i>
                                    </span>
                                </a>
                            </td>
                            <td class="product-name-td" style = "padding-top: 12px; width: 70%; ">  {{$product['item']['product_name']}} + {{$product['extra']}} </td>
                            <td align="right" id="price{{$product['item']['product_id']}}" style = "width:100%; vertical-align:middle;">₦{{$product['price']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          @else
            <p id= "emptyCart" style="margin-left:20px;"> There's nothing in the cart </p>
         @endif

        <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >
         <table style="margin-left:0px; padding-right:0px solid #fff;" class="table table-hover" id= "cartRowSubTotal">
                <tbody>
                    <tr>
                        <td colspan="2">
                            Subtotal
                        </td>
                        <td  style = "" id = "subTotal" align="right">@if( $subTotal ==null || ($subTotal == 0)) ₦0 @else ₦ {{$subTotal}} @endif</td>
                    </tr>
                </tbody>
         </table>
         <table style="margin-left:0px; border-top:0px;" class="table table-hover" id= "cartRowDeliveryFee">
            <tbody>
                <tr>
                    <td colspan="2">
                        <i class= "fa fa-bicycle"></i> Delivery fee
                    </td>
                    <td align="right"   style = "color:red; ">₦ {{number_format($delivery_price)}}</td>
                </tr>
            </tbody>
        </table>

          <hr style="width:88%; margin-left:17px; border-top:1px solid #e8ebeb" >

        <table style="margin-left:0px; border-top:0px; font-weight: bolder; color: black;" class="table table-hover" id= "cartRowTotal">
            <tbody>
                <tr>
                    <td>
                        Total
                    </td>
                    <td> </td>
                    <td align="right" id="total" style = "vertical-align:middle;">₦ {{number_format($total + $delivery_price)}}</td>
                </tr>
            </tbody>
        </table>

      </div>

    </div>
	</div>
    </div>





<!-- The menu rows  -->
    <div class="container">

		<!-- Row for the categories, products and the cart -->
		<div class = "row">
			<!-- Column for the Products -->
			<div class = "col-xs-12 mobile_resp" style = "width: 63%; ">
			    <div class = "container" style = "width: 100%">

                    <!-- Information for about the restaurant -->

                    <!-- For each statment to display products We need i to count 3 for items in each row , later versions should use the chunk method -->

                    <?php $i = 0; ?>
                      @foreach($category2 as $key => $menu)
                      <h2 id = "{{ $categories->where('category_id', $key)->pluck('category_name')[0] }}">{{ $categories->where('category_id', $key)->pluck('category_name')[0] }}</h2>

                        @foreach ($menu as $m)

                            @if( $i == 0 || $i == 3 )
                                <div class="row menu_row">
                            @endif
                                <div class="col-sm-4 col-xs-12">

                                    <div class="w3-card-4" style = "background-color: white;  border-radius: 5px;">
                                        <div class="w3-container w3-center">
                                            <h4 class = "ellipse">{{$m->product_name}}</h4>
                                            <img class="img-fluid img-rounded lazyload"  height="100px;" width="100px;" data-sizes = "auto" src="{{URL::asset('storage/images/title.ico')}}" data-src="{{env('DGS_TEST_IMAGE_PATH').$m->product_image}}">

                                            <div class="w3-section">
                                                <a  @if($m->inStock == 1)class ="btn btn-primary btn-sm text-center" data-toggle = "modal"  @else class ="btn btn-danger btn-sm text-center disabled" @endif  href="#"  onclick = "openDetailsModal({{$m->product_id}})">@if($m->inStock == 1) Add To Cart @else Out Of Stock @endif <i class="fa fa-cart-plus"></i></a>
                                            </div>
                                            <div class="w3-section">
                                                <h3 style = "font-size: 14px;" id = "product_price_{{$m->product_id}}">₦ {{number_format($m->product_price)}} </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ending the row if last item or items on the row are 3 already -->
                                @if($i == 2 || $loop->last)

                                    </div>

                                    <?php
                                        $i = 0;
                                    ?>
                                @else
                                    <?php $i++ ?>
                                @endif
                        @endforeach
                   @endforeach
                </div>
            </div>
        </div>


<!-- Begin of my modal  -->
<div class="modal fade" id = "extras_menu">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id = "extra_menu_header">
        <h5 class="modal-title" id = "product_name">Extra's Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <img id = "product_details_image" style = "height: auto; width: 50%; " class= "img-responsive center img-rounded" />

        <h5 style = "width: 100%; text-align:center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;"><span style = "background: #fff; padding: 0 10px; font-weight:bold;">DESCRIPTION</span></h5>
         <p class = "text-center" style="margin-bottom: 20px; " id = "product_description">  </p>
        <h5 style = "width: 100%; text-align:center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;"><span style = "background: #fff; padding: 0 10px; font-weight: bold;">Comments </span></h5>


        <textarea placeholder = "Please Tell us if there's any way we can make this better for you. " name="" id= " " class= "form-control" style = "width: 100%; height: 100%;" ></textarea>
      </form>
      <div class="modal-footer">

        <a  class ="btn btn-primary btn-sm text-center" id= "extra_menu_add_to_cart"  href="#" >Add To Cart <i class="fa fa-cart-plus"></i></a>

      </div>
    </div>
  </div>
</div>

</div>


    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 id = "modalProductName"></h2>
                                <img id = "modalProductImage" class="img-responsive img-centered" src="/storage/images/{{$productImage}}" alt="">
                                <p id = "modalProductDescription">{{$productDescription}}</p>
                               <!--  <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul> -->
                                <a id = "modal-add-to-cart-link" class="btn btn-primary btn-lg" data-dismiss = "modal"></i> Add To Cart <i class="fa fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<footer id= "mobile_footer" style = "display:none; background-color:#fff; height: 30px; position: fixed; bottom: 0%; width: 100%; ">
    <a id = "footerPrice" href = "/cart" class = "btn btn-primary" style = "width: 70%; border-radius: 0; color: black; ">
    @if($products == null) Basket is Empty @else ₦ {{number_format($totalPrice + $delivery_price)}}@endif  <i class="fa fa-shopping-cart fa-1x"></i></a>
</footer>

<footer class = "container-fluid" style = "width: 100%; margin-top:50px;  margin-left: -20; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <i class="copyright">Copyright &copy; Wailodile 2017</i>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
						<li><a href="https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>


    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src ="{{URL::asset('js/agency.js')}}" ></script>
    <script src ="{{URL::asset('js/contact_me.js')}}" ></script>
    <script src ="{{URL::asset('js/jqBootstrapValidation.js')}}" ></script>
    <script src="{{URL::asset('js/lazysizes.min.js')}}" async=""></script>

<script type = "text/javascript">

    function openDetailsModal(pid)
    {
        event.preventDefault();



        //so first thing is to pass the ajax request
          $.ajax({
              type: 'GET',
              url: "{{route('menu.getProductDetails')}}",
              data: {id: pid, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                   //on success
                   //get the name attribute for the modal product

                   // $('#modalProductName').text(output.productName);
                   // $('#modalProductDescription').text(output.productDescription);
                   // $('#modalProductImage').attr("src", "/storage/images/"+output.productImage);
                   // $('#portfolioModal1').modal('show');



                   //after opening the modal, next step is updating the values of the product name and the values of the product description
                   $('#product_description').text(output.productDescription);

                   $('#product_name').text(output.productName);

                   $('#product_details_image').attr('src', 'https://wailodile-storage.sfo2.digitaloceanspaces.com/wailodile-storage/restaurants/' + output.productImage);// + output.productImage);

                   $('#extra_menu_add_to_cart').attr('onclick', output.onclick);
                   //href for the link
                   // $('#modal-add-to-cart-link').attr('onclick', output.onclick);

                   //open the modal to view the extras menu
                   $('#extras_menu').modal('show');
              }
        });
    }


    var id;
    function openModalAndStoreId(idd)
    {
        event.preventDefault()
        id = idd;
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
              url: "{{route('product.addToCart')}}",
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

    //function to enable and disable the add to cart button for the extras menu
    function ExtrasMenuBtnActiveInactive()
    {
        //firstly i get the from and serialize it into an array
         var extras = ($("form").serializeArray());
         var extraSelected = false;

         //next thing is that i check if any selected
           jQuery.each( extras, function( i, field ) {
            // $( "#results" ).append( field.value + " " );
            if(field.value == "on")
            {
                extraSelected = true;
            }
        });

        // if(extraSelected == true)
        // {
        //     if($('#extra_menu_add_to_cart').hasClass('disabled'))
        //     {
        //          $('#extra_menu_add_to_cart').removeClass('disabled');
        //     }
        // }
        // else
        // {
        //      $('#extra_menu_add_to_cart').addClass('disabled');
        // }

    }

   function addItemToCart(id)
    {
        event.preventDefault()
        //get all the inputs (checkboxes and radio boxes)
        var extras = ($("form").serializeArray());

        // //extra string is meant to hold the extras array by contatonating them into itself
        // //get the value of the fillingsOption as it's a radio box
        // var extraString = $('input[name="fillingsOption"]:checked').val();

        var extraString = " ";
        //get values of other extras options
        jQuery.each( extras, function( i, field ) {
            // $( "#results" ).append( field.value + " " );
            if(field.value == "on")
            {
                //contantonate value of extra string with name of input
                extraString +=  field.name + ",";
            }
        });


        //remove last , in exta string
        extraString = extraString.slice(0,-1);

        //AJAX with jquery to pass the selected item to the cart controller
        $.ajax({
              type: 'GET',
              url: '{{route('product.addToCart')}}',
              data: {id: id,extras: extraString, qty: 1, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                    //after the item is added to the cart, then i want to change the cart quantity at the top of the page
                    // $('#totalQty').text(output.productQty);

                    // document.getElementById('quantity'+id).html= " ";
                    // $('#extras_menu').modal('hide');
                    //on success change the number

                    document.getElementById('basket_basket').innerHTML = output.listOfItems;

                    document.getElementById('quantity'+id).textContent = output.productQty;

                    if(document.getElementById('footerPrice') != null)
                    {
                       $('#footerPrice').text("₦ "+output.subTotal);
                    }

                    //check if the go to check out buton is active
                    //if active then leave it as it is else make it active
                    if($('#checkout-button').hasClass('disabled'))
                    {
                        $('#checkout-button').removeClass("disabled");
                    }

                     //yh we are  hiding the modal, but we also need to get the list of products
                    $('#subTotal').text("₦"+output.subTotal);
                    // alert($('#subTotal').text);

                    $('#total').text("₦ "+output.total);


                    //once this is done, then close the modal
                    $('#extras_menu').modal('hide');

                    // document.getElementById("myTBody").style.overflow-x = "hidden";

                    //if it's still below the minimum order, then disable the basket checkout
                    if(output.min_order_price > output.total)
                    {
                        $('#checkout-button').addClass('disabled');
                    }

              }
        });

    }

      function CheckOutBtnStatus(){

        $.ajax({
              type: 'GET',
              url: '{{route('order.min_order')}}',
              data: {_token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                    if(output != 1)
                    {
                        $('#checkout-button').addClass('disabled');
                    }
              }
        });
     }

     window.onload = CheckOutBtnStatus;

</script>




