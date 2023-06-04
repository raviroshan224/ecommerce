<nav class="navbar navbar-inverse"
        style="
    padding-left: 25px;
    padding-right: 25px;
    font-size: 28px;
  ">

        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}">E-Commerce</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.home') }}">Home</a></li>
                <li><a href="{{ route('admin.product') }}">Product</a></li>
                {{-- <li><a href="{{ route('admin.cart') }}">Cart</a></li> --}}
                <li><a href="{{ route('admin.user') }}">User</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </div>
    </nav>