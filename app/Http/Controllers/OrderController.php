<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Option;
use App\Exports\OrderExport;
use Illuminate\Http\Request;
use App\Exports\OrdersExport;
use App\Http\Requests\OrderRequest;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = Order::with('resources')->when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('branch', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->paginate(15);

        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * Export a listing of the resource.
     */
    public function export(Request $request)
    {
        $orders = Order::with('resources')->when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('branch', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->paginate(15);

        if (!count($orders)) {
            return redirect()->back();
        }

        return Excel::download(new OrdersExport($orders), 'Orders.xlsx');
    }

    /**
     * Export a single resource.
     */
    public function exportOrder(Order $order)
    {
        return Excel::download(new OrderExport($order), "{$order->branch}.xlsx");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options = Option::whereIn('key', ['branches', 'resources'])
            ->get()
            ->mapWithKeys(function ($option) {
                return [$option->key => $option->values];
            });

        return view('order.create', [
            'branches'  => $options['branches'] ?? [],
            'resources' => $options['resources'] ?? [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $order = Order::create([
            'name' => $request->name,
            'branch' => $request->branch,
        ]);

        foreach ($request->resources as $resource) {
            $order->resources()->create([
                'resource' => $resource['resource'],
                'amount' => $resource['amount'],
                'existing' => $resource['existing'],
            ]);
        }
        
        return response()->json([
            'message' => 'تم التحديث بنجاح'
        ]);
    }
}
