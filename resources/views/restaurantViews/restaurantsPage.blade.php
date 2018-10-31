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
 			.restaurantCards
            {
                width: 60%; 
                margin-bottom: 40px;
            }
           
            body
            {
                background-color: #fff;
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
            	background-color: white; 
                width: 100%; 
                height: auto; 
                padding: 0px; 
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
                #category_nav_restaurants.affix
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
				.nav>li>a {
					position: relative;
					display: block;
					padding-left: 1000px;
				}
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
                <a class="navbar-brand page-scroll" href="/home"><i class = "fa fa-cutlery"></i>Naija Bites</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style = "">
               <ul class="nav navbar-nav navbar-right" ">
                      @if (!Auth::user())
                            <li class = "nav-item"> <a class="nav-link btn btn-primary disabled" href="/login" style="color: black; text-transform: none; ">Sign in</a></li>
                            <li class = "nav-item"> <a class="nav-link btn btn-primary disabled" href="/register" style="border-color:#fed136; background-color: transparent; margin-left: 10px; color: black; text-transform: none; ">Register</a></li>
                        @else
                            <li class=" nav-item dropdown" style = "color:black;">
                                <a style = "color:black;" href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-item">
                                        <a style="color:black;" class="nav-link" href="{{ route('logout') }}"
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

  <div id = "category_nav_restaurants" class="categoryNav center" style = "z-index: 12; position:fixed; width: 100%; font-family: Montserrat, Helvetica, sans-serif; background-color: #fff; padding-left: 100px; padding-right:100px; height: 55px; margin-top: 65px;  margin-bottom: 20px; border-bottom: 1px solid #e8ebeb; border-top: 3px solid #e8ebeb;">
    	<ul class="nav navbar-nav nav-left " style = "margin-left: 30px; margin-top: auto; margin-bottom: auto; font-family: ClanPro-News, Helvetica, sans-serif;
 ">
    		<li class="nav-item"><a href = "#most_popular" class="nav-link cat-link page-scroll" >Food Vans</a></li>
    		<li class="nav-item"><a href = "#ice_tea" class="page-scroll cat-link" > Take Aways</a></li>
    		<li class="nav-item"><a href = "" class= "page-scroll cat-link" >Restaurants</a></li>
<!--     		<li class="nav-item"><a href = "" class= "page-scroll cat-link" >Iced tea</a></li>
 -->    </ul>

   </div>



	@if(Session::has('success'))
		<div class="row">
		    <div style="position: absolute; margin-top:20px;" class = "alert alert-success mx-auto">
		        <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
		        {{Session::get('success')}}
		    </div>
		</div>
	@endif
    <div class="container" style="padding-top:170px;">
	<!-- 	<div class="row">
			<h1 class="text-center"> RESTAURANTS </h1>
		</div> -->
		<?php $i = 0; ?>
    	@foreach ($restaurants as $r)
				@if( $i == 0 || $i == 3 )
					<div  class="row" id="portfolio">
				@endif
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a style = "@if($r->restaurant_status == 0) pointer-events: none; cursor: default; @else @endif ;"" center"  href="menu/{{$r->restaurant_name}}" class="portfolio-link disable" data-toggle="modal" >
                        <div style = "@if($r->restaurant_status == 1) pointer-events: none; cursor: default; opacity:0 @else opacity:10  @endif ;" class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i @if($r->restaurant_status == 0)class="fa fa-lock fa-2x" @elseif($r->restaurant_status == 1) class="fa fa-cutlery fa-2x"@endif></i>
                            </div>
                        </div>
                        <img src="/storage/images/{{$r->restaurant_image}}" class="img-responsive img-rounded" style="width: 1000px; " alt="">
                    </a>
                    <div class="portfolio-caption" style = "padding-top: 10px; ">
                        <h3 style = "margin-bottom: 10px; ">{{$r->restaurant_name}}</h3>
                        <h3 style = "font-style: normal; color: black; font-size: 16px;  margin-bottom:10px; " ><i style = "color:#fed136;" class="fa fa-clock-o"></i> 6pm - 9pm Wednesday</h3>
                        <!-- <p class="text-muted">Graphic Design</p> -->
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


<footer class = "container-fluid" style = "width: 100%; margin-left: -20; ">
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



