@extends('backend.layout.main')
@push('title')
    <title>{{$title}}</title>
@endpush
@section('content')
<div class="content-wrapper">
    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{$url}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="data_id" value="">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Job</h3>
                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jobname" class="form-label">Job Name</label>
                                <input type="text" name="job_name" id="jobname" class="form-control slug-create" value="{{isset($job)?$job->job_name : ''}}" />
                                @error('job_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control" value="{{isset($job)?$job->slug : ''}}" />
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="no_opening" class="form-label">No. of Opening</label>
                                <input type="text" name="no_opening" id="no_opening" class="form-control" value="{{isset($job)?$job->no_opening : ''}}" />
                                @error('no_opening')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="experience" class="form-label">Experience</label>
                                <input type="text" name="experience" id="experience" class="form-control" value="{{isset($job)?$job->experience : ''}}" />
                                @error('experience')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="job_type" class="form-label">Job Type</label>
                                <select name="job_type" id="job_type" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1" {{isset($job) ?$job->job_type == 1 ? 'selected' : '' : ''}}>Full Time</option>
                                    <option value="2"{{isset($job)?$job->job_type == 2 ? 'selected' : '' : ''}}>Part Time</option>
                                </select>
                                @error('job_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="job_location" class="form-label">Job Location</label>
                                <input type="text" name="job_location" id="job_location" class="form-control" value="{{isset($job)?$job->job_location : ''}}" />
                                @error('job_location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="summernote" class="form-label">Job Description</label>
                                    <textarea id="summernote" name="job_description">{{isset($job)?$job->job_description : ''}}</textarea>
                                    @error('job_description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary add">Submit</button>
                    </div>
                </div>
            </div>

    </form>

    </section>

</div>

@endsection
