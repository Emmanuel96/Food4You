@extends('layouts.AdminHeader')

@section('content')

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
                          <th id = "product_image_header">Day</th>
                          <th id = "product_description">Batch</th>
                          <th>Price</th>
                          <th id = "product_category">Max Orders </th>
                          <th>Orders </th>
                          <th id = "product_stock"><a>Edit</a></th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($batches as $batch)
                            <tr>
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