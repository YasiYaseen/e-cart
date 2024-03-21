<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('css/user/home.css')}}">
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
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px"
                    height="30px" /></a>
            <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
        </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option value="">Default Shorting</option>
                <option value="">Short by price</option>
                <option value="">Short by popularity</option>
                <option value="">Short by rating</option>
                <option value="">Short by sale</option>
            </select>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="https://i.ibb.co/bQ5t8bR/product-5.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/vVpTyBD/product-6.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/hR5FGwH/product-7.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/QfCgdXZ/product-8.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="https://i.ibb.co/nw5xZwk/product-9.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/9HCsmjf/product-10.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/JQ2MBHR/product-11.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>₹500.00</p>
            </div>

            <div class="col-4">
                <img src="https://i.ibb.co/nRZMs6Y/product-12.jpg" alt="" />
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>₹500.00</p>
            </div>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
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
                    <img src="https://i.ibb.co/j3FNGj7/logo-white.png" alt="" />
                    <p>
                        Our Purpose Is To Sustainably Make the Pleasure and Benefits of
                        Sports Accessible to the Many.
                    </p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
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
            <p class="copyright">Copyright &copy; 2021 - Red Store</p>
        </div>
    </div>

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
