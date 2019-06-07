@extends('layouts.AdminHeader')

@section('content')
        
            <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><a href = "/admin/viewOrders"><i class = "fa fa-arrow-left"></i>  Go Back To Orders Page</a></h3>
                <h2 class="text text-info "><b>Order By {{$buyerName}}</b></h2>
              </div>


           <div class="clearfix"></div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Quantity</th>
                          <th>Product Price</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($orderProducts as $product)
                        <tr>
                          <td>{{$product->product_name}} with {{$product->order_extras}}</td>
                          <td>{{$product->qty_ordered}}</td>
                          <td>₦ {{number_format($product->product_price * $product->qty_ordered)}}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <a id = "delivery_status" @if($delivery_status == 0) class = "btn btn-warning" onclick ="sendNotification('{{$orderId}}')"> CLICK WHEN ORDER IS READY... @else class = "label label-primary"> Delivery Status:Ready @endif </a> 
                  </div>
                </div>
              </div>
                  </div>
                </div
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
    <script>
      function sendNotification(orderID)
      {
        alert(orderID);
          //this function sends an ajax request to the users 
          $.ajax({
              type: 'POST',
              url: '{{route('admin.notifyCustomerOfOrder')}}',
              data: {id:orderID, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                 //on success it changes the delivery status to complete and changes the pending to Ready
                 delivery_status_button = document.getElementById('delivery_status'); 
                 delivery_status_button.innerHTML = "Ready"; 
                 delivery_status_button.className = "label label-primary"
                 delivery_status_button.onclick = "";
              }
        });   
      }
    </script>    

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

  @endsection