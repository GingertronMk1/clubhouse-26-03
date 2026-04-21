<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSportRequest;
use App\Http\Requests\UpdateSportRequest;
use App\Models\Sport;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Sport/Index', ['sports' => Sport::query()->paginate(10)]);
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
    public function store(StoreSportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport)
    {
        return inertia('Sport/Show', ['sport' => $sport]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSportRequest $request, Sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport)
    {
        //
    }
}
