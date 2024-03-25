@extends('user.layout.master')

@section('content')
    <div class="container mt-5">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="pro-img-details">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="">
                        </div>
                        <div class="pro-img-list">
                            <a href="#">
                                <img src="https://www.bootdey.com/image/115x100/87CEFA/000000" alt="">
                            </a>
                            <a href="#">
                                <img src="https://www.bootdey.com/image/115x100/FF7F50/000000" alt="">
                            </a>
                            <a href="#">
                                <img src="https://www.bootdey.com/image/115x100/20B2AA/000000" alt="">
                            </a>
                            <a href="#">
                                <img src="https://www.bootdey.com/image/120x100/20B2AA/000000" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="pro-d-title">
                            <a href="#" class="">
                                {{ $product->name }}
                            </a>
                        </h2>
                        <p class="mt-3">
                            {{ $product->description }}
                        </p>
                        {{-- <div class="product_meta">
                            <span class="posted_in"> <strong>Categories:</strong> <a rel="tag"
                                    href="#">Jackets</a>, <a rel="tag" href="#">Men</a>, <a rel="tag"
                                    href="#">Shirts</a>, <a rel="tag" href="#">T-shirt</a>.</span>
                            <span class="tagged_as"><strong>Tags:</strong> <a rel="tag" href="#">mens</a>, <a
                                    rel="tag" href="#">womens</a>.</span>
                        </div> --}}
                        <div class="m-bot15"> <strong>Price : </strong>
                            {{-- <span class="amount-old">$544</span> --}}
                            <span class="pro-price"> ₹{{ $product->price }}</span>
                        </div>
                        <form action="{{ route('product.cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ encrypt($product->id) }}">
                            <div class="form-group mt-4">
                                <label>Quantity</label>
                                <div class="quantity">
                                    <input type="number" min="1" step="1" value="1"  disabled>
                                    <input type="hidden" min="1" step="1" value="1" name="quantity" >

                                </div>
                            </div>
                            <p>
                                <button class="btn btn-round btn-danger" type="submit"><i class="fa fa-shopping-cart"></i>
                                    Add to Cart</button>
                            </p>
                        </form>

                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        /*panel*/
        .panel-body {
            display: flex;
        }

        .panel {
            border: none;
            box-shadow: none;
        }

        .panel-heading {
            border-color: #eff2f7;
            font-size: 16px;
            font-weight: 300;
        }

        .panel-title {
            color: #2A3542;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 0;
            margin-top: 0;
            font-family: 'Open Sans', sans-serif;
        }

        /*product list*/

        .prod-cat li a {
            border-bottom: 1px dashed #d9d9d9;
        }

        .prod-cat li a {
            color: #3b3b3b;
        }

        .prod-cat li ul {
            margin-left: 30px;
        }

        .prod-cat li ul li a {
            border-bottom: none;
        }

        .prod-cat li ul li a:hover,
        .prod-cat li ul li a:focus,
        .prod-cat li ul li.active a,
        .prod-cat li a:hover,
        .prod-cat li a:focus,
        .prod-cat li a.active {
            background: none;
            color: #ff7261;
        }

        .pro-lab {
            margin-right: 20px;
            font-weight: normal;
        }

        .pro-sort {
            padding-right: 20px;
            float: left;
        }

        .pro-page-list {
            margin: 5px 0 0 0;
        }

        .product-list img {
            width: 100%;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
        }

        .product-list .pro-img-box {
            position: relative;
        }

        .adtocart {
            background: #fc5959;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            color: #fff;
            display: inline-block;
            text-align: center;
            border: 3px solid #fff;
            left: 45%;
            bottom: -25px;
            position: absolute;
        }

        .adtocart i {
            color: #fff;
            font-size: 25px;
            line-height: 42px;
        }

        .pro-title {
            color: #5A5A5A;
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
        }

        .product-list .price {
            color: #fc5959;
            font-size: 15px;
        }

        .pro-img-details {
            margin-left: -15px;
            height: 468px;
    background-color: #e7e7e7;
        }

        .pro-img-details img {
            width: 100%;
            height: 100%;
    object-fit: contain;
        }

        .pro-d-title {
            /* font-size: 16px; */
            margin-top: 0;
        }

        .product_meta {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 10px 0;
            margin: 15px 0;
        }

        .product_meta span {
            display: block;
            margin-bottom: 10px;
        }

        .product_meta a,
        .pro-price {
            color: #fc5959;
        }

        .pro-price,
        .amount-old {
            font-size: 18px;
            padding: 0 10px;
        }

        .amount-old {
            text-decoration: line-through;
        }



        .pro-img-list {
            margin: 10px 0 0 -15px;
            width: 100%;
            display: inline-block;
        }

        .pro-img-list a {
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .pro-d-head {
            font-size: 18px;
            font-weight: 300;
        }
    </style>

    {{-- input number  --}}
    <style>
        .quantity {
            position: relative;
            width: 65px;
            height: 45px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .quantity input:disabled {
            width: 100%;
            height: 100%;
            line-height: 1.65;
            float: left;
            display: block;
            padding: 0;
            margin: 0;
            padding-left: 20px;
            border: 1px solid #eee;
            background-color: white;

        }



        .quantity input:focus {
            outline: 0;
        }

        .quantity-nav {
            /* float: left; */
            position: absolute;
            right: 0;
            height: 100%;
        }

        .quantity-button {
            position: relative;
            cursor: pointer;
            border-left: 1px solid #eee;
            width: 20px;
            text-align: center;
            color: #333;
            font-size: 13px;
            font-family: "Trebuchet MS", Helvetica, sans-serif !important;
            line-height: 1.7;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        .quantity-button.quantity-up {
            position: absolute;
            height: 50%;
            top: 0;
            border-bottom: 1px solid #eee;
        }

        .quantity-button.quantity-down {
            position: absolute;
            bottom: -1px;
            height: 50%;
        }
        form .btn{
            width: unset;
        }
    </style>
@endsection

@section('scripts')
    <script>
        jQuery(
                '<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>'
            )
            .insertAfter('.quantity input');
        jQuery('.quantity').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
    </script>
@endsection
