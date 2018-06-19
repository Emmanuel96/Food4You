<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Food app | @yield('title', 'Home Page')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <script src="https://www.gstatic.com/firebasejs/4.5.2/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase-database.js"></script>
        <script>
            // Initialize Firebase
            var config = {
            apiKey: "AIzaSyCr2cSQPdg0x0yrzuX6kSjrjUuStwHlbB8",
            authDomain: "food4you-ef72f.firebaseapp.com",
            databaseURL: "https://food4you-ef72f.firebaseio.com",
            projectId: "food4you-ef72f",
            storageBucket: "food4you-ef72f.appspot.com",
            messagingSenderId: "83758684217"
            };
            firebase.initializeApp(config);
        </script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://use.fontawesome.com/f6f8543374.js"></script>
        <link href="{{ URL::asset('css/fifi_kitchen.css')}}"></link>
        <link href ="{{URL::asset('css/chendu.css')}}"></link>
        <script src="https://js.stripe.com/v2/"></script>


        <style>
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

                        /* #####################################################################
               #
               #   Project       : Modal Login with jQuery Effects
               #   Author        : Rodrigo Amarante (rodrigockamarante)
               #   Version       : 1.0
               #   Created       : 07/28/2015
               #   Last Change   : 08/02/2015
               #
               ##################################################################### */
               
            @import url(http://fonts.googleapis.com/css?family=Roboto);

            * {
                font-family: 'Roboto', sans-serif;
            }

        </style>
    </head>
    <body>
        
        @include('universalPartials.header')

        <div class="container">
            @yield('content')

        </div>
        @yield('scripts')
        </body>
    </html>
