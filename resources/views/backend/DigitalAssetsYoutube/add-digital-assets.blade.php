@extends('backend.layout.main')
@push('title')
<title>{{$title}}</title>
@endpush
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$title}} </h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{$url}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
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
                                <input type="file" name="channel_logo" id="" class="form-control" value=""  accept="image/*"  />
                                @error('channel_logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                @if(isset($youtubedigitalassets))
                                    <img src="{{asset($youtubedigitalassets->channel_logo)}}" alt="" style="width: 120px;height: 80px;object-fit: contain;">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Channel Title</label>
                                <input type="text" name="channel_title" id="" class="form-control" value="{{ $youtubedigitalassets->channel_title ?? '' }}" />
                                @error('channel_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Channel URL</label>
                                <input type="url" name="channel_url" id="" class="form-control" value="{{ $youtubedigitalassets->channel_url ?? '' }}" />
                                @error('channel_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Channel Username</label>
                                <input type="text" name="channel_username" id="" class="form-control" value="{{ $youtubedigitalassets->channel_username ?? '' }}" />
                                @error('channel_username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Channel Subscribers </label>
                                <input type="text" name="channel_subscription" id="" class="form-control" value="{{ $youtubedigitalassets->channel_subscribers ?? '' }}" />
                                @error('channel_subscription')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Channel Total Video</label>
                                <input type="text" name="channel_total_video" id="" class="form-control" value="{{ $youtubedigitalassets->channel_total_video ?? '' }}" />
                                @error('channel_total_video')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Channel Discription</label>
                                <input type="text" name="channel_discription" id="" class="form-control" value="{{ $youtubedigitalassets->channel_discreption ?? '' }}" />
                                @error('channel_discription')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial Thumbnail 1</label>
                                <input type="file" name="serial_thumbnail1" id="" class="form-control" value=""  accept="image/*"  />
                                @error('serial_thumbnail1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                @if(isset($youtubedigitalassets))
                                    <img src="{{asset($youtubedigitalassets->serial_thumbnail1)}}" alt="" style="width: 120px;height: 80px;object-fit: contain;">.
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial URL 1</label>
                                <input type="url" name="serial_url1" id="" class="form-control" value="{{$youtubedigitalassets->serial_url1 ?? ''}}"  />
                                @error('serial_url1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial Thumbnail 2</label>
                                <input type="file" name="serial_thumbnail2" id="" class="form-control" value=""   accept="image/*" />
                                @error('serial_thumbnail2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                @if(isset($youtubedigitalassets))
                                <img src="{{asset($youtubedigitalassets->serial_thumbnail2)}}" alt="" style="width: 120px;height: 80px;object-fit: contain;">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial URL 2</label>
                                <input type="url" name="serial_url2" id="" class="form-control" value="{{$youtubedigitalassets->serial_url2 ?? ''}}" />
                                @error('serial_url2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial Thumbnail 3</label>
                                <input type="file" name="serial_thumbnail3" id="" class="form-control" value=""  accept="image/*"  />
                                @error('serial_thumbnail3')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                @if(isset($youtubedigitalassets))
                                    <img src="{{asset($youtubedigitalassets->serial_thumbnail3)}}" alt="" style="width: 120px;height: 80px;object-fit: contain;">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial URL 3</label>
                                <input type="url" name="serial_url3" id="" class="form-control" value="{{$youtubedigitalassets->serial_url3 ?? ''}}" />
                                @error('serial_url3')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial Thumbnail 4</label>
                                <input type="file" name="serial_thumbnail4" id="" class="form-control" value=""  accept="image/*"  />
                                @error('serial_thumbnail4')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                @if(isset($youtubedigitalassets))
                                    <img src="{{asset($youtubedigitalassets->serial_thumbnail4)}}" alt="" style="width: 120px;height: 80px;object-fit: contain;">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="mb-3">
                                <label for="" class="form-label">Serial URL 4</label>
                                <input type="url" name="serial_url4" id="" class="form-control" value="{{$youtubedigitalassets->serial_url4 ?? ''}}" />
                                @error('serial_url4')
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
