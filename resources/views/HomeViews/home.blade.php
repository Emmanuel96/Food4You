<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Food4You</title>



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
                <a class="navbar-brand page-scroll" href="/home"><i class = "fa fa-cutlery"></i>Food4You</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style = "">
               <ul class="nav navbar-nav navbar-right" ">
                      @if (!Auth::user())
                            <li class = "nav-item"> <a class="nav-link btn btn-primary disabled" href="/login" style="color: black; text-transform: none; ">Sign in</a></li>
                            <li class = "nav-item"> <a class="nav-link btn btn-primary disabled" href="/register" style="border-color:#fed136; background-color: transparent; margin-left: 10px; color: black; text-transform: none; ">Register</a></li>
                        @else
                            <li style = "color:black;" class=" nav-item dropdown">
                                <a style = "color:black;" href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li style = "color:black;" class="nav-item">
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
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Food4You</div>
                <div class="intro-heading">We Want To Feed You</div>
                <a href="/restaurants" class="btn btn-xl" style="margin-bottom: 30px; ">VIEW RESTAURANTS</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" style = "background-color: #fff; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Who We Are</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
			</div>
		<div class="row">
			<div style="color:black; text-align:center;" class="col-sm-12">
				<p>
					Food4You is a student founded and managed company that aims to solve one problem: how to connect all of the great food available in Buckingham, with members of the community, in a way that is intuitive and simple. </p>
                    <p>For the Buckingham community, Food4You provides a convenient way to view menus, order food, and make payments from a single online platform.</p>
<p>For vendors, Food4You enables you to easily upload dishes, manage your menu, receive orders via free text or email alert, receive payments withhout hassle, and get monthly analytics updates so you can monitor your success through the platform!</p>
			</div>
		</div>
            </div>
			
        </div>
    </section>

  
	 <section id="services" style = "background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">WHAT WE DO</h2>
                    <h3 class="section-subheading text-muted">We are here to provide the following services just for you</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">About Food4You</h4>
                    <p class="text-muted">Food4You is a student founded and managed company that aims to solve one problem: how to connect all of the great food available in Buckingham, with members of the community, in a way that is intuitive and simple.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Order From Your Favorite Restaurant     </h4>
                    <p class="text-muted">We allow you to find a variety of restaurants availabe and we also allow you make your payments online without with either your Pc's or mobile device and the food will be delivered to you at the allocated time.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Food variety</h4>
                    <p class="text-muted">With our variety of restaurants, you are allowed the chance to select from a variety of food choice, ranging from Nigerian to British</p>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Contact Section -->
    <section id=contact>
        <div class=container>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Send us an enquiry and we will get back to you</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name*" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email*" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone*" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message*" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; TheFood4You 2017</span>
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
</body>

</html>
