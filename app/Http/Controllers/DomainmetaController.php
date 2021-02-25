<?php

namespace App\Http\Controllers;

use App\Domainmetadata;
use Illuminate\Http\Request;

class DomainmetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domainmetadata = Domainmetadata::all();

        return view('domain-meta', ['domainmetadata' => $domainmetadata]);
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
     * @param  \App\Domainmeta  $domainmeta
     * @return \Illuminate\Http\Response
     */
    public function show(Domainmeta $domainmeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domainmeta  $domainmeta
     * @return \Illuminate\Http\Response
     */
    public function edit(Domainmeta $domainmeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domainmeta  $domainmeta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domainmeta $domainmeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domainmeta  $domainmeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domainmeta $domainmeta)
    {
        //
    }
}
