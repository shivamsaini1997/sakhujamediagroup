
@extends('backend.layout.main')
@push('title')
    <title>{{$title}}</title>
@endpush
@section('content')
<style>
    h3{
        margin: 0
    }
</style>
    <div class="content-wrapper">
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Team</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Who We Are Image -->
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-8 col-md-6">
                                <div class="mb-3">
                                    <label for="employeeimage" class="form-label">Employee Image</label>
                                    <input type="file" name="employeeimage" id="employeeimage" class="form-control" accept="image/*" />
                                    @error('employeeimage')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($teams->employeeimage1) && $teams->employeeimage1)
                                        <img src="{{ asset($teams->employeeimage1) }}" alt="" style="width: 200px; height: 100px; object-fit: contain;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="employeename" class="form-label">Employee Name</label>
                                    <input type="text" name="employeename" id="employeename" class="form-control" value="{{isset($teams)? $teams->employeename:''}}" />
                                    @error('employeename')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">Designation</label>

                                    <input type="text" name="designation" id="designation" class="form-control" value="{{ isset($teams)?$teams->designation :'' }}" />
                                    @error('designation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mb-3">Submit</button>
            </form>
        </section>
    </div>
@endsection
