@extends('layouts.AdminHeader')

@section('content')
            <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Orders</h3>
              </div>


            <div class="clearfix"></div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th  class="text-center">Name</th>
                          <th id = "order_mobile_no" class="text-center">Mobile No</th>
                          <th id = "order_address" class="text-center">Address</th>
                          <th id = "order_date" class = "text-center"> Date</th>
                          <th class="text-center"> Order Status </th>
                          <th class="text-center">Details</th>
                        </tr>
                        </thead>
                        @foreach($orders as $order)
                          <tr>
                            <td >{{$order->buyer_name}}</td>
                            <td id= "order_mobile_no">{{$order->buyer_phone_number}}</td>
                            <td id = "order_address" class="text-center">{{$order->buyer_address}}</td>
                            <td id="order_date" class = "text-center"> {{$order->created_at}}</td>
                            <td class="text-center">
                                <select  class="btn btn-primary" style="width:70%; font-family: FontAwesome;color:  " id = "order_status{{$order->order_id}}" onChange = "sendNotification('{{$order->order_id}}', this.value)">
                                  <option @if($order->order_status == 1) selected @endif value = "1">&#xf118 Preparing</option>
                                  <option @if($order->order_status == 2) selected @endif value = "2">&#xf1a5 Ready</option>
                                  <option @if($order->order_status == 3) selected @endif value = "3">&#xf197 On its way</option>
                                  <option @if($order->order_status == 4) selected @endif value = "4">&#xf118 delivered</option>
                                </select>
                            </td>
                            <td id = "order_slug" class="text-center"><a href= "viewOrders/{{$order->order_slug}}" class="btn btn-primary" >View Products</a>
                          </tr>
                        @endforeach
                        <!-- <tr>
                          <td>Emmanuel Audu</td>
                          <td>07023085960</td>
                          <td class="text-center">128 Bateman House Verney Park</td>
                          <td class = "text-center"><a href= "#"> <b> 17/09/2017 </b> </a></td>
                          <td class="text-center"><a href="#" class= "label label-primary">Delivered</a></td>
                          <td class="text-center"><a href= "viewOrders/slug" class="btn btn-primary" >View Products</a>
                        </tr> -->
                      </thead>
                      <tbody>
                    
                      </tbody>
                    </table>
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
          <!-- <div class="pull-right">
            <a href="#"></a>
          </div>
          <div class="clearfix"></div> -->
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script>
      function sendNotification(orderID, order_status)
      {
          // alert("Order status has been updated");
          //this function sends an ajax request to the users 
          $.ajax({
              type: 'POST',
              url: '{{route('admin.notifyCustomerOfOrder')}}',
              data: { id:orderID, order_status:order_status, _token: '{{ csrf_token() }}'},
              dataType: 'json',
              success: function(output){
                  alert('I was successful');
                  //on success it changes the delivery status to complete and changes the pending to Ready
                  // delivery_status_button = document.getElementById('delivery_status' + orderID); 
                  // delivery_status_button.innerHTML = "Ready"; 
                  // delivery_status_button.className = "label label-primary"; 
                  // delivery_status_button.onclick = "";
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

  </body>

@endsection