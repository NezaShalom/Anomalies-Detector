<?php

namespace App\Http\Controllers;

use App\Anomaly;
use App\DataEntryAnomaly;
use Illuminate\Http\Request;

class AnomalyController extends Controller
{

    public function failedAutho()
    {
        return view('admin.anomaly.authfail');
    }
    public function failedDataEntry()
    {
        $entryAnomalies = DataEntryAnomaly::all();
        return view('admin.anomaly.dataentry', compact('entryAnomalies'));
    }
    public function failedServiceRequest()
    {
        $anomalies = Anomaly::all();
        return view('admin.anomaly.failedrequest', compact('anomalies'));
    }
}
