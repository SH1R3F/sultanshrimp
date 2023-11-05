<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use App\Http\Requests\OptionRequest;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::whereIn('key', ['branches', 'resources'])
            ->get()
            ->mapWithKeys(function ($option) {
                return [$option->key => $option->values];
            });

        return view('options.index', ['options' => $options]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionRequest $request)
    {
        foreach ($request->validated() as $key => $values) {
            Option::updateOrCreate(['key' => $key], is_array($values) ? ['values' => $values] : ['value' => $values]);
        }
        return redirect()->back()->with('success', 'تم التحديث بنجاح');
    }
}
