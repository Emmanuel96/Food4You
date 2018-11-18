<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food App</title>

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
        
  <style>
    .pagination
    {
      margin-top: 500px; 
    }
  </style>


  </head>

  <body class="nav-md">
    <div class="container body">
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
                  <li><a><i class="fa fa-shopping-cart"></i>Products<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="viewProducts">View Products</a></li>
                      <li><a href="addProduct">Add New Products</a></li>
                    </ul>
                  </li>

                   <li><a><i class="fa fa-inbox" ></i>Orders<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href = "viewOrders">View Orders</a></li>
                    </ul>
                  </li>
       
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <!--  <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
              </a> -->

                <a class="nav-link" href="/logout">
                    Logout
              </a>

              <form id="logout-form" action="{{ url('/logout') }}" method="GET" style="display: none;">
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

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Emmanuel Audu
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
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

        
            <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product</h3>
              </div>


            <div class="clearfix"></div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Product Image</th>
                          <th>Product Name</th>
                          <th>Product Description</th>
                          <th>Product Price</th>
                          <th>Stock</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($products as $product)
                            <tr>
                              <td><img class="responsive-img mx-auto" width ="30px" height="30px" src = "/storage/images/{{$product->product_image}}"/></td>
                              <td>{{$product->product_name}}</td>
                              <td>{{$product->product_description}}</td>
                              <td>₦{{$product->product_price}}</td>
                              <td ><a id = "inOutStockLink{{$product->product_id}}" onclick = "inOutOfStock( {{$product->product_id}})"  @if($product->inStock != 0) class = "btn btn-primary">In Stock</a> @else class = "btn btn-danger"> Out Of Stock </a> @endif </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>

                </div>
                 {{ $products->links() }}
              </div>

                  </div>
                </div
            </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <<footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

     <script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>


    <!-- Bootstrap -->
    <!-- FastClick -->
    <script src="{{URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL::asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL::asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{URL::asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{URL::asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{URL::asset('vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{URL::asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{URL::asset('vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{URL::asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{URL::asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{URL::asset('vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{URL::asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{URL::asset('vendors/starrr/dist/starrr.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('js/custom.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
  </body>

  <script>
      function inOutOfStock(id)
      {
        //alert(id);
        //first get the id of what we are object we are sending 
        var link = "inOutStockLink" + id; 

         $.ajax({
              type: 'POST',
              url: '{{route('admin.inOutOfStock')}}',
              data: {id: id, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output)
              {
                 //depending on the reply state
                 if(output.inStockValue == 0)
                 {
                    //remove the primary class first 
                    $('#'+ link).removeClass('btn-primary')
                    //add appropriate class 
                    $('#'+link).addClass('btn-danger'); 
                    $('#'+link).text("Out Of Stock"); 
                 }
                 else
                 {
                    $('#'+link).removeClass('btn-danger')
                    //add appropriate class 
                    $('#' + link).addClass('btn-primary'); 
                    $('#' + link).text("In Stock");
                 }
              }
        });   

      }
  </script>
</html>