<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Option;
use App\Exports\ClientExport;
use Illuminate\Http\Request;
use App\Exports\ClientsExport;
use App\Http\Requests\ClientRequest;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = Client::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('phone', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->paginate(15)->withQueryString();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Export a listing of the resource.
     */
    public function export(Request $request)
    {
        $clients = Client::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('phone', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->get();

        if (!count($clients)) {
            return redirect()->back();
        }

        return Excel::download(new ClientsExport($clients), 'Clients.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $client = Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'message' => 'تم الحفظ بنجاح'
        ]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients')->with('success', 'تم الحذف بنجاح');
    }

    public function delete(Request $request)
    {
        $clients = Client::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")
            ->orWhere('phone', 'LIKE', "%$search%"))
            ->delete();

        return redirect()->route('clients')->with('success', 'تم الحذف بنجاح');
    }
}
