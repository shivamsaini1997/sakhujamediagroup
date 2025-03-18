
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
                        <h3 class="card-title">{{$title}}</h3>
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
                                    <label for="innovative-productions" class="form-label">Innovative Productions Image</label>
                                    <input type="file" name="innovative_productions" id="innovative-productions" class="form-control" accept="image/*" />
                                    @error('innovative_productions')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-4">
                                <div class="mb-3 position-relative">
                                    @if(isset($innovative->innovative_productions) && $innovative->innovative_productions)
                                        <img src="{{ asset($innovative->innovative_productions) }}" alt="" style="width: 200px; height: 100px; object-fit: contain;">
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
