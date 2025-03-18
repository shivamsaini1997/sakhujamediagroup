@extends('backend.layout.main')
@push('title')
    <title>{{ $title }}</title>
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $title }} </h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <label for="" class="form-label">Channel Logo</label>
                                    <input type="file" name="channel_logo" id="" class="form-control"
                                        value="" accept="image/*" />
                                    @error('channel_logo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    @if (isset($facebookassets))
                                        <img src="{{ asset($facebookassets->channel_logo) }}" alt=""
                                            style="width: 120px;height: 80px;object-fit: contain;">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Channel Title</label>
                                    <input type="text" name="channel_title" id="" class="form-control"
                                        value="{{ $facebookassets->channel_title ?? '' }}" />
                                    @error('channel_title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Channel URL</label>
                                    <input type="url" name="channel_url" id="" class="form-control"
                                        value="{{ $facebookassets->channel_url ?? '' }}" />
                                    @error('channel_url')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary add mb-3">Submit</button>
            </form>
        </section>
    </div>
@endsection
