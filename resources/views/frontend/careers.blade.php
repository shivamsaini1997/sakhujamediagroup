@extends('frontend.layout.main')

@push('title')
    <title>Careers</title>
@endpush

@section('content')
<section class="digitalassetsBanner banner pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <lottie-player autoplay loop mode="normal" src="{{asset('frontend/imgs/Career.json')}}"></lottie-player>
            </div>
        </div>
    </div>
</section>
    <section class="life-sakhuja-group py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="wow fadeInUp mb-0" data-wow-delay="100ms">Life At </h2>
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Sakhuja Media Group </h2>
                    <p class="wow fadeInUp" data-wow-delay="100ms">At  Sakhuja Media Group we are more than just a team - we are a family of individuals to provide Content for all. Just like a family, we believe in working together and staying together amid all the problems we face, Our team is a bunch of dynamic and diverse individuals who are the best in the world and their work, The special thing about the family is that they never lose hope, they are ready to take any challenges that come their way, everytime they are prepared with their outstanding and creative solutions to solve the problems.</p>

                </div>
            </div>
            <div class="row sakhuja-ceo">
                <div class="col-md-7">
                    <p class="wow fadeInUp" data-wow-delay="100ms">A family's head is the ultimate source of motivation to the family, a family head is the ultimate torch bearer for the family". Our CEO and the founder - Mayank Sakhuja- carry similar qualities. He started Sakhuja Media Group to reach the masses by providing them the best regional content possible. </p>
                    <p class="wow fadeInUp" data-wow-delay="100ms">He started the company with a single Youtube channel with very few subscribers but his never-giving-up attitude led him to work day and night and now building an audience of more than 15 Million across all the media platforms. </p>
                </div>
                <div class="col-md-4 offset-md-1 text-center">
                    <img class="c-image mb-4 wow fadeInUp" data-wow-delay="100ms"
                        src="{{ asset('frontend/imgs/mayanksakhuja.jpg') }}" alt="">
                    <h4 class="wow fadeInUp" data-wow-delay="100ms">Mr.Mayank Sakhuja</h4>
                    <p class="wow fadeInUp" data-wow-delay="100ms">CEO , FOUNDER</p>
                </div>
            </div>
        </div>
    </section>
    <section class="company-culture">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Company Culture</h2>
                    <p class="wow fadeInUp mb-0" data-wow-delay="200ms">We believe in working with the utmost excellence, laughing together, and staying together whatever comes our way. At Sakhuja we are a Family and as a family, we love to celebrate whether it be  Festivals,  Birthdays, Achievements, Work Anniversaries, Milestones, etc. </p>
                </div>
                <div class="col-12 text-center">
                    <h2 class="wow fadeInUp mb-5" data-wow-delay="100ms">Employee <br> Appreciation Day</h2>
                </div>
            </div>
            <div class="row mb-md-5">
                <div class="col-md-4 p-md-0">
                    <img class="company-emp-heading2 cong1  mb-md-5 mb-3 wow fadeInLeft" data-wow-delay="100ms"  src="{{ asset($employeeOfTheMonth->employeeimage1) }}" alt="">
                </div>
                <div class="col-md-4 p-md-0">
                    <img class="company-emp-heading2 cong2 mb-md-5 mb-3 wow fadeInUp" data-wow-delay="100ms" src="{{ asset($employeeOfTheMonth->employeeimage2) }}" alt="">
                </div>
                <div class="col-md-4 p-md-0">
                    <img class="company-emp-heading2 cong3 mb-md-5 mb-3 wow fadeInRight" data-wow-delay="100ms" src="{{ asset($employeeOfTheMonth->employeeimage3) }}" alt="">
                </div>
            </div>
            <div class="row mb-md-5">
                <div class="col-md-4 p-md-0">
                    <img class="company-emp-preformer1  mb-md-5 mb-3 wow fadeInUp" data-wow-delay="200ms"
                        src="{{  asset($performerOfTheMonth->employeeimage1)  }}" alt="">
                </div>
                <div class="col-md-4 p-md-0">
                    <img class="company-emp-preformer2 mb-md-5 mb-3 wow fadeInUp" data-wow-delay="200ms"
                        src="{{ asset($performerOfTheMonth->employeeimage2) }}" alt="">
                </div>
                <div class="col-md-4 p-md-0">
                    <img class="company-emp-preformer1 mb-md-5 mb-3 wow fadeInUp" data-wow-delay="200ms"
                        src="{{ asset($performerOfTheMonth->employeeimage3)  }}" alt="">
                </div>
            </div>
            <div class="row py-md-5">
                <div class="col-12 text-center">
                    <h2 class="wow fadeInUp mb-5" data-wow-delay="100ms">Office Olympics <br> Compete for Glory!</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-box Office-Olympics1 wow fadeInUp" data-wow-delay="200ms" >
                        <img class="Office-Olympics mb-lg-4 mb-3"   src="{{ asset('frontend/imgs/Office-Olympics1.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box Office-Olympics2  wow fadeInUp" data-wow-delay="200ms">
                        <img class="Office-Olympics mb-lg-4 mb-3"
                            src="{{ asset('frontend/imgs/Office-Olympics2.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box Office-Olympics3 wow fadeInUp" data-wow-delay="200ms">
                        <img class="Office-Olympics mb-lg-4 mb-3 "
                            src="{{ asset('frontend/imgs/Office-Olympics3.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box Office-Olympics4 wow fadeInUp" data-wow-delay="200ms">
                        <img class="Office-Olympics mb-lg-4 mb-3"
                            src="{{ asset('frontend/imgs/Office-Olympics4.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box Office-Olympics5 wow fadeInUp" data-wow-delay="200ms">
                        <img class="Office-Olympics mb-lg-4 mb-3"
                            src="{{ asset('frontend/imgs/Office-Olympics5.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box Office-Olympics6  wow fadeInUp" data-wow-delay="200ms">
                        <img class="Office-Olympics mb-lg-4 mb-3"
                            src="{{ asset('frontend/imgs/Office-Olympics6.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="meet-team team-meet ">
        <div class="container">
            <div class="row mb-5 align-items-end">
                <div class="col-xl-5 col-lg-6 text-lg-start text-center">
                    <h3>Meet the Team,</h3>
                    <h2>FACE BEHIND OUR SUCCESS</h2>
                </div>
                <div class="col-xl-7 col-lg-6 text-lg-end text-center">
                    <img class="meet-team-img wow fadeInUp" data-wow-delay="300ms"
                        src="{{ asset('frontend/imgs/Happy vibe.svg') }}" alt="">
                </div>
                <div class="col-12 text-lg-start text-center">
                    <p>In our journey toward success, every team member plays a vital role. Let’s take a moment to appreciate the incredible individuals who make our workplace shine!</p>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $item)
                    <div class="col-lg-3 col-md-4 text-center mb-3">
                        <img class="c-image mb-2 wow fadeInUp" data-wow-delay="300ms"src="{{ asset($item->employeeimage1) }}" alt="">
                        <h4 class="wow fadeInUp" data-wow-delay="300ms">{{$item->employeename}}</h4>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{$item->designation}}</p>
                    </div>
                @endforeach


            </div>

        </div>

    </section>

    <section class="Playful-Moments-Captured">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Playful <br> Moments Captured</h2>
                </div>
                <div class="col-md-6">
                    <div class="marquee-wrapper">
                        <div class="industries-logo">
                            <div class="marquee-block">
                                <div class="marquee-inner to-left">
                                    <span>
                                        <div class="marquee-item">
                                            <img class=""src="{{ asset('frontend/imgs/companyemp.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item">
                                            <img class=""src="{{ asset('frontend/imgs/p01.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/p02.jpg') }}" alt="">
                                        </div>                             
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/p03.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item">
                                            <img class=""  src="{{ asset('frontend/imgs/p04.jpg') }}" alt="">
                                        </div>
                            
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/p02.jpg') }}" alt="">
                                        </div>                             
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/p03.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/p04.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item">
                                            <img class=""src="{{ asset('frontend/imgs/p01.jpg') }}" alt="">
                                        </div>
                                    </span>


                                </div>
                            </div>
                            <div class="marquee-block">
                                <div class="marquee-inner to-right">
                                    <span>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p06.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p05.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p06.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p07.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p05.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p06.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p07.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p05.jpg') }}" alt="">
                                        </div>
                                        
                                     
                                    </span>
                                </div>
                            </div>
                            <div class="marquee-block">
                                <div class="marquee-inner to-left">
                                    <span>
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/companyemp.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p06.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/companyemp.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p08.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p09.jpg') }}" alt="">
                                        </div>
                                        
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p10.jpg') }}" alt="">
                                        </div>
                                        

                                    </span>
                                </div>
                            </div>
                            <div class="marquee-block d-lg-block d-none">
                                <div class="marquee-inner to-right">
                                    <span>
                                        <div class="marquee-item">
                                            <img class="" src="{{ asset('frontend/imgs/companyemp.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p07.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p05.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p11.jpg') }}" alt="">
                                        </div>
                                        <div class="marquee-item"><img class=""
                                            src="{{ asset('frontend/imgs/p12.jpg') }}" alt="">
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
