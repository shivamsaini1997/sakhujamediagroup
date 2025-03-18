@extends('frontend.layout.main')

@push('title')
    <title>Prodution</title>
@endpush

@section('content')
    <section class="banner-video p-0" id="production-video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <video  class="videobanner"
                        src="{{asset('frontend/video/Production.mp4')}}"
                        type="video/mp4"
                        autoplay
                        playsinline
                        loop
                        muted
                        style="width: 100%;">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section class="production">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Our Production</h2>
                </div>
                <div class="col-12">
                    <p class="wow fadeInUp" data-wow-delay="100ms">
                        Video Production is one of the most remarkable forms of media, it has the power to captivate and connect with audiences instantly. Videos can easily evoke emotions, spark conversations, and inspire audiences to take action.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="100ms">
                        In early 2023, during the changing landscape of content creation, we recognized that production has the power to attract audiences like a magnet, that’s when we decided that its the time to create innovative productions that resonate deeply with our viewers.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="100ms">
                        We embarked on the journey of content creation by producing a variety of entertaining podcasts, informative videos, and regional cooking shows for our Bengali Channel - Suswadu Bangla Khabar. We have an ambitious plan for our future productions which includes our entertainment brand - Gluckedia. It will feature challenges, and relatable videos for our growing audiences.

                    </p>
                </div>
                <div class="col-12 text-center production-imgs">
                    <img class="wow fadeInUp" data-wow-delay="100ms" src="{{asset('frontend/imgs/videographer-concept.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="innovative-production py-1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Innovative Productions</h2>
                </div>
                <div class="col-12">
                    <div class="innovative-slider">
                        @foreach ($innovative as $items)
                            <div> <img src="{{asset($items->innovative_productions)}}" alt=""></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="production-studio">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Our Production Studio <br> A Hub of Creativity</h2>
                    <p>To focus more on our Creative Projects we opened our 1500 Square Foot Studio with multiple sets including a fully equipped podcast setup offering a perfect environment for podcasts, interviews, and casual conversations, a cozy kitchen setup for projects centered around food, a room offering an amazing backdrop for shooting informative videos and beautifully designed bedroom setup for storytelling projects and lifestyle shoots.
                        Each setup is creatively curated to enhance the beauty of our productions.
                        </p>
                </div>
                <div class="col-12">
                    <div class="production-slider">
                        @foreach ($studio as $item)
                        <div>  <img src="{{asset($item->studio_productions)}}" alt=""></div>

                        @endforeach

                </div>
            </div>
        </div>
    </section>



@endsection
