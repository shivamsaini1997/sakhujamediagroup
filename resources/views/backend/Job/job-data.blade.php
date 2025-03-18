@extends('backend.layout.main')
@push('title')
    <title>Edit Job</title>
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
                    <h1>Job Data</h1>
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
                                    <th >Job Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Linkedin</th>
                                    <th>Current Designation</th>
                                    <th>Resume</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobdata as $item)
                                    <tr>
                                        <td><span class="increment">{{ $loop->iteration + $jobdata->firstItem() - 1 }}.</span></td>
                                        <td>{{$item->job_profile}}</td>
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td><a href="{{$item->linkedin}}" target="_blank">{{$item->linkedin}}</a></td>
                                        <td>{{$item->current_designation}}</td>
                                        <td>
                                            <a href="{{ asset($item->resume) }}" download target="_blank">
                                                <img src="{{url('backend/img/pdf_icon.png')}}" style="width: 40px;" alt=""><br>

                                                Download
                                            </a>
                                        </td>
                                        <td>{{ $item->created_at->format('d-m-y') }}</td>
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
