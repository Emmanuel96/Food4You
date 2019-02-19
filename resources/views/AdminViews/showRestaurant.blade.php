@extends('layouts.AdminHeader')

@section('content')

<div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3 style= "font-weight: bold;">{!! $restaurant->restaurant_name !!}</h3>
      </div>
          </div>
        </div>

    <br/>
    <br/>

<div class="clearfix"></div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant ID:</label>
    <br>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <p><a href="">{!! $restaurant->restaurant_id !!}</a></p>
  </div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Name:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_name !!}</a></p>
</div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Address:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_address !!}</a></p>
</div>

<div class="clearfix"></div>
<div class="content">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_image">Restaurant Image:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <img src="/storage/images/{{$restaurant->restaurant_image}}" type= "file" width="250px"/>
  </div>

<div class="clearfix"></div>
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Opening Time:</label>
    <br>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <p><a href="">{!! $restaurant->restaurant_opening_times !!}</a></p>
  </div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Closing Time:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_closing_times !!}</a></p>
</div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Status:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_status !!}</a></p>
</div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Minimum Order:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_minimum_order !!}</a></p>
</div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Delivery Fee:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_delivery_fee !!}</a></p>
</div>

<div class="clearfix"></div>
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_description">Restaurant Phone Number:</label>
  <br>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <p><a href="">{!! $restaurant->restaurant_phone_number !!}</a></p>
</div>

<div class="clearfix"></div>
    <div class="col-md-2 col-sm-2 col-xs-4 col-md-offset-3"></div>
    <a class="btn btn-primary" href="{!! route('admin.restuarants') !!}" role="button">Back</a>
  </div>
  </div>
    
</div>


<footer>
        <div class="">
        <a href="#"></a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
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