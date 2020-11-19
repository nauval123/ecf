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
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>

                                <th>Nama</th>
                                <th>Terakhir Aktif</th>
                            </tr>
                            <tr>

                                <td>Create a mobile app</td>
                                <td>2018-01-20</td>
                            </tr>
                            <tr>

                                <td>Redesign homepage</td>
                                <td>2018-04-10</td>
                            </tr>
                            <tr>
                                <td>Backup database</td>
                                <td>2018-01-29</td>
                            </tr>
                            <tr>
                                <td>Input data</td>
                                <td>2018-01-16</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
