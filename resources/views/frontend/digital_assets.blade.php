@extends('frontend.layout.main')
@push('title')
    <title>Digital Assest</title>
@endpush

@section('content')
    <section class="digitalassetsBanner banner pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <lottie-player autoplay loop mode="normal" src="{{asset('frontend/imgs/digital.json')}}"></lottie-player>
                </div>
            </div>
        </div>
    </section>
    <section class="digitalassets py-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Digital Assets</h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms">We believe in providing the best content to our audiences. Presently we own more than 30 Digital Assets across YouTube and Facebook with an average subscription base of more than 500 K subscribers on YouTube and an average follower base of more than 170 K Followers on Facebook.  </p>
                    <p class="wow fadeInUp" data-wow-delay="300ms"> Our subscribers get diverse content from genres like Mythology, Drama, History, Fantasy, and  Comedy.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="digital-assets-youtube">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms"><img class="youtube-logo" src="{{asset('frontend/imgs/youtube-logo.png')}}" alt="">Youtube</h2>
                </div>
            </div>
            @foreach ($youtubeassets as $item)
            <div class="row mb-5">
                <div class="col-12">
                    <div class="digital-assets-box">
                        <div class="assets-img">
                            <a href="{{$item->channel_url}}" target="_blank">
                                <img class="wow fadeInUp" data-wow-delay="100ms" src="{{asset($item->channel_logo)}}" alt="">
                            </a>
                        </div>
                        <div class="assets-contant">
                            <h3 class="wow fadeInUp" data-wow-delay="200ms">{{$item->channel_title}} </h3>
                            <div class="wow fadeInUp" data-wow-delay="300ms">
                                <span><b><span>@</span>{{$item->channel_username}} </b></span>  <span><b> • {{$item->channel_subscribers}} Subscribers • </b></span> <span><b>  {{$item->channel_total_video}} videos </b></span>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="400ms">{{$item->channel_discreption}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-md-5 mt-2 serial-thamb">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="{{$item->serial_url1}}" target="_blank">
                                <img class="wow fadeInUp" data-wow-delay="500ms" src="{{asset($item->serial_thumbnail1)}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{$item->serial_url2}}" target="_blank">
                                <img class="wow fadeInUp" data-wow-delay="600ms" src="{{asset($item->serial_thumbnail2)}}" alt="">
                            </a>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{$item->serial_url3}}" target="_blank">
                                <img class="wow fadeInUp" data-wow-delay="700ms" src="{{asset($item->serial_thumbnail3)}}" alt="">
                            </a>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{$item->serial_url4}}" target="_blank">
                                <img class="wow fadeInUp" data-wow-delay="800ms" src="{{asset($item->serial_thumbnail4)}}" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="digital-assets-home digital-facebook-section mb-md-5">
        <div class="container pb-md-5">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-5 col-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms" ><img class="youtube-logo" src="{{asset('frontend/imgs/facebookicon.png')}}" alt="">Facebook</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($facebookasssets as $item)
                <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="200ms" >
                    <a href="{{$item->channel_url}}" target="_blank" class="digital-assets-home-card position-relative">
                        <div class="img-wraap">
                            <img src="{{asset($item->channel_logo)}}" alt="">
                        </div>
                        <div class="digital-title">
                            <h4>  {{$item->channel_title}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
    </section>
@endsection
