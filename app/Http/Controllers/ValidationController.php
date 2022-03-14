<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ValidationController extends Controller
{

    //GUSABA ID
    public function validate_sabaid()
    {
        //
    }

    //ARIHO
    public function validate_ariho()
    {
        //get id number
        $nid = request('idnum');
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:9000/api/nida/citizen/' . $nid);
        $response = json_decode($request->getBody());
        if (isset($response) && !empty($response)) {
            $citizen = $response[0];
            // dd($citizen);
            // check if exists in minaloc
            $request = $client->get('http://localhost:9000/api/minaloc/citizen/info/' . $nid);
            $response = json_decode($request->getBody());
            $citizen_info = $response[0];
            if ($citizen_info->life == 'alive') {
                return view('frontend.pay.receipt');
            } else {
                $errors['minaloc_ariho'] = ' Your life status is stated as not alive';
                return back()->withErrors($errors);
            }
        } else {
            $errors['idnum'] = 'invalid national id number';
            return back()->withErrors($errors);
        }
    }


    //INGARAGU
    public function validate_ingaragu()
    {
        //get id number
        $nid = request('idnum');
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:9000/api/nida/citizen/' . $nid);
        $response = json_decode($request->getBody());
        if (isset($response) && !empty($response)) {
            $citizen = $response[0];
            // dd($citizen);
            // check if exists in minaloc
            $request = $client->get('http://localhost:9000/api/minaloc/citizen/info/' . $nid);
            $response = json_decode($request->getBody());
            $citizen_info = $response[0];
            if ($citizen_info->marriage == 'married') {
                //save data into anomalies tables
                DB::table('anomalies')->insert([
                    'names' => $citizen->name,
                    'national_id' => request('idnum'),
                    'service' => request('service_name'),
                    'created_at' => Carbon::now()
                ]);

                $errors['minaloc_ingaragu'] = ' Your Marital status is not single';
                return back()->withErrors($errors);
            } else {
                return view('frontend.pay.receipt');
            }
        } else {
            $errors['idnum'] = 'invalid national id number';
            return back()->withErrors($errors);
        }



        //check minaloc api if is ingaragu

        //if ingaragu redirect kuri payments page

        //else redirect back and display appropriate error
    }

    //PARTNERDEAD
    public function validate_widower()
    {
        //get id number
        $nid = request('idnumb');
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:9000/api/nida/citizen/' . $nid);
        $response = json_decode($request->getBody());
        if (isset($response) && !empty($response)) {
            $citizen = $response[0];
            // dd($citizen);
            // check if exists in minaloc
            $request = $client->get('http://localhost:9000/api/minaloc/citizen/info/' . $nid);
            $response = json_decode($request->getBody());
            $citizen_info = $response[0];
            if ($citizen_info->marriage == 'widower') {
                return view('frontend.pay.receipt');
            } else {
                $errors['minaloc_widower'] = ' Your Partner is not listed dead.';
                return back()->withErrors($errors);
            }
        } else {
            $errors['idnumb'] = ' invalid national id number';
            return back()->withErrors($errors);
        }



        //check minaloc api if is widower

        //if ingaragu redirect kuri payments page

        //else redirect back and display appropriate error
    }
}
