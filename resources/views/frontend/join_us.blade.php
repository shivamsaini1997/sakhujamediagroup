@extends('frontend.layout.main')

@push('title')
    <title>Join Us</title>
@endpush
@section('content')
<section class="digitalassetsBanner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <lottie-player autoplay loop mode="normal" src="{{asset('frontend/imgs/join_us.json')}}"></lottie-player>
            </div>
        </div>
    </div>
</section>
<section class="joinus">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="wow fadeInUp" data-wow-delay="100ms">Grab Excellent Opportunities With Us</h2>
                <p class="wow fadeInUp" data-wow-delay="100ms">We have fantastic opportunities for you!! Join our family and unlock the doors to growth. Click the “Apply Now” button below to view the description of your desired position
                </p>
            </div>
        </div>
        @foreach ($job as $item)
            <div class="row wow fadeInUp" data-wow-delay="100ms">
                <div class="col-12">
                    <div class="job-box">
                        <div class="job-title">
                            <h4>{{$item->job_name}}</h4>
                            <p><b>No of openings - </b>{{$item->no_opening}}</p>
                            <p><b>Experience - </b>@if($item->job_type == 1)
                                Full Time
                            @elseif($item->job_type == 2)
                                Part Time
                            @else
                                <!-- You can add a fallback or leave it empty -->
                                Not Specified
                            @endif</p>
                        </div>
                        <div class="typejob">
                            <p><i class="fa-solid fa-clock-rotate-left"></i>
                                @if($item->job_type == 1)
                                    Full Time
                                @elseif ($item->job_type == 2)
                                    Part Time
                                @else

                                @endif
                            </p>
                        </div>
                        <div class="apply-job">
                            @if ($item->opening == 1)

                            <a href="{{route('join-us-details',$item->slug)}} " class="btn btn-primary btn-one position-relative"><span>Apply Now <i class="fa-solid fa-angles-right"></i></span></a>
                            @elseif ($item->opening == 0)

                                <p class="text-danger"><b>Close</b></p>
                            @else

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
@endsection
