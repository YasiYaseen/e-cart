<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'E Cart')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
    @yield('styles')
    <style>
        .page-wrapper>section,.page-wrapper>div{
            min-height: 90vh
        }
        .logo-anchor{
            color: rgb(8, 8, 39);

        }
        .logo-anchor:hover{
            text-decoration: none;


        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{route('home')}}" class="logo-anchor">
                   <h3>E Cart</h3>
                </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('orders')}}">Orders</a></li>
                    {{-- <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> --}}
                    @auth
                    <li><a href="{{route('profile')}}">{{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>

                    @endauth

                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>

                    @endguest
                </ul>
            </nav>
            <a href="{{route('cart')}}"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px"
                    height="30px" /></a>
            <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
        </div>
    </div>
   <div class="page-wrapper">
    @yield('content')
</div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and iso mobile phone.</p>
                    <div class="app-logo">
                        <img src="https://i.ibb.co/KbPTYYQ/play-store.png" alt="" />
                        <img src="https://i.ibb.co/hVM4X2p/app-store.png" alt="" />
                    </div>
                </div>

                <div class="footer-col-2">
                    <h3 class="logo-anchor">E Cart</h3>
                    <p>
                        Our Purpose Is To Sustainably Make the Pleasure and Benefits of
                        products Accessible to the Many.
                    </p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="{{route('orders')}}">Orders</a></li>
                        <li><a href="{{route('profile')}}">Profile</a></li>
                        <li><a href="{{route('cart')}}">Cart</a></li>
                        <li><a href="{{route('home')}}">Home</a></li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr />
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById('MenuItems');
        MenuItems.style.maxHeight = '0px';

        function menutoggle() {
            if (MenuItems.style.maxHeight == '0px') {
                MenuItems.style.maxHeight = '200px';
            } else {
                MenuItems.style.maxHeight = '0px';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @yield('scripts')
</body>

</html>
