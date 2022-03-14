<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }
    public function serviceStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('services')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('services')->where('id', $request->id)->update(['status' => 'inactive']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'string|required',
                'slug' => 'string|required',
                'description' => 'string|required',
                'price' => 'integer|required',
                'status' => 'nullable|in:active,inactive',
            ]
        );
        $data = $request->all();
        $status = Service::create($data);
        if ($status) {
            return redirect()->route('services.index')->with('message', 'Successfully created service');
        } else {
            return back()->with('message', 'Something went wrong');
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
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
        $service  = Service::find($id);
        $data = $request->all();
        $service->update($data);
        return redirect()->route('services.index')->with('message', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.index')->with('message', 'Record deleted successfully');
    }
}
