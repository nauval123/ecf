@extends('admin/navbarAdmin')
@section('kontenAdmin')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Artikel</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('updateartikel')}}" method="post">
                                    @csrf
                                    @method('put')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="judul" class="form-control" value="{{old('judul')}}">
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
                                        <textarea class="summernote-simple" name="konten">{{old('konten')}}</textarea>
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
                                        <button class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
