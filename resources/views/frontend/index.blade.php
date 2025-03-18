@extends('frontend.layout.main')
@push('title')
    <title>Home</title>
@endpush
<style>
    .bb {
        width: 100%;
        height: 30000px;
        background: darkcyan;
    }
</style>

@section('content')
    <div class="smooth-scroll">
        <div class="scroll-content">
            <section class="banner-video p-0 home-banner" id="banner-video">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-0">
                            <video  class="videobanner"
                                src="{{ asset($home ? $home->bannervideo : '') }}"
                                type="video/mp4"
                                autoplay
                                playsinline
                                loop
                                muted
                                style="width: 100%; height: auto;">
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-us" id="aboutus">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">Who we are?</h2>
                            <P class="wow fadeInUp" data-wow-delay="600ms">{{$home ? $home->whowedescription : ""}}
                            </P>
                            <a href="{{route('about-us')}}" class="btn btn-primary btn-one position-relative wow fadeInUp"
                                data-wow-delay="700ms"><span>About us</span></a>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-group wow fadeInRight" data-wow-delay="800ms">
                                <img class="imgabout " src="{{ asset($home ? $home->whoweimage : "") }}"
                                alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="archive-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12 text-center">
                            <h2 class="wow fadeInUp"  data-wow-delay="200ms" >Our Achievements</h2>
                            <p class="wow fadeInUp" data-wow-delay="300ms">We are the Youtube Channel Growth Experts!!</p>
                            <p class="wow fadeInUp" data-wow-delay="300ms">{{$home ? $home->achievementsdescription : ""}}</p>
                        </div>
                        </div>
                        <div class="col-12 mt-3">
                            <img class="archive-img  wow fadeInUp" data-wow-delay="400ms" src="{{ asset($home ? $home->achievementsimage : "") }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="divider entertainment">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-3 text-lg-start text-center">
                            <div class="entercard">
                                <h4 class="wow fadeInUp" data-wow-delay="200ms">4+ Years</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-center text-center">
                            <div class="entercard border-center-col">
                                <h4 class="wow fadeInUp" data-wow-delay="200ms">100% Entertainment</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 text-lg-end text-center">
                            <div class="entercard">
                                <h4 class="wow fadeInUp" data-wow-delay="200ms">25+ Channels</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="digital-assets-home">
                <div class="container">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-lg-5 col-12 text-center">
                            <h2  class="wow fadeInUp"  data-wow-delay="200ms">Digital Assets</h2>
                            <p  class="wow fadeInUp"  data-wow-delay="400ms">Having more than 25 Youtube Channels, our average subscriber base on all of them is more than 1 Million</p>
                        </div >
                    </div>
                    <div class="row">
                        @foreach ($youtubedigital as $item)
                            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="200ms">
                                <a href="{{$item->channel_url}}" class="digital-assets-home-card position-relative">
                                    <div class="img-wraap">
                                        <img src="{{ asset($item->channel_logo) }}" alt="">
                                    </div>
                                    <div class="digital-title">
                                        <h4>{{$item->channel_title}}</h4>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col-12">
                            <a href="{{route('digital-assets')}}" class="btn btn-primary btn-one position-relative wow fadeInUp"
                            data-wow-delay="700ms"><span>View More</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-production">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-12 text-center">
                            <h2  class="wow fadeInUp"  data-wow-delay="200ms">Our Production</h2>
                            <p  class="wow fadeInUp"  data-wow-delay="400ms">We believe in creating and producing the best videos and stories <br> for our audience.</p>
                        </div >
                    </div>

                </div>
                <div class="container-fluid production-img">
                    <div class="row">
                        <div class="col-12 p-0">
                            <img src="{{asset('frontend/imgs/Kosha Mangsho Sliders.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
