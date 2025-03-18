
@extends('backend.layout.main')
@push('title')
    <title>Employe of the month</title>
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
                        <h1>Employe of the month</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <form action="{{route('employee-of-the-month')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="data_id" value="{{ $employeeOfTheMonth->id ?? '' }}">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employe of the month</h3>
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
                                    <label for="employeeimage1" class="form-label">Employee Image 1</label>
                                    <input type="file" name="employeeimage1" id="employeeimage1" class="form-control" accept="image/*" />
                                    @error('employeeimage1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($employeeOfTheMonth->employeeimage1) && $employeeOfTheMonth->employeeimage1)
                                        <img src="{{ asset($employeeOfTheMonth->employeeimage1) }}" alt="Who we are Image" style="width: 200px; height: 100px; object-fit: contain;">
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-8 col-md-6">
                                <div class="mb-3">
                                    <label for="employeeimage2" class="form-label">Employee Image 2</label>
                                    <input type="file" name="employeeimage2" id="employeeimage2" class="form-control" accept="image/*" />
                                    @error('employeeimage2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($employeeOfTheMonth->employeeimage2) && $employeeOfTheMonth->employeeimage2)
                                        <img src="{{ asset($employeeOfTheMonth->employeeimage2) }}" alt="Who we are Image" style="width: 200px; height: 100px; object-fit: contain;">
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-8 col-md-6">
                                <div class="mb-3">
                                    <label for="employeeimage3" class="form-label">Employee Image 3</label>
                                    <input type="file" name="employeeimage3" id="employeeimage3" class="form-control" accept="image/*" />
                                    @error('employeeimage3')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if (isset($employeeOfTheMonth->employeeimage3) && $employeeOfTheMonth->employeeimage3)
                                        <img src="{{ asset($employeeOfTheMonth->employeeimage3) }}" alt="Who we are Image" style="width: 200px; height: 100px; object-fit: contain;">
                                    @endif
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
