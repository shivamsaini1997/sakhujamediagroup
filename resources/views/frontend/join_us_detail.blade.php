@extends('frontend.layout.main')

@push('title')
    <title>Join Us Detail</title>
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
    <section class="job-details pb-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="100ms">Grab Excellent Opportunities With Us</h2>
                    <p>Join our family and unlock the doors to growth. Fill out the form below the job description to proceed with your application.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="job-description pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="job-type">
                        <h3>{{$job->job_name}}</h3>
                        <P><b>Job Type: </b>
                            @if($job->job_type == 1)
                                    Full Time
                                @elseif ($job->job_type == 2)
                                    Part Time
                                @else

                                @endif
                        </P>
                        <P><b>Job Location: </b> {{$job->job_location}}</P>
                        <P><b>No of opening: </b> {{$job->no_opening}}</P>
                    </div>
                </div>
                <div class="job-description">
                    {!!$job->job_description!!}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="form-job">

                        <div class="mb-5 text-center">
                            <h3>{{$job->job_name}}</h3>
                        </div>
                        <form action="{{ route('store-job-data', ['slug' => $job->slug]) }}" class="join-form" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="job_profile" value="{{$job->job_name}}">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Full Name*</label>
                                    <input type="text" name="full_name" class="form-control">
                                    @error('full_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Email Address*</label>
                                    <input type="email" name="email" class="form-control">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Phone Number*</label>
                                    <input type="text" name="phone" class="form-control">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">LinkedIn Profile</label>
                                    <input type="url" name="linkedin" class="form-control">
                                    @error('linkedin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Current Designation*</label>
                                    <input type="text" name="current_designation" class="form-control">
                                    @error('current_designation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Attach your resume*</label><br>
                                    <div class="file-upload-container">
                                        <input type="file" class="attach-resume" id="attach-resume" name="resume" accept=".pdf">
                                        <label for="attach-resume" class="form-label input-file"> <i class="fas fa-paperclip"></i> Attach Resume/CV</label>
                                        <span class="selected-file"></span>
                                        @error('resume')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-center ">
                                <button type="submit" class="btn btn-primary btn-one position-relative mt-3"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const fileUpload = document.getElementById('attach-resume');
            const selectedFile = document.querySelector('.selected-file');

            fileUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                selectedFile.textContent = file.name;
            } else {
                selectedFile.textContent = '';
            }
            });

    </script>
@endsection
