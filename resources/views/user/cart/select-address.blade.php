@extends('user.layout.master')
@section('title')
@section('styles')
    <style>
        input[type=checkbox],
        input[type=radio] {

            width: 17px;
        }
    </style>
@endsection
@section('content')

    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Select Address</h3>

                    </div>

                    <form action="{{ route('cart.finish') }}" method="POST">

                        <div class="row mb-5">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class=" ">Saved Addresses</h5>
                                            <button type="button" data-toggle="modal" data-target="#exampleModal"
                                                class="btn btn-primary m-0" href="">Add</button>
                                        </div>
                                        <div class=" address-cards">

                                            @csrf

                                            @foreach ($addresses as $address)
                                                <div class="d-flex align-items-start mb-3 address-container">
                                                    <input type="radio" name="address" value="{{ encrypt($address->id) }}"
                                                        class="mr-3 mt-3">

                                                    <div class="card bg-light mb-3 mb-auto" style="flex: 1">
                                                        <div class="card-header d-flex">{{ $address->name }}
                                                            <a class="ml-auto text-danger delete"
                                                                href="{{ route('address.delete', encrypt($address->id)) }}">
                                                                <img src="{{ asset('images/bin.png') }}" alt="delete"
                                                                    width="16"></a>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $address->house }}</h5>
                                                            <p class="card-title">
                                                                {{ $address->street }},{{ $address->city }},{{ $address->state }},{{ $address->pincode }}
                                                            </p>
                                                            <p class="card-text">{{ $address->phone }}</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach




                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>




                        <div class="card">
                            <div class="card-body">
                                <button type="submit" class="btn btn-warning btn-block btn-lg">Finish Order</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    @include('user.address_modal')

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
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

                updateTotals();


            });

            updateTotals();
        });
    </script>
    <script>
        $addressContainers = $('.address-container');
        $deleteBtns = $('.delete');
        $addressContainers.on('click', (e) => {

            if (!$(e.target).hasClass('delete') && !$(e.target).parent().hasClass('delete')) {
                var $radio = $(e.target).closest('.address-container').find('input[type=radio]');
                $radio.prop('checked', true);
            }
        })
    </script>
@endsection
