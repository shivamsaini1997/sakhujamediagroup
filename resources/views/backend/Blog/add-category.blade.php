@extends('backend.layout.main')
@push('title')
    <title>Add Blog Category</title>
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

                    <h1>Add Blog Category</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{route('store-blog-category')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="data_id" value="">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>
                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Category Name</label>
                                <input type="text" name="category" id="category" class="form-control" value="" />
                                @error('category')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <button class="btn btn-primary add">Submit</button>

                        <table class="table table-striped mt-5 table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryblog as $item)
                                    <tr>
                                        <td><span class="increment">{{ $loop->iteration }}.</span> </td>
                                        <td> {{ $item->category_name }} </td>
                                        <td>
                                            <a href="{{route('delete-category', ['id' => $item->category_id])}}">
                                                <i class="nav-icon fas fa-trash text-danger pe-auto admin-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

    </form>

    </section>

</div>

@endsection
