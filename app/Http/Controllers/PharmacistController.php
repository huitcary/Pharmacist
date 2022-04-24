<?php

namespace App\Http\Controllers;

use App\Models\pharmacist;
use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Pharmacist::orderby('last_name')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function show(pharmacist $pharmacist)
    {
        return response($pharmacist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function edit(pharmacist $pharmacist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pharmacist $pharmacist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function destroy(pharmacist $pharmacist)
    {
        //
    }
}
