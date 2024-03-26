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
                        <h3 class="fw-normal mb-0 text-black">Orders</h3>
                        {{-- <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                    class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                        </div> --}}
                    </div>
                    @if (count($orders) == 0)
                        <h5 class="text-center " style="margin-top: 25%">Your Orders List is empty</h5>
                        <a href="{{ route('home') }}" class="btn btn-warning btn-block btn-lg">Order Products</a>
                    @endif
                    @foreach ($orders as $item)
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
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex align-items-center">

                                        <label for="">Quantity</label>
                                        <input id="form1" min="1" name="quantity" value="{{ $item->quantity }}"
                                            type="number" class="form-control form-control-sm ml-1" disabled />


                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0 product-price">₹{{ $item->product->price }}</h5>
                                    </div>
                                    <div class="col-auto text-end">
                                        <h6>
                                            {{$item->status}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach







                </div>
            </div>
        </div>
    </section>
@endsection
