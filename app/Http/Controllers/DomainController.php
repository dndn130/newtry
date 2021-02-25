<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Record;
use DB;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = Domain::all();

        return view('domain', ['domains' => $domains]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        //eloquent
        // $domains = new Domain([
        //     'name' => $request->get('name'),
        //     'master' => $request->get('master'),
        //     'type' => $request->get('type')
        // ]);
        // $domains->save();


    public function postDomains(Request $request)
    {
        $values = array('name' => $request->get('name'),
            'master' => $request->get('master'),
            'type' => $request->get('type')
        );

        //echo $values;
        DB::table('domains')->insert($values);

        return redirect('domain'); 
    }

    public function putDomains(Request $request)
    {
        $values = array('name' => $request->get('name'),
            'master' => $request->get('master'),
            'type' => $request->get('type')
        );
        DB::table('domains')->where('id', $request->get('id'))->update($values); 

        $values2 = array('name' => $request->get('name')
        );
        DB::table('records')->where('domain_id', $request->get('id'))->update($values2); 

        return redirect('domain'); 
    }

    public function deleteDomains( Request $request)
    {
        DB::table('domains')->where('id', $request->get('id'))->delete();

        return redirect('domain');
    }


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
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Domain $domain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domain $domain)
    {
        //
    }
}
