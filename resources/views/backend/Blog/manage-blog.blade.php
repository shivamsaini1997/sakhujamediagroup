@extends('backend.layout.main')
@push('title')
    <title>Edit Blog</title>
@endpush
@section('content')
<style>
    .btn-icon {
        font-size: 20px;
        margin: 0 12px 0 0;
        color: #111;
    }
    .scroll_overflow {
    overflow-y: auto;
    height: 100px;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Product</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 5%;">Category</th>
                                    <th style="width: 5%;">Blog Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Blog Detail</th>
                                    <th >Status</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $item)
                                    <tr>
                                        <td><span class="increment">{{ $loop->iteration }}.</span> </td>
                                        <td>
                                            @foreach ($blogcategory as $category)
                                                @if ($item->category_id === $category->category_id)
                                                    {{ $category->category_name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td><img src="{{Storage::url($item->blog_image)}}" alt="" style="width: 100px; height:100px;"></td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td>
                                            <div class="scroll_overflow">
                                                {!!$item->blog_detail!!}
                                            </div>
                                        </td>

                                        <td>
                                            @if($item->status == 1)
                                                <a href="{{route('status-blog', ['id' => $item->blog_id, 'status' => '0'])}}" onclick="return confirm('Are you sure!')">
                                                    <span class="btn bg-success">Active</span>
                                                </a>
                                            @elseif($item->status == 0)
                                                <a href="{{route('status-blog', ['id' => $item->blog_id, 'status' => '1'])}}" onclick="return confirm('Are you sure!')">
                                                    <span  class="btn bg-danger">Deactive</span>
                                                </a>
                                            @else

                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('edit-blog' , ['id' => $item->blog_id])}}" class="btn-icon">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="{{route('delete-blog', ['id' => $item->blog_id])}}" class="btn-icon">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach




                            </tbody>
                        </table>

                    </div>



                </div>

            </div>

        </div>

    </section>
    <!-- Delete Modal -->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="modal-default-label">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <b>Are you sure you want to delete this banner?</b>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="" class="btn btn-primary delete-modal">Delete</a>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
