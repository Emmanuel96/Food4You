@extends('layouts.AdminHeader')

@section('content')

<div id = "notification-div" class="alert alert-success" style = "display: none; padding: 50px; width:30%; padding: 0; margin-right:auto; margin-left:auto;">
    <div class = "text-center" >
      <span id = "notification-text" > </span>
      <button style = "" type="button" class="close" onclick = "document.getElementById('notification-div').style.display = 'none';" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>              

</div>

<div class="col-md-12 col-sm-12 col-xs-12">

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style= "font-weight: bold;">Product</h3>
        </div>
        
            <div class="clearfix"></div>
                    <table id="datatable" class="display table table-bordered table-hover" width="100%">
                      <thead>
                        <tr>
                          <!-- <th id = "product_image_header">Product Image</th> -->
                          <th id = "product_id">Product Name</th>
                          <!-- <th id = "product_description">Product Description</th> -->
                          <th id = "product_price">Price</th>
                          <th id = "product_category">Category</th>
                          <th style = "width : 30%;"  id ="editBtn">Edit</th>
                          <!-- <th id = "product_stock">Stock</th> -->
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($products as $product)
                            <tr>
                              <!-- <td></td> -->
                              <!-- <td id = "product_image"><img class="responsive-img mx-auto" width ="30px" height="30px" src = "/storage/images/{{$product->product_image}}"/></td> -->
                              <td width = "35%" id = "product_name" style=" padding-top: 20px; ">
                                <a href="{!! route('admin.showProduct', [ $product->product_id ]) !!}">
                                  {{$product->product_name}}
                              </td>
                              </a>
                              <!-- <td></td>-->
                              <!-- <td id = "product_description">{{$product->product_description}}</td> -->
                              <td id = "product_price"  style=" padding-top: 20px; ">₦ {{number_format($product->product_price)}}</td>
                              <td id = "product_category"  style=" padding-top: 20px; ">{{$product->category}}</td>
                              <td style = "padding-top: 15px;"> 
                                  <a href="{!! route('admin.showProduct', [$product->product_id]) !!}" class='btn btn-primary btn-xs'><i class="fa fa-eye"></i></a>
                                  <a href="{!! route('admin.editProduct', [$product->product_id]) !!}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                  <a href="{!! route('admin.delete', [$product->product_id], ['type' => 'submit', 'class', 'onclick' => "return confirm('Are you sure?')"]) !!}" class='btn btn-danger btn-xs'><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                              <!-- <td></td> -->
                              <!-- <td id = "product_stock"><a id = "inOutStockLink{{$product->product_id}}" onclick = "inOutOfStock( {{$product->product_id}})"  @if($product->inStock != 0) class = "btn btn-primary">In Stock</a> @else class = "btn btn-danger"> Out Of Stock </a> @endif </td> -->
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>

                </div>
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


    <script type="text/javascript">
    
      function inOutOfStock(id)
      {
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

   <!-- jQuery -->
    <script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{URL::asset('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{URL::asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('js/custom.min.js')}}"></script>
   

@endsection