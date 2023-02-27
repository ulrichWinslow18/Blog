<?php

namespace App\Http\Controllers;

use App\Models\auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('local');
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
     * @param  \App\Models\auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function show(auteur $auteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function edit(auteur $auteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auteur $auteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(auteur $auteur)
    {
        //
    }
}
