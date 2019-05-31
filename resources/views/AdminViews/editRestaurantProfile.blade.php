@extends('layouts.AdminHeader')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3 style>Edit Restaurant</h3>
  </div>
      

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
      <form style= "overflow-x: scroll; height: 50%; " enctype="multipart/form-data" id="demo-form2" method = "POST" action="{{route('admin.updateRestaurantProfile', [ $restaurant->restaurant_id ])}}" class="form-horizontal form-label-left">
          <input type = "hidden" name = "_token" value = "{{csrf_token()}}">

          @if(Auth::user()->user_role === 3)
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Restaurant Name: </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" name="restaurant_name" class="form-control col-md-7 col-xs-12" value="{{ $restaurant->restaurant_name }}">
            </div>
          </div>
          @endif

          @if(Auth::user()->user_role === 1)
          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Restaurant Name: </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="restaurant-name" id="restaurant_name" class="form-control col-md-7 col-xs-12" >
                @foreach ($restaurants as $restaurant)
                  <option value="{{ $restaurant->restaurant_id }}"><a href=""></a>{{ $restaurant->restaurant_name }}</option> 
                @endforeach 
              </select>
            </div>
          </div>
          @endif
       
          <div class="form-group">
            <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Restaurant Address: </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="price" class="form-control col-md-7 col-xs-12" name="restaurant_address" type="text" value="{{ $restaurant->restaurant_address }}">
            </div>
          </div>  

          <div class="form-group">
                <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Restaurant Phone Number: </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="price" class="form-control col-md-7 col-xs-12" name="restaurant_phone_number" type="text" value="{{ $restaurant->restaurant_phone_number }}">
            </div>
            </div> 

          <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Header Image: </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <img name = "current_image" class = "img-responsive" alt = " No image"  id = "restaurant-image" src =  "/storage/images/{{$restaurant->header_image}}"   >
                <input class="form-control col-md-7 col-xs-12" type="file">                                                                                                                                                                                                     
                  <input value = "{{ $restaurant->header_image }}" type = "file " id = "restaurant-image" name = "product_image"/>
                </div>
              </div>

            <div class="form-group">
                    <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Restaurant Opening Time: </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                  </div> 

            <div class="form-group">
                    <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Restaurant Closing Time: </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>  

            <div class="form-group">
                <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Restaurant Minimum Order: </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="price" class="form-control col-md-7 col-xs-12" name="restaurant_minimum_order" type="text" value="{{ $restaurant->restaurant_minimum_order }}">
            </div>
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

  <script src="{{URL::asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{URL::asset('js/custom.min.js')}}"></script>

  <script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'LT'
        });
    });

    $(function () {
        $('#datetimepicker2').datetimepicker({
            format: 'LT'
        });
    });
</script>
@endsection