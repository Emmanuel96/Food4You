@extends('layouts.AdminHeader')

@section('content')
 
        <!-- page content -->
        <div  role="main">
          <div class="">
            <div class="page-title">
              <div class="">
                <h3 style = "color:white; font-size: 18px; margin-left: 10px; " >Add New Product</h3>

                @if ($errors->any())
                <div class="alert alert-danger" style = "padding: 50px; width:30%; display:block; padding: 0; margin-right:auto; margin-left:auto;">
                    
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            
                 
             @if(Session::has('success'))
                  <div id = "success-div" class="alert alert-success" style = "padding: 50px; width:30%; display:block; padding: 0; margin-right:auto; margin-left:auto;">
                      <div class = "text-center" >{{Session::get('success')}}
                          <strong>{{ $message }}</strong>

                        <button style = "" type="button" class="close" onclick = "document.getElementById('success-div').style.display = 'none';" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> 
                      </div>              
                
                  </div>
              @endif

              <script>
                
              </script>
              
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
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div> 
                  <div class="x_content">
                    <br />
                    <form enctype="multipart/form-data" name="add_product" id="demo-form2" method = "POST" action="{{url('admin/restaurant/batch/new')}}" class="form-horizontal form-label-left">
                      <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Batch Day *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id = "batch-day" name= "batch_day" class = "form-control">
                              <option  selected>Select Day</option>                                                               
                              <option value="0">Sunday</option>
                              <option value = "1">Monday</option>
                              <option value = "2">Tuesday</option>
                              <option value ="3">Wednesday</option>
                              <option value= "4">Thursday</option>
                              <option value = "5">Friday</option>
                              <option value = "6">Saturday</option> 

                               
                            </select>
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">max Order</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="max-order" name = "batch_max_order_no"class="form-control col-md-7 col-xs-12" name="max_order" type="text" required>
                        </div>
                      </div>  
                     
                      <div class="form-group">
                        <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Order Range</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="batch-range" name = "batch_range" class="form-control col-md-7 col-xs-12" type="text" required>
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

      function create_new_category()
      {
        //make the new category text box to be visible 
        var option = document.getElementById("new-category").selected;; 

        if(option == true)
        {
          //if option is true then show hidden-category-div
          document.getElementById('hidden-category-div').style.display = "block";
        }
        // alert(option);
      }
    </script>
  </body>

  @endsection
