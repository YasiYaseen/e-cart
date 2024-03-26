@extends('admin.layout.master')
@section('content')
    <section class="content-header ">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-11">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit</h3>
                        </div>


                        <form action="{{ route('admin.product.update') }}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{encrypt($product->id)}}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control @error('name')is-invalid @enderror"
                                        placeholder="Product Name" name="name" value="{{old('name',$product->name)}}">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        placeholder="Price" name="price" value="{{old('price',$product->price)}}">
                                </div>
                                <div class="form-group">
                                    <label>Details</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Details ..."
                                        name="description">{{old('description',$product->description)}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <img src="{{asset('storage/'.$product->image)}}" alt="">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('file')is-invalid @enderror" name="image" value="{{old('image',$product->image)}}">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Update</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> --}}
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>



                </div>


            </div>

        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
