<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Naija Bites</title>

    <link href="{{URL::asset('css/Chendu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--Google Fonts--}}
    <!-- Custom Fonts -->
    {{--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}

    <link href="{{URL::asset('css/nprogress.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/prettify.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/starrr.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/custom.min.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  </head>
  <style>

      #product-description-add-product
      {
          width: 100%;
      }
      @media screen and (max-width: 435px)
            {
                .top_nav .navbar-right
                {
                    width: 50%; 
                }
               table{                                                   
                   font-size: 12px;
               }

               #product-description-add-product
               {
                   width: 100%              ;
               }

                #order_mobile_no{
                display:none; 
                }

                #order_address{
                display:none;
                }

                #order_date{
                display:none; 
                }

               #product_image{
                    display:none;                           
               }

               #product_image_header{
                   display:none; 
               }

               #product_description_header{
                   display:none;
               }

               #product_description{
                   display:none;
               }

               #product_category{
                   display:none;
               }

               #product_stock{
                   display:none;
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

                header{
                    margin-top: 60px; 
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
                header{
                    margin-top: 60px; 
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
  </style>
  <body>
        @include('layouts.AdminNavbar')
        
  <div class="container">
      @yield('content')
  </div>
  </body>
</html>

