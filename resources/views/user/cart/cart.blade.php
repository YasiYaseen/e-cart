@extends('user.layout.master')
@section('title')
@section('styles')

@endsection
@section('content')

    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        {{-- <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                    class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                        </div> --}}
                    </div>
                    @foreach ($cart as $item)
                        <div class="card rounded-3 mb-4 product-card">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('storage/' . $item->product->image) }}"
                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">{{ $item->product->name }}</p>
                                        <small>
                                            {{ $item->product->description_short }}
                                            {{-- <span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey --}}
                                        </small>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex align-items-center quantity-parent">
                                        <button class="btn btn-link px-2 mx-1 quantity-btn"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="hidden" value="{{$item->product_id}}" class="product_id">
                                        <input id="form1" min="1" value="{{ $item->quantity }}" type="number"
                                            class="form-control form-control-sm quantity-inp" disabled />
                                        <input min="1" name="quantity" value="{{ $item->quantity }}" type="hidden"
                                            class="quantity-inp" />
                                        <button class="btn btn-link px-2 mx-1 quantity-btn"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0 product-price">{{ $item->product->price }}</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end ">
                                        <a href="{{ route('cart.delete', encrypt($item->id)) }}"  class="text-danger delete"><i
                                                class="fas fa-trash fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                    @if (count($cart) == 0)
                        <h5 class="text-center " style="margin-top: 25%">Your Cart is empty</h5>
                        <a href="{{ route('home') }}" class="btn btn-warning btn-block btn-lg">Choose Products</a>
                    @else
                        <div class="card mb-4">
                            <div class="card-body p-4 d-flex flex-row">
                                <div class="form-outline flex-fill">
                                    <h4>Total</h4>
                                </div>
                                <h4 id="total-amount">₹</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <a href="{{ route('cart.place') }}" class="btn btn-warning btn-block btn-lg">Place Order</a>


                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $(document).ready(function() {
            const user_id= {{auth()->user()->id}};

            function updateTotals() {
                var total = 0;

                $('.quantity-inp').each(function() {
                    var quantity = parseInt($(this).val());
                    var price = parseFloat($(this).closest('.product-card').find('.product-price').text()
                        .replace('₹', ''));
                    var subtotal = quantity * price;

                    total += subtotal;
                });

                $('#total-amount').text('₹' + total.toFixed(2));
            }


            $('.quantity-btn').click(function(e) {
                let $input = $(this).closest('.quantity-parent').find('.quantity-inp');
                let product = $(this).closest('.quantity-parent').find('.product_id').val();
                if ($input.val() > 0) {
                    $.ajax({
                        method: "post",
                        url: "http://127.0.0.1:8000/api/update-cart",
                        data: {
                            "user_id": user_id,
                            "product_id": product,
                            "quantity": $input.val()
                        },
                        dataType: "json",
                        success: function(response) {
                            console.log(response.message);
                        }
                    });
                }

                updateTotals();

            });

            updateTotals();
        });
    </script>
@endsection
