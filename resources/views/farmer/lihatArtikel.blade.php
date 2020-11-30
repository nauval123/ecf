@extends('farmer/navbar2')
@section('kontenFarmer')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pakan</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$artikel}}</h4>
                        <h4>artikel</h4>
                        <div class="card-header-form">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            @foreach($artikel as $ar)
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header bg-primary">
                                            <div class="article-image" data-background="https://images-na.ssl-images-amazon.com/images/I/41m6K-uPRvL._AC_SY355_.jpghttps://images-na.ssl-images-amazon.com/images/I/41m6K-uPRvL._AC_SY355_.jpg">
                                            </div>
                                            <div class="article-title ">
                                                <h2><a href="#">{{$ar->judul}}</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <div class="article-cta">
                                                <a href="{{route('detilartil2',[$ar->id])}}" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        {{$artikel->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
