

<nav class="navbar navbar-fixed-top navbar-toggleable-md navbar-light bg-faded" style = "position: sticky;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand"  href="/home"><i class = "fa fa-cutlery"  aria-hidden="true"></i>Naija Bites </a>



    <div id = "navbarSupportedContent" class="collapse navbar-collapse navbar-center">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo route('restaurants.show'); ?>">Restaurants <i class="fa fa-cutlery" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo route('menu.show'); ?>">Menu <i class="fa fa-bars" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo route('cart.show'); ?>">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-primary"><span id = "totalQty">{{Session::has('cart')? Session::get('cart')->totalQty: ''}}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo route('checkout.show'); ?>">Checkout <i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
            </li>
           
        </ul>

        <ul class="nav navbar-nav navbar-right">
             @if (!Auth::user())
                            <li class = "nav-item"> <a class="nav-link" href="/login">Login<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            <li class = "nav-item"> <a class="nav-link" href="/register">Register <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                        @else
                            <li class=" nav-item dropdown">
                                <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @if(Auth::user()->user_role == 1 || Auth::user()->user_role == 3)
                                        <li class = "nav-item">
                                            <a class="nav-link" href="{{route('admin.viewProducts')}}">
                                                Dashboard
                                            </a>

                                    @endif
                                </ul>
                            </li>
                        @endif
        </ul>
      <!--   <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>

</nav>
