<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Database;
use Illuminate\Http\Request;
use App\Dosiye;
use Illuminate\Support\Facades\DB;

class DosiyeController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'documents';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = $this->database->getReference($this->tablename)->getValue();
        $total_documents = $reference = $this->database->getReference($this->tablename)->getSnapshot()->numChildren();
        return view('admin.dosiye.index', compact('documents', 'total_documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dosiye.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postData = [
            'docid' => $request->docid,
            'docowner' => $request->docowner,
            'docname' => $request->docname,
            'file' => $request->file,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if ($postRef) {
            return redirect()->back()->with('message', 'Document added successfully');
        } else {
            return redirect()->back()->with('message', 'Document not added');
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
        $key = $id;
        //     $data = Dosiye::find('docid', $key)->get();
        //     dd($data);
        //     return view('admin.dosiye.edit', compact('data'));
        //
        $documentis = $this->database->getReference($this->tablename)->where('id', $key)->getValue();
        dd($documentis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $key = $id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        if ($editdata) {
            return view('admin.dosiye.edit', compact('editdata', 'key'));
        } else {
            return redirect()->back()->with('message', 'Document ID not found');
        }
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
        $key = $id;
        $updateData = [
            'docid' => $request->docid,
            'docowner' => $request->docowner,
            'docname' => $request->docname,
            'file' => $request->file,
        ];
        $res_updated = $this->database->getReference($this->tablename . '/' . $key)->update($updateData);
        if ($res_updated) {
            return redirect()->back()->with('message', 'Document updated successfully');
        } else {
            return redirect()->back()->with('message', 'Document failed to updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $key = $id;
        $del_data = $this->database->getReference($this->tablename . '/' . $key)->remove();
        if ($del_data) {
            return redirect()->back()->with('message', 'Document deleted sucessfuly');
        } else {
            return redirect()->back()->with('message', 'Document failed to delete');
        }
    }
}
