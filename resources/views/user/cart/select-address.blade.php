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
                        <h3 class="fw-normal mb-0 text-black">Select Address</h3>

                    </div>

                    <form action="{{route('cart.finish')}}" method="POST">

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
                                                <div class="d-flex align-items-start mb-3">
                                                    <input type="radio" name="address" value="{{ encrypt($address->id) }}"
                                                        class="mr-3 mt-3">

                                                    <div class="card bg-light mb-3 mb-auto" style="flex: 1">
                                                        <div class="card-header d-flex">{{ $address->name }} <a
                                                                class="ml-auto text-danger"
                                                                href="{{ route('address.delete', encrypt($address->id)) }}">x</a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('address.save') }}" method="POST" id="address-form">

                        @csrf
                        <input type="hidden" name="id" value="{{ encrypt(auth()->user()->id) }}">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Full Name:</label>
                                    <input type="text" class="form-control" placeholder="Full Name (Required)*"
                                        name="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone:</label>
                                    <input type="text" class="form-control" placeholder="Phone (Required)*"
                                        name="number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label">House:</label>
                                    <textarea class="form-control" placeholder="House (Required)*" name="house"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Street:</label>
                                    <input type="text" class="form-control" placeholder="Street (Required)*"
                                        name="street">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">City:</label>
                                    <input type="text" class="form-control" placeholder="City (Required)*"
                                        name="city">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">State:</label>
                                    <input type="text" class="form-control" placeholder="State (Required)*"
                                        name="state">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Pin code:</label>
                                    <input type="text" class="form-control" placeholder="Pin code (Required)*"
                                        name="pincode">
                                </div>
                            </div>
                        </div>





                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-0" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary my-0" form="address-form">Save</button>
                </div>
            </div>
        </div>
    </div>
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
@endsection
