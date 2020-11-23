@extends('admin/navbarAdmin')
@section('kontenAdmin')

    <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dahsboard</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Artikel</h4>
                    <a href="{{route('buatartikel')}}" class="btn btn-info">+ Tambah</a>
                    <div class="card-header-form">
                        {{--                            <form>--}}
                        {{--                                <div class="input-group">--}}
                        {{--                                    <input type="text" class="form-control" placeholder="Search">--}}
                        {{--                                    <div class="input-group-btn">--}}
                        {{--                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </form>--}}
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Judul Artikel</th>
                                <th>Penulis</th>
                                <th>tanggal</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Apasih Hama di ayam itu </td>
                                <td>Admin1 </td>
                                <td>2018-01-20</td>
                                <td><a href="#" class="btn btn-success">Detail</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
