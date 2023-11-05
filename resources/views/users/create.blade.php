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
                    <h2 class="h4 mb-3">إنشاء مستخدم</h2>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('users.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="simpleinput">الاسم</label>
                                            <input type="text" id="simpleinput" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" required>
                                            @error('name')
                                                <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="example-email">البريد الإلكتروني</label>
                                            <input type="email" id="example-email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                            @error('email')
                                                <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="example-password">كلمة المرور</label>
                                            <input type="password" id="example-password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required>
                                            @error('password')
                                                <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">إنشاء</button>
                                    </form>
                                </div> <!-- /.col -->
                            </div>
                        </div>
                    </div> <!-- / .card -->
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
