<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Option;
use App\Exports\SalesExport;
use Illuminate\Http\Request;
use App\Http\Requests\SalesRequest;
use Maatwebsite\Excel\Facades\Excel;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sales = Sales::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('branch', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->paginate(15)->withQueryString();

        return view('sales.index', ['sales' => $sales]);
    }

    /**
     * Export a listing of the resource.
     */
    public function export(Request $request)
    {
        $sales = Sales::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('branch', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->get();

        if (!count($sales)) {
            return redirect()->back();
        }

        return Excel::download(new SalesExport($sales), 'Sales.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options = Option::whereIn('key', ['branches'])
        ->get()
        ->mapWithKeys(function ($option) {
            return [$option->key => $option->values];
        });

        return view('sales.create', [
            'branches'  => $options['branches'] ?? [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SalesRequest $request)
    {
        $sales = Sales::create([
            'name' => $request->name,
            'branch' => $request->branch,
            'cash' => $request->cash,
            'network' => $request->network,
            'delivery' => $request->delivery,
        ]);

        return response()->json([
            'message' => 'تم الحفظ بنجاح'
        ]);
    }

    public function destroy(Sales $sales)
    {
        $sales->delete();
        return redirect()->route('sales')->with('success', 'تم الحذف بنجاح');
    }

    public function delete(Request $request)
    {
        $sales = Sales::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")
            )
            ->delete();

        return redirect()->route('sales')->with('success', 'تم الحذف بنجاح');
    }
}
