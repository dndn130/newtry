<?php

namespace App\Http\Controllers;

use App\Record;
use DB;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Record::all();

        return view('record', ['record' => $record]);
    }

    public function getRecords(Request $request, $id)
    {
        $records = DB::table('records')
                     ->where('name', $id)
                     ->get(); 
        $domains = DB::table('domains')
                     ->where('name', $id)
                     ->get();

        //echo $domains;
        return view ('records', ['records' => $records], ['domains' => $domains]);
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

    public function postRecords(Request $request)
    {
        $values = array('domain_id' => $request->get('domain_id'),
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'content' => $request->get('content'),
            'ttl' => $request->get('ttl')
        );

        //echo $values;
        DB::table('records')->insert($values);
        
        return redirect('records/'.$request->get('name').'');
    }

    public function putRecords(Request $request)
    {
        $values = array('name' => $request->get('name'),
            'master' => $request->get('master'),
            'type' => $request->get('type')
        );
        DB::table('domains')->where('id', $request->get('id'))->update($values); 
    }

    public function deleteRecords(Request $request)
    {
        DB::table('records')->where('id', $request->get('id'))->delete();

                
        return redirect('records/'.$request->get('name').'');
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
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
