<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Domain;
use App\Record;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $domains = Domain::all();
        $countd = $domains->count();

        $records = Record::all();
        $countr = $records->count();

        return view('dashboard2', ['countd' => $countd], ['countr' =>$countr]);

        // $url = "http://127.0.0.1:8081/api/v1/servers/localhost/zones?API-Key=keykunci";
        // $ch = curl_init(); 
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // $output = curl_exec($ch);          
        // curl_close($ch);      
        
        //return view('dashboard2', ['output' => $output]);
        //return view('dashboard2');
;
    }
}
