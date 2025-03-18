@extends('frontend.layout.main')

@push('title')
    <title>Contact us</title>
@endpush

@section('content')
    <section class="digitalassetsBanner banner pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <lottie-player autoplay loop mode="normal" src="{{asset('frontend/imgs/contact_us.json')}}"></lottie-player>
                </div>
            </div>
        </div>
    </section>
<section>
    <div class="container">
        <div class="row mb-md-5 mb-3">
            <div class="col-12 text-center">
                <h2 class="wow fadeInUp" data-wow-delay="100ms">Feel free to reach us!!</h2>
                <p class="wow fadeInUp" data-wow-delay="100ms">Whether you have questions, feedback, or need assistance just fill out the form below, or contact us directly via email or phone. We are here to help you!</p>
                <p class="wow fadeInUp" data-wow-delay="100ms">For Job Enquiries you can contact us at <a href="mailto:hr@sakhujamediagroup.com"><b>hr@sakhujamediagroup.com</b></a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pt-md-5">
                <div class="right-section-mail">
                    <div class="bg-contact mb-4 wow fadeInUp" data-wow-delay="100ms">
                      <p class="mb-0 d-flex align-items-center"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:contact@sakhujamediagroup.com">{{$globalSetting->email}}</a></p>
                    </div>
                    <div class="bg-contact mb-4 wow fadeInUp" data-wow-delay="100ms">
                      <p class="mb-0 d-flex"><i class="fa-solid fa-location-dot pe-2 location"></i><a href="https://maps.app.goo.gl/eVVRVbmW7qLMP2Wc7" target="_blanck">{{$globalSetting->address_office}} </a></p>
                    </div>
                    <div class="mt-md-5 pt-md-5 mb-md-0 mb-5">
                        <img src="{{asset('frontend/imgs/phone-image.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-job">
                    <div class="mb-5 text-center">
                        <h3>Let's Connect Here </h3>
                    </div>
                    <div class="connect-here">
                        <form action="{{route('contact-us-fm')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Your Name<span class="text-danger">*</span></label>
                                    <input type="text" name="your_name" class="form-control">
                                    @error('your_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Email Address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Phone Number<span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">How can we help?<span class="text-danger">*</span></label>
                                    <select class="form-select" name="how_can_we_help" id="">
                                        <option value="">Select</option>
                                        <option value="Enquiry for Rights">Enquiry for Rights</option>
                                        <option value="Discuss New Project">Discuss New Project</option>
                                        <option value="Join Sakhuja Media Group">Join Sakhuja Media Group</option>
                                        <option value="General Enquiry">General Enquiry</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('how_can_we_help')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Tell us Your query below</label>
                                    <textarea class="form-control" name="your_query" id="" cols="20" rows="5"></textarea>
                                </div>
                                <div class="text-center ">
                                    <button type="submit" class="btn btn-primary btn-one position-relative mt-2"><span>Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="googlemap">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Find Us Here</h2>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28002.823422165577!2d77.13163253476561!3d28.67908746867916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03cd3ac0ce97%3A0xbdc69d1483e65617!2sSakhuja%20Media%20Group!5e0!3m2!1sen!2sin!4v1728632988604!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="text-center mt-5">
        <a href="https://maps.app.goo.gl/eVVRVbmW7qLMP2Wc7" target="_blanck" class="btn btn-primary btn-one position-relative"><span>Get Direction <i class="fa-solid fa-arrow-right-long direction"></i></span></a>
    </div>
</section>
@endsection
