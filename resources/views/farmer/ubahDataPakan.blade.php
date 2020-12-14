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
                            <button type="button" class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                            <p>{{session('pesan')}}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>datapakan {{$detail->id}}</h4>
                        <div class="card-header-form">
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('datapakan.update',[$detail->id])}}" method="post">
                            @csrf
                            @method('put')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control"  @if($detail!=null)value="{{$detail->nama}}" @endif value="{{old('judul')}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">umur</label>
                            <div class="col-sm-12 col-md-7">
                                <input name="umur" type="number" class="form-control"  @if($detail!=null)value="{{$detail->umurAyam}}" @endif value="{{old('judul')}}" readonly>
                            </div>
                        </div>
{{--                        <div class="form-group row mb-4">--}}
{{--                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">bobot</label>--}}
{{--                            <div class="col-sm-12 col-md-7">--}}
{{--                                <input name="bobot" type="number" class="form-control"  @if($detail!=null)value="{{$detail->bobot}}" @endif value="{{old('judul')}}" readonly>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">detail</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="5"  readonly>@if($detail!=null){{htmlspecialchars_decode($detail->detail)}} @endif </textarea>
                            </div>
                        </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">keterangan</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="5">@if($detail->keterangan!=null){{($detail->keterangan)}} @endif </textarea>
                                </div>
                            </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">status</label>
                            <div class="col-sm-12 col-md-7">
                                <select  class="form-control" name="status">
                                    @if($detail!=null)
                                        <option selected>{{$detail->status}}</option>
                                    @endif
                                        <option value="1">berhasil</option>
                                        <option value="2">gagal</option>
                                </select>
{{--                                <input type="hidden" name="status"  placeholder="ubah dengan format berhasil atau gagal" class="form-control" @if($detail!=null)value="{{$detail->status}}" @endif required>--}}
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary mr-2">simpan</button>
                                <a href="{{route('homepageFarmer')}}" class="btn btn-info">cancel</a>
                                <a href="{{route('hapusdatapakan',[$detail->id])}}" class="btn btn-danger ml-md-5">hapus</a>
{{--                                <form action="{{route('datapakan.destroy',[$detail->id])}}" method="post" >--}}
{{--                                    @csrf--}}
{{--                                    @method('delete')--}}
{{--                                    <button class="btn btn-danger ml-md-2" type="submit">hapus</button>--}}
{{--                                </form>--}}
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
