@extends('frontend.layout.main')
@push('title')
    <title>{{$blog?$blog->title : ''}}</title>
@endpush

@section('content')
    <img style="width:100px; height:100px;" src="{{Storage::url($blog?$blog->blog_image : '')}}" alt="">
    <p>{{$blog?$blog->title : ''}}</p>
    <p>{!!$blog?$blog->blog_detail : ''!!}</p>
@endsection
