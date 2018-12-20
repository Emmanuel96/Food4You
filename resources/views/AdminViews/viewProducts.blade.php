@extends('layouts.AdminHeader')

<style>
  table {
    background-color:black;                                        
  }
</style>

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style= "font-weight: bold;">Product</h3>
              </div>


            <div class="clearfix"></div>
                    <table id="datatable" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th id = "product_image_header">Product Image</th>
                          <th>Product Name</th>
                          <th id = "product_description">Product Description</th>
                          <th>Price</th>
                          <th id = "product_category">Category</th>
                          <th>Edit</th>
                          <th id = "product_stock">Stock</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($products as $product)
                            <tr>
                              <td id = "product_image"><img class="responsive-img mx-auto" width ="30px" height="30px" src = "/storage/images/{{$product->product_image}}"/></td>
                              <td id = "product_name">{{$product->product_name}}</td>
                              <td id = "product_description">{{$product->product_description}}</td>
                              <td id = "product_price">₦{{$product->product_price}}</td>
                              <td id = "product_category">{{$product->category}}</td>
                              <td id = "edit_product"><a href="{{ url('admin/editProduct')}}/{{ $product->product_id }}" class ="btn btn-primary">Edit</a></td>
                              <td id = "product_stock"><a id = "inOutStockLink{{$product->product_id}}" onclick = "inOutOfStock( {{$product->product_id}})"  @if($product->inStock != 0) class = "btn btn-primary">In Stock</a> @else class = "btn btn-danger"> Out Of Stock </a> @endif </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>

                </div>
                 {{ $products->links() }}
              </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="">
          <a href="#"></a>
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

  <style>

      @media screen and (min-width: 320px)
      {
        .pagination{margin-top: 500px; margin-bottom: 20px; }
      }
      @media screen and (min-width: 360px)
      {
        .pagination{ margin-top: 500px; margin-bottom: 20px; }
      }
      @media screen and (min-width: 375px)
      {
        .pagination{ margin-top: 500px; margin-bottom: 20px; }
      }

      @media screen and (min-width: 411px)
      {
        .pagination{ margin-top: 500px; margin-bottom: 20px; }
      }

      @media screen and (min-width: 768px)
      {
        .pagination{ margin-top: 850px; margin-bottom: 20px; }
      }

      @media screen and (min-width: 1024px)
      {
        .pagination{ margin-top: 900px; margin-bottom: 20px; }
      }
  </style>

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

@endsection