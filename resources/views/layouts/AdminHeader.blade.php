<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Wailodile - Restaurants </title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138253927-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-138253927-1');
  </script>

  <link rel="shortcut icon" href="{{URL::asset('storage/images/title.ico')}}" />


  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Bootstrap -->
  <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{URL::asset('css/custom.min.css')}}" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

  </head>
  <style>

* { 
  box-sizing: border-box; 
  /* font-family: helvetica,arial,sans-serif; */
  font-family: 'Roboto';
  font-size: 14px;
}


.switch .checkbox {
  opacity: 0;
}

.switch > div {

  margin-top: -7px; 
  width: 85px;
  height: 33px;
  background: #9A9A9A;
  z-index: 0;
  cursor: pointer;
  position: relative;
  border-radius: 50px;
  line-height: 40px;
  text-align: right;
  padding: 0 5px;
  color: rgba(0,0,0,.5);
  transition: all 250ms;
  box-shadow: inset 0 3px 15px -3px
}

.switch > input:checked + div {
  background: #1ABB9C!important;
  text-align: center;
  color: rgba(255,255,255,.75);
}

.switch > div:before {
  content: '';
  display: inline-block;
  position: absolute;
  left: -1px;
  top: -1px;
  height: 36px;
  width: 36px;
  background: linear-gradient(#f9f9f9 30%,#CDCDCD);
  border-radius: 50%;
  transition: all 200ms;
  /* box-shadow: 0 15px 15px -3px rgba(255,255,255,.75), inset 0 -2px 2px -3px,  0 3px 0 0px #f9f9f9; */
}

.switch > div:after {
  display: inline-block;
  position: absolute;
  left: 10px;
  top: 10px;
  height: 12px;
  width: 12px;
  background: linear-gradient(#DCDCDC,#E3E3E3);
  border-radius: 50%;
  transition: all 200ms;
}

.switch > input:checked + div:after {
  left: 67px;
}

.switch > input:checked + div:before {
  content: '';
  position: absolute;
  left: 55px;
  border-radius: 50%;
}

.switch  .text +div:before {
  color: white;
  content: 'CLOSED';
}


      select{
          font-family: 'Roboto';font-size: 4px; 
      }

      #product-description-add-product
      {
          width: 100%;
      }
      table{
          /* font-family: Helvetica Neue,Roboto,Arial,Droid Sans,sans-serif; */
          font-family: 'Roboto';
          font-size: 23px;
          font-weight: 400; 
          color: #73879C;
      }

      .avatar-upload {
        position: relative;
        max-width: 205px;
        margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
        }
        .avatar-upload .avatar-edit input {
        display: none;
        }
        .avatar-upload .avatar-edit input + label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #ffffff;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
        }
        .avatar-upload .avatar-edit input + label:after {
        content: "\f040";
        font-family: "FontAwesome";
        color: #757575;
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
        }
        .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #f8f8f8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }

        * { 
  box-sizing: border-box; 
  /* font-family: helvetica,arial,sans-serif; */
}

      @media screen and (max-width: 435px)
            {
                .dataTables{
                  font-size: 25px;
                }
                body{
                  font-size: 25px; 
                }
                .top_nav .navbar-right
                {
                    width: 50%; 
                }
               table{                                                   
                   font-size: 22px;
               }

               #product-description-add-product
               {
                   width: 100%;
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
                    font-size: 22px !important;
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

                  .btn {
                    opacity: 0.8;
                    border: none;
                    padding: 5px 8px;
                    font-size:  12px;
                    cursor: pointer;
                    }
                    table{
                    }
                
            }
  </style>
    @include('layouts.AdminNavbar')
    <body class= "">    
  <div class="container">
  <div id = "notification-div" class="alert alert-success" style = "display: none; padding: 50px; width:30%; padding: 0; margin-right:auto; margin-left:auto;">
    <div class = "text-center" >
      <span id = "notification-text" > </span>
      <button style = "" type="button" class="close" onclick = "document.getElementById('notification-div').style.display = 'none';" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>              

</div>
      @yield('content')
  </div>
  </body>
 


  <script>
    function open_close_restaurant(mytoggle)
    {
      var url = ""; 

      var toggleValue = mytoggle.checked; 
      // alert(toggleValue);
      if(toggleValue == true)
      {
        url = "{{route('admin.open_restaurant')}}"; 
      }
      else
      {
        url = "{{route('admin.close_restaurant')}}"; 
      }

      $.ajax
      ({
          type: 'POST',
          url: url,
          data: {_token: '{{ csrf_token() }}'},
          dataType: 'json',
          success: function(output)
          {
            // alert('successful'); 
          }
      });   
    }   
    
  </script> 

<script src="//js.pusher.com/3.1/pusher.min.js"></script>
  <script type="text/javascript">

      const notificationsWrapper = document.getElementById('notifications');                                                                                            
    
      Pusher.logToConsole = true;

      var pusher = new Pusher('c23961426f29ed3e3502', {
      cluster: 'mt1', 
      encrypted: true
      });

      var channel = pusher.subscribe('order-status');

      channel.bind('App\\Events\\orderNotification', function(data) {
          //alert(JSON.stringify(data));
          $('#notification-div').show(); 
          $('#notification-text').text(JSON.stringify(data.message).replace(/\"/g, ""));

          var orderCounter = "{{$restaurant_order_count + 1}}";
          //increment order counter 
          $('#order-counter').text(orderCounter); 
      });
  </script>        
  
  <script src = "{{ URL::asset('js/app.js') }}" />

</html>