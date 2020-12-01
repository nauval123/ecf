@extends('admin/navbarAdmin')
@section('kontenAdmin')

    <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dahsboard</h1>
        </div>
        @if(session('pesan'))
            <div class="form-group">
                <div class="alert alert-info alert-has-icon">
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
            <div class="card">
                <div class="card-header">
                    <h4>Artikel</h4>
                    <a href="{{route('buatartikel')}}" class="btn btn-info">+ Tambah</a>
                    <div class="card-header-form">
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Judul Artikel</th>
                                <th>tanggal</th>
                                <th>update terakhir</th>
                                <th>Action</th>
                            </tr>

                                @foreach($artikel as $a)
                                  @foreach($a->artikel as $ar)
                                    <tr>
                                    <td>{{$ar->judul}} </td>
                                    <td>{{$ar->created_at}}</td>
                                    <td>{{$ar->updated_at}}</td>
                                        <td><a href="{{route('editartikel',[$ar->id])}}" class="btn btn-success">Detail</a></td>
                                    </tr>
                                  @endforeach
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
