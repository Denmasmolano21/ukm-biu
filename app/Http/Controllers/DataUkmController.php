<?php

namespace App\Http\Controllers;

use App\Models\DataUkm;
use Illuminate\Http\Request;

class DataUkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ukms = DataUkm::all();
        $categories = DataUkm::select('category')->distinct()->pluck('category');

        return view('ukm.index', compact('data_ukms', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $ukm = DataUkm::where('slug', $slug)->firstOrFail();
        return view('ukm.show', compact('ukm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataUkm $dataUkm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataUkm $dataUkm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataUkm $dataUkm)
    {
        //
    }
}
