<?php

namespace App\Http\Controllers;

use App\localisation;
use Illuminate\Http\Request;
use DB;

class localisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localisations = DB::table('localisations')->get();
        return view('site.pages.points_de_vente',compact('localisations'));
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
     * @param  \App\localisation  $localisation
     * @return \Illuminate\Http\Response
     */
    public function show(localisation $localisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\localisation  $localisation
     * @return \Illuminate\Http\Response
     */
    public function edit(localisation $localisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\localisation  $localisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, localisation $localisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\localisation  $localisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(localisation $localisation)
    {
        //
    }
}
