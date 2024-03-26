<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Login 13 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 " style="height: 100vh">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-6">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="text-center mb-3">
                <a href="#!" style="color: rgb(94, 48, 48);text-decoration: none;">
                    <h2>E Cart</h2>
                  {{-- <img src="./assets/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="175" height="57"> --}}
                </a>
              </div>
              <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Register </h2>
              <form action="{{route('do.register')}}" method="POST">
                @csrf
                <div class="row gy-2 overflow-hidden">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control @error('first_name')is-invalid @enderror" name="first_name"  placeholder="First Name" value="{{old('first_name')}}" required>
                          <label  class="form-label">First Name</label>
                          @error('first_name')<p class="text-danger"> {{$message}} </p> @enderror

                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control @error('last_name')is-invalid @enderror" name="last_name"  placeholder="last Name" value="{{old('last_name')}}" required>
                          <label  class="form-label">Last Name</label>
                          @error('last_name')<p class="text-danger"> {{$message}} </p> @enderror

                        </div>
                      </div>
                  <div class="col-6">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control @error('email')is-invalid @enderror" name="email"  placeholder="Email" value="{{old('email')}}" required>
                      <label for="email" class="form-label">Email</label>
                      @error('email')<p class="text-danger"> {{$message}} </p> @enderror

                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control @error('phone')is-invalid @enderror" name="phone"  placeholder="Phone" value="{{old('phone')}}" required>
                      <label  class="form-label">Phone</label>
                      @error('phone')<p class="text-danger"> {{$message}} </p> @enderror

                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" value="{{old('password')}}" placeholder="Password" required>
                      <label for="password" class="form-label">Password</label>
                      @error('password')<p class="text-danger"> {{$message}} </p> @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('password_confirmation')is-invalid @enderror" name="password_confirmation"  value="{{old('password_confirmation')}}" placeholder="Confirm Password" required>
                      <label  class="form-label">Confirm Password</label>
                      @error('password_confirmation') <p class="text-danger"> {{$message}} </p>@enderror
                    </div>
                  </div>
                  @session('success')
                  <p class="text-success">{{$value}}</p>
                  @endsession
                  @session('error')
                  <p class="text-danger">{{$value}}</p>
                  @endsession
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Sign up</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="{{route('login')}}" class="link-primary text-decoration-none">Sign In</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
