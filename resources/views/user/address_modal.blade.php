<div class="modal fade show " id="exampleModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel"
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
                                        name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone:</label>
                                    <input type="text" class="form-control" placeholder="Phone (Required)*"
                                        name="number" value="{{old('number')}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label">House:</label>
                                    <textarea class="form-control" placeholder="House (Required)*" name="house">{{old('house')}}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Street:</label>
                                    <input type="text" class="form-control" placeholder="Street (Required)*"
                                        name="street" value="{{old('street')}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">City:</label>
                                    <input type="text" class="form-control" placeholder="City (Required)*"
                                        name="city" value="{{old('city')}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">State:</label>
                                    <input type="text" class="form-control" placeholder="State (Required)*"
                                        name="state" value="{{old('state')}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">Pin code:</label>
                                    <input type="text" class="form-control" placeholder="Pin code (Required)*"
                                        name="pincode" value="{{old('pincode')}}">
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

