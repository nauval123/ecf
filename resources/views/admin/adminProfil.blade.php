@extends('admin/navbarAdmin')
@section('kontenAdmin')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
            </div>
            <div class="section-body">
                <div class="card align-content-center">
                    <form method="post" action="{{route('updateProfil')}}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="card-body">
{{--                            <h4>{{auth()->user()}}</h4>--}}
                            @if(session('message'))
                                <div class="form-group">
                                    <div class="alert alert-info alert-has-icon">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>x</span>
                                            </button>
                                            <p>{{session('message')}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                                <div class="form-group col-md-6 col-12">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}"  required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                            <input type="hidden" name="id" value="{{auth()->user()->id}}">
                        </div>
                        <div class="card-footer text-left">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
