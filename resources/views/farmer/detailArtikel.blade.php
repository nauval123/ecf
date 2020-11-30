@extends('farmer/navbar2')
@section('kontenFarmer')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Artikel</h1>
            </div>
            <div class="section-body">
                <div class="card mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepageFarmer')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('artikelFarmer')}}">Artikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$artikel->id}}</li>
                    </ol>
                    <img class="card-img-top mr-5 ml-5" data-src="holder.js/100px180/" alt="100%x180" src="https://cdn-brilio-net.akamaized.net/community/2020/07/08/27254/image_1593532313_5efb5f999cea1.jpg" data-holder-rendered="true" style="height: 300px; width: 80%; display: block;">
                    <div class="card-body">
                        <h3 class="card-title text-center">{{$artikel->judul}}</h3>
                        <p class="card-text text-center"><small class="text-muted">dibuat {{$artikel->created_at}}</small></p>
                        <p class="card-text">{!!htmlspecialchars_decode($artikel->isi)  !!}</p>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
