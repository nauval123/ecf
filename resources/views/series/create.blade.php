@extends('navbar')
@section('content')
    <div class="mb-xl-5" id="app">
        <section class="section">
            <div class="container mt-4  ">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary mt-4">
                            <div class="card-header text-center"><h4>Register</h4></div>

                            <div class="card-body my-4">

                                <form method="POST" action='postRegister' class="needs-validation" novalidate="">

                                    @csrf

                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input name="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="password" class="d-block">Password</label>
                                        <input name="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                                            register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

