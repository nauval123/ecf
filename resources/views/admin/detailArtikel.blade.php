@extends('admin/navbarAdmin')
@section('kontenAdmin')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Artikel</h1>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{route('updateartikel',[$detail->id])}}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="judul" type="text" class="form-control" @if($detail!=null)value="{{$detail->judul}}" @endif value="{{old('judul')}}">

                                            @if($errors->has('judul'))
                                                <div class="text-danger">
                                                    {{ $errors->first('judul')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea name="konten" class="summernote-simple" value="">@if($detail!=null){{$detail->isi}} @endif {{old('konten')}}</textarea>

                                            @if($errors->has('konten'))
                                                <div class="text-danger">
                                                    {{ $errors->first('konten')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary">submit</button>
                                            <a href="{{route('hapusartikel',[$detail->id])}}" class="btn btn-danger ml-xl-5"  onclick="return confirm('Yakin menghapus artikel?')">hapus</a>
                                        </div>
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
