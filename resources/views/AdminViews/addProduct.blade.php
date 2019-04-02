@extends('layouts.AdminHeader')

@section('content')
 
        <!-- page content -->
        <!-- <div  role="main">
          <div class=""> -->
            <!-- <div class="page-title"> -->
              <!-- <div class=""> -->
                <!-- <h3 style = "color:white; font-size: 18px; margin-left: 10px; " >Add New Product</h3> -->

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
                    <form enctype="multipart/form-data" name="add_product" id="demo-form2" method = "POST" action="{!! route('admin.createProduct') !!}" class="form-horizontal form-label-left">
                     
                   
                      <!-- <div class="form-group">
                          <div class="avatar-upload" style = "margin-top: -20px; margin-bottom: 18px;">
                            <div class="avatar-edit">
                              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                              <label for="imageUpload"></label>
                            </div>
                          <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                            </div>
                          </div>
                      </div> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product-name" name="product_name" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                      <div class = "form-group">
                        <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                        <label for="price" class="control-label col-md-3 col-sm-3 col-xs-12">Product Price *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="price" class="form-control col-md-7 col-xs-12" name="product_price" type="text" required>
                        </div>
                      </div>  

                          
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inlineFormCustomSelect">Category *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <select name="category" id = "category-select" onchange = "create_new_category()" id="inlineFormCustomSelect" class="form-control col-md-7 col-xs-12">
                                <option selected>Select Category</option>
                                <option id = "new-category"> New Category </option>
                                                               
                                @foreach($category_array as $data)
                                  <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                                @endforeach
                               
                            </select>
                            
                          </div>
                      </div>

                      <div class="form-group"  id = "hidden-category-div" style = "display: none; ">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inlineFormCustomSelect">New Category *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12"> 
                              <input type = "text" name = "new_category" placeholder = "Enter New Category" class="form-control col-md-7 col-xs-12" />                            
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="product-description-add-product">Product Description *</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="product_description" id="product-description-add-product"  cols="100" rows="5"></textarea>
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

      function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
    </script>


  </body>

  @endsection
