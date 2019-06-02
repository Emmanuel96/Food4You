<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href = "{{ URL::asset('css/dataTables.bootstrap4.min.css') }}" />
    <link rel= "stylesheet" href= "{{ URL::asset('css/bootstrap.css') }}"/>

</head>

<body>
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
                            <td id = "product_category">{{$product->category_name}}</td>
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
  
</body>   
<script src = "{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script src= "{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
<script src = "{{ URL::asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src = "{{ URL::asset('js/datatable.js') }}"></script>   

<table id="example" class="table table-striped table-bordered" style="width:100%">