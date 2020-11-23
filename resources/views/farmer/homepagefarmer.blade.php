@extends('farmer/navbar2')
@section('kontenFarmer')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pakan</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card ml-xl-5 mr-xl-5">
                            <form>
                                <div class="card-header">
                                    <h4>Input Data</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Bobot</label>
                                        <input type="email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card ml-xl-5 mr-xl-5">
                                <div class="card-header">
                                    <h4>Hasil Penakaran</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Umur :</label>
                                        <p></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Bobot :</label>
                                        <p></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Hasil Penakaran:</label>
                                        <p></p>
                                    </div>
                                    <div class="form-group">
                                        <label>informasi tambahan</label>
                                        <p>Suhu optimal Kandang adalah 32,5 - 35 derajat celcius</p>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section-body">
                <div class="card">
                    <div class="card-header">
{{--                        <h4>{{auth()->user()}}</h4>--}}
                        <h4>histori</h4>
                        <div class="card-header-form">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>no</th>
                                    <th>berat(gram)</th>
                                    <th>umur(minggu)</th>
                                    <th>pakan(minggu/ekor/gram)</th>
                                    <th>tanggal</th>
{{--                                    <th>Action</th>--}}
                                </tr>
                                <tr>
                                    <td>Apasih Hama di ayam itu </td>
                                    <td>20 </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
{{--                                    <td><a href="#" class="btn btn-success">Detail</a></td>--}}
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
