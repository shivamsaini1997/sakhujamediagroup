@extends('backend.layout.main')
@push('title')
    <title>Add Blog</title>
@endpush
@section('content')

    <div class="content-wrapper">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
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
                        <h3 class="card-title">Blog</h3>
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
                                    <label for="" class="form-label">Category</label>
                                    <select name="category" class="form-control"  id="">
                                        <option value="">Select</option>
                                        @foreach ($categoryblog as $item)
                                            <option value="{{ $item->category_id }}" {{ isset($blog) && $blog->category_id == $item->category_id ? 'selected' : '' }}>
                                                {{ $item->category_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('category')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Image</label>
                                    <input type="file" name="blog_image" id="" class="form-control"  accept="image/*"  value="" />
                                    @error('blog_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    @if(isset($blog->blog_image) && $blog->blog_image)
                                        <img class="mt-4" src="{{Storage::url($blog->blog_image)}}" alt="Current Image" style="max-width: 100px; max-height: 100px;">

                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" id="blog_name" class="slug-create form-control" value="{{isset($blog)?$blog->title : ''}}" />
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control" value="{{isset($blog)?$blog->slug: ''}}" />
                                    @error('slug')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Detail</label>
                                    <textarea id="summernote" name="blog_detail">{{isset($blog)?$blog->blog_detail: ''}}</textarea>
                                    @error('blog_detail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary add">Submit</button>
                    </div>
                </div>

        </form>

        </section>

    </div>


@endsection
