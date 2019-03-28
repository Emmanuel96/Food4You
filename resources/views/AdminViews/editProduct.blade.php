@extends('layouts.AdminHeader')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Product</h3>
              </div>
                
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
                  <div class="x_title" style="border-bottom:0px;">
                    
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
                    <!--  <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <form style= "overflow-x: scroll; height: 50%; " enctype="multipart/form-data" id="demo-form2" method = "POST" action="{{url('admin/updateProduct')}}/{{ $product->product_id}}" class="form-horizontal form-label-left">
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
                          <img name = "current_image" class = "img-responsive" alt = " No image"  id = "product-image" src =  "/storage/images/{{$product->product_image}}"   >
                          <input class="form-control col-md-7 col-xs-12" type="file">                                                                                                                                                                                                     
                          <input value = "{{$product->product_image}}" type = "file " id = "product-image" name = "product_image[]"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Product Description *</label>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <textarea style= "width: 100%; " name="product_description" id="product-description" cols="6" rows="5">{{ $product->product_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">
                              <!-- <a href="{!! route('admin.updateProduct', [ $product->product_id ]) !!}"> -->
                              Update
                            </button>
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

 @endsection     