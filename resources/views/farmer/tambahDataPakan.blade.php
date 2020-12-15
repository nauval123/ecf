@extends('farmer/navbar2')
@section('kontenFarmer')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Penakaran Pakan</h1>
            </div>
            @if(session('pesan'))
                <div class="form-group">
                    <div class="alert alert-info alert-has-icon alert-dismissible">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                            <p>{{session('pesan')}}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="section-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card ml-xl-5 mr-xl-5">
                                            <form method="post" action="{{route('datapakan.store')}}">
                                                @csrf
                                                <div class="card-header">
                                                    <h4>Input Data</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>nama</label>
                                                            <input name="nama" type="text" class="form-control" value="{{old('nama')}}" required>

                                                            @if($errors->has('nama'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('nama')}}
                                                                </div>
                                                            @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>umur</label>
                                                            <input name="umur" type="number" class="form-control" min='1' placeholder="umur dalam satuan minggu" value="{{old('umur')}}" required>

                                                            @if($errors->has('umur'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('umur')}}
                                                                </div>
                                                            @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>jumlah</label>
                                                        <input name="jumlah" type="number" class="form-control" min='1' placeholder="jumlah  ayam" value="{{old('jumlah')}}" required>

                                                        @if($errors->has('jumlah'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('jumlah')}}
                                                            </div>
                                                        @endif
                                                    </div>
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>bobot</label>--}}
{{--                                                        <input name="bobot" type="number" class="form-control" min='1' placeholder="bobot dalam satuan gram" value="{{old('bobot')}}" required>--}}

{{--                                                        @if($errors->has('bobot'))--}}
{{--                                                            <div class="text-danger">--}}
{{--                                                                {{ $errors->first('bobot')}}--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="card-footer text-right">
                                                    <button class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection
