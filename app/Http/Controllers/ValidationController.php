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
        //get birthcerticate number and check if under 16
        $bc = request('bc');
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:9000/api/nida/citizen/age/' . $bc);
        $response = json_decode($request->getBody());
        if (isset($response) && !empty($response)) {
        $citizen = $response[0];
        $dateofbirth = $citizen->dob;
        $years = Carbon::parse($dateofbirth)->age;
        //dd($years);
        if ($years > 16) {
            return view('frontend.pay.receipt');
        } else {
            //save data into anomalies tables
            DB::table('anomalies')->insert([
                'names' => $citizen->name,
                'national_id' => request('bc'),
                'service' => request('service_name'),
                'created_at' => Carbon::now()
            ]);

            $errors['saba_idfail'] = ' Current user age is not eligible for NationalID';
            return back()->withErrors($errors);
        }
        else {
            $errors['idnum'] = 'invalid national id number';
            return back()->withErrors($errors);
        }
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
                //save data into anomalies tables
                DB::table('anomalies')->insert([
                    'names' => $citizen->name,
                    'national_id' => request('idnum'),
                    'service' => request('service_name'),
                    'created_at' => Carbon::now()
                ]);

                $errors['minaloc_ariho'] = ' Current subscriber is listed not alive';
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

                $errors['minaloc_ingaragu'] = ' Your Marital status is not stated *single';
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
            if ($citizen_info->marriage == 'widower') {
                return view('frontend.pay.receipt');
            } else {

                //save data into anomalies tables
                DB::table('anomalies')->insert([
                    'names' => $citizen->name,
                    'national_id' => request('idnum'),
                    'service' => request('service_name'),
                    'created_at' => Carbon::now()
                ]);
                $errors['minaloc_widower'] = ' Your Partner is not listed dead.';
                return back()->withErrors($errors);
            }
        } else {
            $errors['idnum'] = ' invalid national id number';
            return back()->withErrors($errors);
        }



        //check minaloc api if is widower

        //if ingaragu redirect kuri payments page

        //else redirect back and display appropriate error
    }

    //CRIMINAL INFO
    public function validate_criminalfree()
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
            if ($citizen_info->criminalstatus == 'no_jailtime') {
                return view('frontend.pay.receipt');
            } else {
                //save data into anomalies tables
                DB::table('anomalies')->insert([
                    'names' => $citizen->name,
                    'national_id' => request('idnum'),
                    'service' => request('service_name'),
                    'created_at' => Carbon::now()
                ]);

                $errors['minaloc_criminal'] = ' Your criminal record is charged 6 month above';
                return back()->withErrors($errors);
            }
        } else {
            $errors['idnum'] = 'invalid national id number';
            return back()->withErrors($errors);
        }
    }

    //DEVORCE
    public function validate_divorcestatus()
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
            if ($citizen_info->marriage == 'divorced') {
                return view('frontend.pay.receipt');
            } else {
                //save data into anomalies tables
                DB::table('anomalies')->insert([
                    'names' => $citizen->name,
                    'national_id' => request('idnum'),
                    'service' => request('service_name'),
                    'created_at' => Carbon::now()
                ]);

                $errors['minaloc_divorce'] = ' Your martual status is recorded not divorced';
                return back()->withErrors($errors);
            }
        } else {
            $errors['idnum'] = 'invalid national id number';
            return back()->withErrors($errors);
        }
    }

    //TEMPORARY_ID_LICENSE
    public function validate_SimburaID()
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
            $request = $client->get('http://localhost:9000/api/nida/temporary_ID_license/' . $nid);
            $response = json_decode($request->getBody());
            $tempo_info = $response[0];
            if ($tempo_info->IDreportedlost == 'yes') {
                return view('frontend.pay.receipt');
            } else {
                //save data into anomalies tables
                DB::table('anomalies')->insert([
                    'names' => $citizen->name,
                    'national_id' => request('idnum'),
                    'service' => request('service_name'),
                    'created_at' => Carbon::now()
                ]);

                $errors['temporalyIDmssg'] = " Your National ID is'nt reported lost to the Police";
                return back()->withErrors($errors);
            }
        } else {
            $errors['idnum'] = 'invalid national id number';
            return back()->withErrors($errors);
        }
    }
}
