@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            @include('layouts.alerts')
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Small table -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-3">المستخدمين</h2>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="toolbar">
                                        <form class="form">
                                            <div class="form-row">
                                                <div class="form-group col-auto mr-auto">
                                                    <a href="{{ route('users.create') }}" class="btn btn-primary">إنشاء جديد</a>
                                                </div>

                                                <div class="form-group col-auto d-flex">
                                                    <form method="GET" action="{{ route('users') }}">
                                                        <label for="search" class="sr-only">بحث</label>
                                                        <input type="text" name="search" class="form-control" id="search1" placeholder="بحث..." value="{{ request()->get('search') }}">
                                                        <input type="submit" value="بحث" class="btn btn-primary mx-2">
                                                    </form>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- table -->
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <th>اسم المستخدم</th>
                                                <th>البريد الإلكتروني</th>
                                                <th>تاريخ الانشاء</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->created_at->toDateString() }}</td>
                                                    <td>
                                                        @if ($user->id !== 1)
                                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">تعديل</a>
                                                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="d-inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div> <!-- customized table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
@endsection

@section('scripts')
    <script src='js/jquery.dataTables.min.js'></script>
    <script src='js/dataTables.bootstrap4.min.js'></script>
    <script>
        $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
@endsection
