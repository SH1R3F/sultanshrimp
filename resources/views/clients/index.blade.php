@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Small table -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">الطلبات | Orders</h2>
                            <p class="mb-3">طلبات سلطان الجمبري</p>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="toolbar">
                                        <div class="form-row">
                                            <div class="form-group col-auto mr-auto">
                                                <a href="{{ route('clients.export', request()->query()) }}" class="btn btn-primary">تصدير الكل | Export all</a>
                                                <form style="display: inline-block" action="{{ route('clients.delete', request()->query()) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">حذف الكل | Delete all</button>
                                                </form>
                                            </div>

                                            <div class="form-group col-auto d-flex">
                                                <form method="GET" action="{{ route('clients') }}">
                                                    <label for="search" class="sr-only">بحث | Search</label>
                                                    <input type="text" name="search" class="form-control" id="search1" placeholder="بحث | Search..." value="{{ request()->get('search') }}">
                                                    <input type="submit" value="بحث" class="btn btn-primary mx-2">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- table -->
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <th>الاسم | Name</th>
                                                <th>رقم التليفون | Phone number</th>
                                                <th>الفرع | Branch</th>
                                                <th>التاريخ | Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $key => $client)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $client->name }}</td>
                                                    <td>{{ $client->phone }}</td>
                                                    <td>{{ $client->branch }}</td>
                                                    <td>{{ $client->created_at->toDateString() }}</td>
                                                    <td>
                                                        <form style="display: inline-block" action="{{ route('client.delete', $client->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">حذف | Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{ $clients->links() }}
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
