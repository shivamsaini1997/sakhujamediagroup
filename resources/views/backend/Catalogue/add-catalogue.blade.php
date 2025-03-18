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
                                    <label for="" class="form-label">Serial Image</label>
                                    <input type="file" name="serial_image" id="" class="form-control"
                                        value="" accept="image/*" />
                                    @error('serial_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    @if (isset($catalogue))
                                        <img src="{{ asset($catalogue->serial_image) }}" alt=""
                                            style="width: 120px;height: 80px;object-fit: contain;">
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Serial Title</label>
                                    <input type="text" name="serial_title" id="" class="form-control"
                                        value="{{$catalogue->serial_title ?? ''}}" />
                                    @error('serial_title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Serial URL</label>
                                    <input type="url" name="serial_url" id="" class="form-control"
                                        value="{{$catalogue->serial_url ?? ''}}" />
                                    @error('serial_url')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">No. of Episodes </label>
                                    <input type="text" name="number_episodes" id="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        value="{{$catalogue->number_episodes ?? ''}}" />
                                    @error('number_episodes')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Languages </label>
                                    <input type="text" name="languages" id="" class="form-control"
                                        value="{{$catalogue->languages ?? ''}}" />
                                    @error('languages')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="mb-3">
                                    <label for="" class="form-label">Time </label>
                                    <input type="text" name="time" id="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        value="{{$catalogue->time ?? ''}}" />
                                    @error('time')
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
