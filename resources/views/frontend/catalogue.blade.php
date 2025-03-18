@extends('frontend.layout.main')

@push('title')
    <title>Catalogue</title>
@endpush
@section('content')
    <section class="digitalassetsBanner pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <lottie-player autoplay loop mode="normal" src="{{asset('frontend/imgs/catalogue.json')}}"></lottie-player>
                </div>
            </div>
        </div>
    </section>

    <section class="text-catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Our Catalogue consists of diverse serials of multiple genres including Crime, Historical, Horror, and
                        Drama, we offer these serials in multiple regional languages ensuring that we cater to a wide range
                        of cultural tastes and preferences.</p>
                    <p> Whether you are looking for the historical tales of the Mughal King and Urdu Poet Bahadur Shah
                        Zafar, the mythological tales of Maa Shakti, the dramatic suspense and twists and turns of Aap
                        Beeti, we offer everything for everyone.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="catalogue-section">
        <div class="container">
            <div class="row">
                @foreach ($catalogue as $item)
                <div class="col-lg-6">
                    <div class="catalogue-box">
                        <a href="{{$item->serial_url ?? 'javascript:void()'}}" {{ $item->serial_url ? 'target="_blank"' : '' }}>
                            <div class="catalogue-img-box">
                                <img src="{{asset($item->serial_image)}}" alt="">
                            </div>
                            <div class="catalogue-content">
                                <div class="playlist-name">
                                    <h4>{{$item->serial_title}}</h4>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p><b>No. of Episodes </b></p>
                                    </div>
                                    <div><p>{{$item->number_episodes}}</p></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p><b>Languages</b></p>
                                    </div>
                                    <div class="text-end"><p>{{$item->languages}}</p></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p><b>Time</b></p>
                                    </div>
                                    <div><p>{{$item->time}} Min</p></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
