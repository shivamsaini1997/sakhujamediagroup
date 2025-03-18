@extends('frontend.layout.main')

@push('title')
    <title>Bolg</title>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($blog as $blogs)
                <div class="col-md-4">
                    <img src="{{Storage::url($blogs->blog_image)}}" alt="">
                    <span>{{$blogs->title}}</span>
                    <span class="">{!!$blogs->blog_detail!!}</span>
                    <a href="{{route('blog-detail', $blogs->slug)}}" class="btn btn-primary">
                        Read More
                    </a>
                </div>
            @endforeach

        </div>
    </div>

@endsection
