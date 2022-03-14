<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('frontend.layouts.main', compact('services'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function getCreateaccount()
    {
        return view('frontend.shop.createacc');
    }
    public function getMituweri()
    {
        return view('frontend.shop.mituweri');
    }
    public function getMituweripost(Request $request)
    {
        return ($request);
    }
    public function getIngaragu()
    {
        return view('frontend.shop.ingaragu');
    }
    public function getIngaragupost(Request $request)
    {
        return ($request);
    }
    public function getAriho()
    {
        return view('frontend.shop.ariho');
    }
    public function getArihopost(Request $request)
    {
        return ($request);
    }
    public function getSimbura()
    {
        return view('frontend.shop.simbura');
    }
    public function getPartde()
    {
        return view('frontend.shop.partde');
    }
    public function getPartdepost(Request $request)
    {
        return ($request);
    }
    public function getSabaid()
    {
        return view('frontend.shop.sabaid');
    }
    public function getSabaidpost(Request $request)
    {
        return ($request);
    }
    public function getShingirwa()
    {
        return view('frontend.shop.shingirwa');
    }
    public function getShingirwapost(Request $request)
    {
        return ($request);
    }
    public function getDocument()
    {
        return view('frontend.shop.shaka');
    }
    public function getDocumentpost(Request $request)
    {
        return ($request);
    }
    public function serviice()
    {
        $service = Service::where('status', 'active')->get();
        return view('frontend.pay.services', compact('service'));
    }
    public function viewservice($slug)
    {
        if (Service::where('slug', $slug)->exists()) {
            $service = Service::where('slug', $slug)->first();
            return view('frontend.pay.services', compact('service'));
        } else {
            return redirect('/')->with('message', "Slug doesn't exist");
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function receipt()
    {
        return view('frontend.pay.receipt');
    }
}
