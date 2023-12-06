<?php

namespace App\Http\Controllers;

use App\Models\gender;
use App\Http\Requests\StoregenderRequest;
use App\Http\Requests\UpdategenderRequest;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoregenderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gender $gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategenderRequest $request, gender $gender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gender $gender)
    {
        //
    }
}
