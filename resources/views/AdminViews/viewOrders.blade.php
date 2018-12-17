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
                        @foreach($orders as $order)
                          <tr>
                            <td >{{$order->buyer_name}}</td>
                            <td id= "order_mobile_no">{{$order->buyer_phone_number}}</td>
                            <td id = "order_address" class="text-center">{{$order->buyer_address}}</td>
                            <td id="order_date" class = "text-center"> {{$order->created_at}}</td>
                            <td class="text-center">
                                <select class="btn btn-warning" style="width:70%;" id = "order_status{{$order->order_id}}" onChange = "sendNotification('{{$order->order_id}}', this.value)">
                                  <option @if($order->order_status == 1) selected @endif value = "1">Preparing</option>
                                  <option @if($order->order_status == 2) selected @endif value = "2">Ready</option>
                                  <option @if($order->order_status == 3) selected @endif value = "3">Out For Delivery</option>
                                  <option @if($order->order_status == 4) selected @endif value = "4">Delivered</option>
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