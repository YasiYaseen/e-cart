@extends('user.layout.master')
@section('styles')
    <style>
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #ff2929cc;
            border-color: #fd5858d4;
        }

        .page-link:hover {
            z-index: 2;
            color: #dc3545;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #ff523b;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .product-link:hover {
            text-decoration: none;

        }

        .product-img {
            width: 245px;
            aspect-ratio: 1;
            background-color: #f9f9f9;
        }

        .product-img img {
            max-width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
@endsection
@section('content')
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            {{-- <select onselect="">
                <option value="">Default Sorting</option>
                <option value="">Short by price</option>
                <option value="">Short by popularity</option>
                <option value="">Short by rating</option>
                <option value="">Short by sale</option>
            </select> --}}
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4">
                    <a href="{{ route('product.details', encrypt($product->id)) }}" class="product-link">
                        <div class="product-img"> <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid"
                                alt="" /></div>
                        <h4>{{ $product->name }}</h4>
                        {{-- <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div> --}}
                        <p>{{ $product->price }}</p>
                    </a>
                </div>
            @endforeach


        </div>
        <div class="d-flex justify-content-center">
            <div class=""> {{ $products->links() }}</div>
        </div>

        {{-- <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div> --}}
    </div>
@endsection
