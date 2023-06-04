<nav class="navbar navbar-inverse"
    style="
    /* margin: 20px; */
    padding-left: 25px;
    padding-right: 25px;
    font-size: 28px;
  ">
    {{-- <div class="social-call">
        <div class="social">
        <a href=""><i class="fa-brands fa-facebook">fjanfjan</a>
        <a href=""><i class="fa-brands fa-square-instagram">fnjnjenfjn</i></a>
        <a href="#"><i class="fa-brands fa-tweeter"></i></a>
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">E-Commerce</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('shop') }}">Shop</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('cart') }}">Cart</a></li>
        </ul>
    </div>
</nav>



