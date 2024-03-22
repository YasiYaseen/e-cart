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
    <link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="https://i.ibb.co/kDVwgwp/logo.png" alt="RedStore" width="125px" /></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">Products</a></li>
                    {{-- <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> --}}
                    @auth
                    <li><a href="account.html">{{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>

                    @endauth

                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>

                    @endguest
                </ul>
            </nav>
            <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px"
                    height="30px" /></a>
            <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
        </div>
    </div>

    @yield('content')


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
</body>

</html>
