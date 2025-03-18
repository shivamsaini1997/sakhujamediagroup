<?php
use Illuminate\Support\Facades\Storage;

?>
@extends('backend.layout.main')
@push('title')
    <title>Homepage</title>
@endpush

@section('content')
<style>
    h3{
        margin: 0
    }
</style>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Homepage</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <form action="{{ route('homepage') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="data_id" value="{{ $homepage->id ?? '' }}">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Homepage</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Banner Video -->
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-8 col-md-6">
                                <h3><b>Banner Video</b></h3><br>
                                <div class="mb-3">
                                    <label for="banner_video" class="form-label">Video</label>
                                    <input type="file" name="bannervideo" id="banner_video" class="form-control" accept="video/*" />
                                    @error('bannervideo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($homepage->bannervideo) && $homepage->bannervideo)
                                        <video src="{{ asset($homepage->bannervideo) }}" type="video/mp4" width="200px" height="110px" controls>
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Who We Are Image -->
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-8 col-md-6">
                                <h3><b>Who we are?</b></h3><br>
                                <div class="mb-3">
                                    <label for="who_we_image" class="form-label">Who we are (Image)</label>
                                    <input type="file" name="whoweimage" id="who_we_image" class="form-control" accept="image/*" />
                                    @error('whoweimage')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($homepage->whoweimage) && $homepage->whoweimage)
                                        <img src="{{ asset($homepage->whoweimage) }}" alt="Who we are Image" style="width: 200px; height: 100px; object-fit: contain;">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="mb-3">
                                    <label for="who_we_description" class="form-label">Description</label>
                                    <input type="text" name="whowedescription" id="who_we_description" value="{{ $homepage->whowedescription ?? '' }}" class="form-control" />
                                    @error('whowedescription')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Achievements Image -->
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-8 col-md-6">
                                <h3><b>Our Achievements</b></h3><br>
                                <div class="mb-3">
                                    <label for="achievements_image" class="form-label">Achievements Playbutton</label>
                                    <input type="file" name="achievementsimage" id="achievements_image" class="form-control" accept="image/*" />
                                    @error('achievementsimage')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($homepage->achievementsimage) && $homepage->achievementsimage)
                                        <img src="{{ asset($homepage->achievementsimage) }}" alt="Achievements Image" style="width: 150px; height: 60px; object-fit: contain;">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="mb-3">
                                    <label for="achievements_description" class="form-label">Achievements Description</label>
                                    <input type="text" name="achievementsdescription" id="achievements_description" value="{{ $homepage->achievementsdescription ?? '' }}" class="form-control" />
                                    @error('achievementsdescription')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary mb-3">Submit</button>
            </form>
        </section>
    </div>
@endsection
