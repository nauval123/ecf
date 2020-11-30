@extends('navbar')
@section('content')
        <section class="section">
            <div class="container mt-xl-5"  data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary ">
                            <div class="card-header text-center"><h4>Login</h4></div>

                            <div class="card-body my-4">
                                <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">email</label>
{{--                                        <input  type="email" class="form-control" name="email" tabindex="1" required autofocus>--}}
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
{{--                                        @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>gagal login</strong>--}}
{{--                                    </span>--}}
{{--                                        @enderror--}}
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small">
                                                   Lupa Password?
                                                </a>
                                            </div>
                                        </div>
{{--                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>--}}
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    @error('email')
                                        @if(($message))
                                          <div class="form-group">
                                              <div class="alert alert-danger alert-has-icon alert-dismissible" role="alert">
                                                 <div class="alert-body">
                                                   <button class="close" data-dismiss="alert">
                                                       <span>x</span>
                                                   </button>
                                                  <p>gagal login</p>
                                                 </div>
                                              </div>
                                          </div>
                                        @endif
                                    @enderror
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="alert alert-dismissible alert-has-icon">
                            <div class="alert-body">
                                <div class=" text-muted  text-center">
                                    Belum punya akun? <a href="{{route('register')}}" class="text-info">Yuk Buat!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       @endsection


