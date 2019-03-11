<body  class="nav-md">
        <div id= "my_app" class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col">
              <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                  <a href="/restaurants" class="site_title"><i class="fa fa-paw"></i> <span>Naija Bites</span></a>
                </div>
    
                <div class="clearfix"></div>
                <br />
    
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                    <ul class="nav side-menu">
                     
                       <li><a href = "/admin/viewProducts"><i class="fa fa-home"></i>Dashboard</a>
                       </li>  

                     @if(Auth::user()->id == 1)
                        <li><a><i class="fa fa-building-o"></i>Restaurants<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="/admin/restaurants">View Restaurants</a></li>
                            <li><a href="/admin/restaurants/new">Add New Restaurant</a></li>
                          </ul>
                        </li>  
                      @endif  
                      <li><a><i class="fa fa-folder-o"></i>Products<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="/admin/viewProducts">View Products</a></li>
                          <li><a href="/admin/addProduct">Add New Products</a></li>
                        </ul>
                      </li>
                       <li><a><i class="fa fa-shopping-cart"></i>Orders<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="/admin/viewOrders">View Orders</a></li>
                        </ul>
                      </li>
                    
                      <li><a><i class="fa fa-calendar-o"></i>Batch<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="/admin/restaurant/batch">View Batch</a></li>
                          <li><a href="/admin/restaurant/batch/new">New Batch</a></li>
                        </ul>
                      </li>     
                    </ul>
                  </div>
                </div>
    
                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small" >

                  <a >
                    <label id="status">
                    <div class="container">
                        <div style = "margin-right:2px;" id="toggle-btn" class="toggle-btn" onclick="changeStatus() ">
                          <div style="margin-right:2px;" class="inner-circle"></div>
                        </div>
                    </div>
                  </label>
                  </a>
                 

                  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                  </a>

                  <a href="/admin/editRestaurantProfile/{Session::get('logged_in_restaurant')}" data-toggle="tooltip" data-placement="top" title="Edit Profile">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
                  
    
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
                <!-- /menu footer buttons -->                         
              </div>
            </div>


            <!-- top navigation -->
            <div class="top_nav">
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>
    
                  <ul class="nav navbar-nav navbar-right" style="align:right;">
                    
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <!-- <img src="images/img.jpg" alt=""> -->
                        {{ Auth::user()->user_name }} 
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                          
                          <li class = "dropdown-menu dropdown-usermenu"><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      
                      </ul>
                      
                    </li>

                    <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o fa-4x"></i>
                    <span id = "order-counter" class="badge bg-green">{{$restaurant_order_count}}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                    @php
                      $counter = 0; 
                    @endphp
                    @foreach($restaurant_orders as $order)
                      
                      @php
                        $counter++; 
                      @endphp
                      <li>
                        <a href = '/admin/viewOrders/{{$order->order_slug}}'>
                          <span>
                            <span>View {{$order->buyer_name}}'s order</span>
                            <!-- <span style= "padding-left:30px;" class="time">3 mins ago</span> -->
                          </span>
                          <!-- <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span> -->
                        </a>
                      </li>
                      @if($counter == 4)
                        @break
                      @endif
                    @endforeach
                    <li>
                      <div class="text-center">
                        <a href = "{{route('admin.viewOrders')}}">
                          <strong>See All Orders</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>

                    <!-- <ul class="nav navbar-nav navbar-right">
                      <li id="notifications" class="nav navbar-nav">
                          <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                              <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
                            </a>
                      </li>
                    </ul> -->
    
                    <li role="presentation" class="dropdown">
                      <ul id="menu1" class ="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                               Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                          009/
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <div class="text-center">
                            <a>
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /top navigation -->
          </div>
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

        <style>
            .container-toggle {
              position: absolute;
              top:50%;
              left: 50%;
              transform:translate(-50%, -50%);
            }
            .toggle-btn {
              width: 40px;
              height: 22px;
              background: gray;
              border-radius: 10px;
              padding: 5px;
              transition: all 300ms ease-in-out;
            }
            .toggle-btn > .inner-circle {
              width: 15px;
              height: 15px;
              background: #fff;
              border-radius: 50%;
              padding: 5px;
              transition: all 300ms ease-in-out;
            }
            .toggle-btn.active {
              background: green;
            }
            .toggle-btn.active > .inner-circle {
              margin-left: 10px;
              margin-bottom:10px;
            }

          </style>

        </body>

       