<?php

namespace App\Http\Controllers;

use App\Zones;
use App\Record;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = "http://127.0.0.1:8081/api/v1/servers/localhost/zones?API-Key=key123456";
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch);          
        curl_close($ch); 
        return view ('zones', ['output' => $output]);      
        
    }

    public function postZones(Request $request){

        $data = ['name'=>$request->name,
                 'kind'=>$request->kind,
                 'masters'=>[$request->masters],
                 'dnssec'=>'false',
                 'soa-edit'=>'INCEPTION-INCREMENT',
                 'kind'=>$request->kind,
                 'nameservers'=>[$request->nameservers]
                ];
        $jdata = json_encode($data);
        $ch = curl_init(); 
        $url = 'http://127.0.0.1:8081/api/v1/servers/localhost/zones?API-Key=key123456';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);  
        //echo $output;
        
        return redirect('zones');
    }

    public function getRecord(Request $reguest,$id){
        
        $url = "http://127.0.0.1:8081/api/v1/servers/localhost/zones/$id?API-Key=key123456";
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch);          
        curl_close($ch); 

        //echo $output;
        return view ('records', ['output' => $output]);
    }

    public function delZones (Request $reguest,$id){
       // echo $id;
        $ch = curl_init(); 
        $url = "http://127.0.0.1:8081/api/v1/servers/localhost/zones/$id?API-Key=key123456";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);
        return redirect('zones'); 
    }

    public function putZones(Request $request, $id){

        $url = "http://127.0.0.1:8081/api/v1/servers/localhost/zones/$id?API-Key=key123456";
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch);          
        curl_close($ch); 
        //echo $output;

        return view('edit-domain', ['output' => $output], ['id' => $id]);
    }

    
    public function updateZones(Request $reguest){
      
        $ids = $reguest->id;
        $data = ['account'=>$reguest->account,
                 'kind'=>$reguest->kind,
                 'dnssec'=>'false',
                 'masters'=>[],
                 'soa_edit_api'=> $reguest->soa_edit_api                 
                ];
        $jdata = json_encode($data);
        $ch = curl_init(); 
        $url = 'http://127.0.0.1:8081/api/v1/servers/localhost/zones/'.$ids.'?API-Key=key123456';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);
        //echo $output;
        
        //echo "stawdadw";
        //var_dump($data);
        return redirect('zones');
        //echo $jdata;
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
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function show(Zones $zones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function edit(Zones $zones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zones $zones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zones $zones)
    {
        //
    }
}
