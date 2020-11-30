@extends('farmer/navbar2')
@section('kontenFarmer')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pakan</h1>
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
                <div class="card">
                    <div class="card-header">
{{--                        <h4>{{auth()->user()}}</h4>--}}
                        <h4>histori</h4>
                        <a href="{{route('datapakan.create')}}" class="btn btn-info">+ Tambah</a>
                        <div class="card-header-form">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>nama</th>
                                    <th>umur(minggu)</th>
                                    <th>berat(gram)</th>
                                    <th>tanggal</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($datapakan as $a)
                                    @foreach($a->datapakan as $ar)
                                        <tr>
                                            <td>{{$ar->nama}} </td>
                                            <td>{{$ar->umurAyam}}</td>
                                            <td>{{$ar->bobot}}</td>
                                            <td>{{$ar->created_at}}</td>
                                            <td>{{$ar->updated_at}}</td>
                                            <td><a href="{{route('datapakan.edit',[$ar->id])}}" class="btn btn-success">Detail</a> </td>
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
