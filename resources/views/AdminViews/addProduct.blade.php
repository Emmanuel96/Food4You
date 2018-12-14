@extends('layouts.AdminHeader')

@section('content')
 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add New Product</h3>

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

              <script>
                
              </script>
              
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
                    <form enctype="multipart/form-data" name="add_product" id="demo-form2" method = "POST" action="{{url('admin/createProduct')}}" class="form-horizontal form-label-left">
                      <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="product_name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Product Price *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="price" class="form-control col-md-7 col-xs-12" name="product_price" type="text">
                        </div>
                      </div>  
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inlineFormCustomSelect">Category *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <select name="category" id="inlineFormCustomSelect" class="form-control col-md-7 col-xs-12">
                                  <option selected>Select Category</option>
                                                                    
                                @foreach($category_array as $data)
                                  <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                                @endforeach
                               
                            </select>
                            
                          </div>
                         </div>

                      {{-- <div class="form-group">
                        <label for="price" required="required" class="control-label col-md-3 col-sm-3 col-xs-12">Has Extra<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class = "form-control" onchange = "hasExtra()">
                            <option>No</option>
                            <option>Yes</option>
                          </select>

                          <div class = "row-fluid" style = "margin-top: 20px;">
                            <div class= "col-md-5" style = "margin-top: 5px;">
                              <input type = "string" placeholder ="Extras name "/>
                            </div>
                            <div class= "col-md-5" style = "margin-top: 5px;">
                              <input type = "string" placeholder= "Price"/>
                            </div>
                            <div class = "col-md-2" style = "padding-left: 50px;">
                              <a type = "button" class = "btn btn-primary" >Remove</a>
                            </div>
                          </div>
                        </div>
                      </div> --}}

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="product-image" class="form-control col-md-7 col-xs-12" type="file" name="product_image">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Product Description *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                            <textarea name="product_description" id="product-description" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      
					  <div class="form-group">
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
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
    <script src="{{ asset('/css/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
      //this function automatically calls the function to mess with these 
      function hasExtra()
      {
        //

      }
      //this function adds a new row to the form for the extra item and it's price 
      function addExtraRow()
      {
        //
      }
    </script>
  </body>

  @endsection
