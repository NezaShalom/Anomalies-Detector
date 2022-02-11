<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.layouts.main');
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
}
