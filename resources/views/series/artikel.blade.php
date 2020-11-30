@extends('navbar')
@section('content')

        <section id="about" >
            <div class="container"  data-aos="fade-up">
                    <div class="row m-xl-5">
                        <h3 class="my-4 mt-xl-5 text-center"> Artikel</h3>
            {{--            <h4>{{dd($artikel->id)}}</h4>--}}
                    </div>
                  <div class="section-body">
                    <div class="row">
                        @foreach($artikel as $ar)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <article class="article">
                                <div class="article-header bg-primary">
                                    <div class="article-image" data-background="https://cdn-brilio-net.akamaized.net/community/2020/07/08/27254/image_1593532313_5efb5f999cea1.jpg">
                                    </div>
                                    <div class="article-title ">
                                        <h2><a href="#">{{$ar->judul}}</a></h2>
                                    </div>
                                </div>
                                <div class="article-details">
                                    <div class="article-cta">
                                        <a href="{{route('detilartil1',[$ar->id])}}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </article>

                        </div>
                        @endforeach
                    </div>
                      {{$artikel->links()}}
                </div>
            </div>
        </section>

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-body" >
                    <div class="card">
                        <div class="card-header">
                            {{--                        <h4>{{auth()->user()}}</h4>--}}
                            <h4>Data Pakan</h4>
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
                                        <th class="text-center">keterangan</th>
                                        <th>status</th>
                                        <th>tanggal</th>
        {{--                                <th>Action</th>--}}
                                    </tr>
                                    @foreach($datapakan as $a)
                                            <tr>
                                                <td>{{$a->nama}} </td>
                                                <td>{{$a->umurAyam}}</td>
                                                <td>{{$a->bobot}}</td>
                                                <td>{{$a->detail}}</td>
                                                <td>{{$a->status}}</td>
                                                <td>{{$a->updated_at}}</td>
        {{--                                        <td><a href="" class="btn btn-success">Detail</a> </td>--}}
                                            </tr>
                                    @endforeach
                                </table>
                            </div>
                            {{$datapakan->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
