@extends('navbar')
@section('content')

    <main id="main" class="mt-xl-5">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="card mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('artikel')}}">Artikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$artikel->id}}</li>
                    </ol>
                    <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="https://cdn-brilio-net.akamaized.net/community/2020/07/08/27254/image_1593532313_5efb5f999cea1.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;">
                    <div class="card-body">
                        <h3 class="card-title text-center">{{$artikel->judul}}</h3>
                        <p class="card-text text-center"><small class="text-muted">dibuat {{$artikel->created_at}}</small></p>
                        <p class="card-text">{!!htmlspecialchars_decode($artikel->isi)  !!}</p>

                    </div>
                </div>
{{--                <div class="section-title">--}}
{{--                    <img src="https://cdn-brilio-net.akamaized.net/community/2020/07/08/27254/image_1593532313_5efb5f999cea1.jpg" class="img-fluid" alt="Responsive image">--}}
{{--                    <h1>{{$artikel->judul}} </h1>--}}
{{--                    <h7>{{$artikel->created_at}}</h7>--}}
{{--                </div>--}}
{{--                <h4>--}}
{{--                    {!!htmlspecialchars_decode($artikel->isi)  !!}--}}
{{--                </h4>--}}
            </div>
        </section>
    </main>
@endsection
