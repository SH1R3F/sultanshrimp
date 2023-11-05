@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            @include('layouts.alerts')
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">خيارات الطلبات | Orders options</h2>
                    <p class="text-muted">إضافة وتعديلات خيارات الطلبات.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <form method="POST" action="{{ route('options') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group w-100">
                                                <label for="branches">الفروع | branches</label>
                                                <select class="form-control select2-multi" id="branches" name="branches[]" multiple>
                                                    @foreach ($options['branches'] ?? [] as $branch)
                                                        <option value="{{ $branch }}" selected>{{ $branch }}</option>
                                                    @endforeach
                                                </select>
                                            </div> <!-- form-group -->
                                        </div> <!-- form-row -->
                                        <div class="form-row">
                                            <div class="form-group w-100">
                                                <label for="resources">الموارد | Items</label>
                                                <select class="form-control select2-multi" name="resources[]" id="resources" multiple>
                                                    @foreach ($options['resources'] ?? [] as $resource)
                                                        <option value="{{ $resource }}" selected>{{ $resource }}</option>
                                                    @endforeach
                                                </select>
                                            </div> <!-- form-group -->
                                        </div> <!-- form-row -->
                                        <div class="d-flex flex-row-reverse">
                                            <button class="btn mb-2 btn-primary" type="submit">حفظ</button>
                                        </div>
                                    </div> <!-- /.card-body -->
                                </form>
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/uppy.min.js') }}"></script>
    <script src="{{ asset('js/quill.min.js') }}"></script>
    <script>
        $('.select2-multi').select2({
            multiple: true,
            tags: true,
            dir: "rtl"
        });
    </script>
@endsection
