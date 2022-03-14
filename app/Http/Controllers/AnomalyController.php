<?php

namespace App\Http\Controllers;

use App\Anomaly;
use Illuminate\Http\Request;

class AnomalyController extends Controller
{

    public function failedAutho()
    {
        return view('admin.anomaly.authfail');
    }
    public function failedDataEntry()
    {
        return view('admin.anomaly.dataentry');
    }
    public function failedServiceRequest()
    {
        $anomalies = Anomaly::all();
        return view('admin.anomaly.failedrequest', compact('anomalies'));
    }
}
