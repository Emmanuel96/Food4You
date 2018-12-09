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

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('restaurants')}}" class="site_title"><i class="fa fa-paw"></i> <span>Naija Bites</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->

            <br />
 <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-shopping-bag"></i>Product<span class="fa fa-chevron-down"></span></a>
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
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
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
                    <img src="{{URL::asset('img/img.jpg')}}" alt="">Emmanuel Audu
                    <span class=" fa fa-angle-down"></span>
                  </a>  
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="{{url('homepage')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


                <li role="presentation" class="dropdown">
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
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
                <h3>Edit Product</h3>
                
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              
                @if(Session::has('success'))
                <div class="alert alert-success">
                  <ul>
                    <li>{{Session::get('success')}}</li>
                  </ul>
                </div>
            @endif

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="#"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="#"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul> 
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <form enctype="multipart/form-data" id="demo-form2" method = "POST" action="{{url('admin/updateProduct')}}/{{ $product->product_id}}" class="form-horizontal form-label-left">
                      <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="product_name" class="form-control col-md-7 col-xs-12" value="{{ $product->product_name }}">
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Product Price *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="price" class="form-control col-md-7 col-xs-12" name="product_price" type="text" value="{{ $product->product_price }}">
                        </div>
                      </div>  
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inlineFormCustomSelect">Category *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <select name="category" id="inlineFormCustomSelect" class="form-control col-md-7 col-xs-12">
                                <option selected>Select Category...</option>
                                @foreach($category_array as $data)
                                  <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                                @endforeach                      
                            </select>
                          </div>
                         </div>
                         <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <img  id = "product-image" src =  "/storage/images/{{$product->product_image}}"   >
                          <input class="form-control col-md-7 col-xs-12" type="file">                                                                                                                                                                                                     
                          <input value = "/storage/images/{{$product->product_image}}" type = "hidden" id = "product-image" name = "product_image"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Product Description *</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                            <textarea name="product_description" id="product-description" cols="30" rows="10">{{ $product->product_description }}</textarea>
                          </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Update</button>
                          </div>
                        </div>
  
                      </form>
                    </div>
                  </div>
                </div>
              </div>
      <!-- jQuery -->
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