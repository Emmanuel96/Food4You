<!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138253927-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-138253927-1');
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
        <link href="{{URL::asset('css/footer.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        {{--Google Fonts--}}
        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>

            #arealist{
                width: 100%;
            }
            #orderbtn{
                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 20%;
                margin-bottom: 30px;
            }
            .dropdown{
                display: inline-block;
                margin-bottom: 30px;
                margin-bottom: 30px;
            }
            .dropdown-btn{
                margin-left: 20px;
                padding-left: 16px;
                text-align: left;
                font-family: "Drop Serif", "Helvetica Neue";
                height: 50px;
                width: 280px;
                font-size: 20px;
            }

            .location-select{
                /* height: 50px;
                width: 100px;  */
                border-color: yellow;
            }



            select option {
                margin: 40px;
                background: rgba(0, 0, 0, 0.3);
                color: #fff;
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
            }

            .sign-in-btn{
                margin-right: 10px;
            }
            img {
                margin-top: -13px;
            }

            .navbar-custom.affix{
                background-color: black;
            }
            h2.section-heading{
                font-family: 'Montserrat', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif' !important;
                font-weight: 700;
                margin-bottom: 30px;
            }

            h3.section-subheading{
                margin-bottom: 30px;
            }

            .fa-inverse{
                color: black;
            }

            header .intro-text .intro-heading{
                font-family: "Droid Serif,Helvetica Neue, Helvetica, Arial, sans-serif";
            }

             #lead-in{
                 display: inline;
            }

            .typed-cursor
            {
                font-size: 40px;
                color: #fed136;
                -moz-animation: blink 0.7s infinite;
                animation: blink 0.7s infinite;
            }
            #strong{
                color: #fed136;
            }

            .navbar-brand img{
                display:inline;
            }


             @media screen and (max-width: 768px)
                {
                    #orderbtn{
                        width: 50%;
                    }

                    .dropdown{
                        margin-bottom: 15px;
                        margin-bottom: 15px;
                    }

                    .dropdown-btn{
                        margin-left: 0;
                    }

                    header .btn-xl{
                        /* width: ;
                        height: ; */
                        font-size: 13px;
                        padding: 20px, 20px;
                    }
                    header .intro-text .intro-heading{
                        font-size: 28px;
                        margin-top: -5px;
                    }
                    header .intro-text .intro-lead-in{
                        /* padding-top */
                    }
                    header .intro-text{
                        padding-top:90px;
                        font-size: 1ems;
                        font-size: 15px;
                    }
                    header{
                        margin-top: 50px;
                    }
                    .navbar-toggle
                    {
                        /* margin-right: 0px;  */
                    }
                    .navbar-brand
                    {
                        font-size: 25px;
                        /* padding: 15px 15px;  */
                        margin-left: 1px;
                    }
                    .navbar-brand img{
                        margin-top: -9px;
                        vertical-align: top;
                    }

                    .nav li{
                        width: 100%;
                        margin-bottom: 10px;
                        padding-right: 10px;
                        padding-left: 10px;
                    }

                }
        </style>
    </head>

   <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> LOGIN <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/home" style = "display:inline;">
                    <img height ="40px" src ="{{URL::asset('storage/images/title.ico')}}"/> Wailodile
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style = "">
               <ul class="nav navbar-nav navbar-right" ">
                      @if (!Auth::user())
                            <li class = "nav-item sign-in-btn"> <a class="nav-link btn btn-primary" href="/login">Sign in</a></li>
                            <li class = "nav-item"> <a class="nav-link btn btn-primary" href="/register" style="border-color:#fed136; background-color: transparent;">Register</a></li>
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
                                        </li>
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
                <div class="intro-lead-in" id="lead-in">...</div>
                <div class="intro-heading">We've got you.</div>
                <form method="GET" action="{{route('restaurants.show')}}" class = "location-form" id ="locationform" style = "display: block; margin-bottom: 10px;">
                   <input type="hidden" value="testvalue"/>
                    <div class="dropdown">
                        <button disabled class="btn btn-default dropdown-toggle dropdown-btn" type="button" data-toggle="dropdown">Lagos State
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($states as $state)
                                <li id="{{$state->state_id}}"><a href="#">{{$state->state_name}} State</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle dropdown-btn" type="button" data-toggle="dropdown" id ="areabtn">Select an area
                        <span class="caret"></span></button>
                        <ul id ="arealist" class="dropdown-menu">
                          @foreach($areas as $area)
                            <li ><a id= "{{$area->area_id}}" href="#">{{$area->area_name}}</a></li>
                          @endforeach
                        </ul>
                    </div>

                    <input type = "hidden" id="area" name="area"/>
                    <input type="hidden" id="state" name="state" value="1"/>

                    <a class="btn btn-xl" id="orderbtn" disabled>ORDER NOW</a>

                </form>

            </div>
        </div>
    </header>


	 <section id="services" style = "background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Our services for you</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Online Order</h4>
                    <p class="text-muted">Find your favorite restaurant on Wailodile and place an order with our automated ordering platform.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-credit-card fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Secure Online Payment</h4>
                    <p class="text-muted">Don't leave the comfort of your office <b>make payemnt via your credit card online securely.</b> And just sit back, you will be served in time.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-motorcycle fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Delivery</h4>
                    <p class="text-muted">Don't want to pick up? We will handle the <b>delivery</b> to your door step.</p>
                </div>
            </div>
        </div>
    </section>
	<footer class="footer-distributed" style = "background-color: black;">

<div class="footer-left">

  <h4 style = "color: white; "> Copyright &copy; Wailodile <?php echo date('Y') ?></h4>
<!--
  <p class="footer-links">
    <a href="#">Home</a>
    ·
    <a href="#">Blog</a>
    ·
    <a href="#">Pricing</a>
    ·
    <a href="#">About</a>
    ·
    <a href="#">Faq</a>
    ·
    <a href="#">Contact</a>
  </p> -->

</div>

<div class="footer-center container">

  <div>
    <i class="fa fa-map-marker"></i>
    <p>Lekki Phase 2, Lagos</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a style = "color: #fed136;" href="mailto:support@company.com">support@wailodile.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About Wailodile</span>
    Order from your favorite restaurants from anywhere and we will get it to your door step.
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <!-- <a href="#"><i class="fa fa-github"></i></a> -->

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

    <script src = "{{URL::asset('js/typed.min.js')}}" type = "text/javascript"></script>
    <script>
      var typed3 = new Typed('#lead-in', {
					strings: ["Welcome To Wailodile", "Craving a <strong style = 'color: #fed136;'>Sandwich?<strong>","Maybe a <strong style = 'color: #fed136;'>Tray</strong>", "Or some <strong style = 'color: #fed136;'>Plantain</strong>", "Just Maybe,<strong style = 'color: #fed136;'>  Some Wings</strong>"],
					typeSpeed: 100,
					backSpeed: 10,
					smartBackspace: true, // this is a default
					loop: true
				});
    </script>

    <script>
        // On click funtion for the area list
        $('#arealist li a').on('click', function(){
            // Enable the order button after an area is selected
            $('#orderbtn').attr("disabled", false);
            $('#orderbtn').attr("onClick", "locationform.submit()")
            $('#area').val(this.id);

            //Change the area btn text to the selected option
            $('#areabtn').html($(this).text());
        });
    </script>

</body>

</html>
