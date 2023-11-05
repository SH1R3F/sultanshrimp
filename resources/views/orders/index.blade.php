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
                            <h2 class="h4 mb-1">الطلبات</h2>
                            <p class="mb-3">طلبات سلطان الجمبري</p>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="toolbar">
                                        <form class="form">
                                            <div class="form-row">
                                                <div class="form-group col-auto mr-auto">
                                                    <a href="{{ route('orders.export', request()->query()) }}" class="btn btn-primary">تصدير الكل</a>
                                                </div>

                                                <div class="form-group col-auto d-flex">
                                                    <form method="GET" action="{{ route('orders') }}">
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
                                                <th>اسم العامل</th>
                                                <th>اسم الفرع</th>
                                                <th>الطلبية</th>
                                                <th>التاريخ</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $order)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $order->name }}</td>
                                                    <td>{{ $order->branch }}</td>
                                                    <td>{!! $order->resources->reduce(function (?string $carry, $item) {
                                                        return $item->resource . ' | مطلوب ' . $item->amount . ' | موجود ' . $item->existing . '<br />' . $carry;
                                                    }) !!}</td>
                                                    <td>{{ $order->created_at->toDateString() }}</td>
                                                    <td>
                                                        <a href="{{ route('order.export', $order->id) }}" class="btn btn-primary">تصدير</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{ $orders->links() }}
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
