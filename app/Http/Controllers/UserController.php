<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function userStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('users')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('users')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
            'department_id' => 'required',
            'mobile_number' => 'required',
            'address' => 'required',
            'role' => 'required',
            'age' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'), $image);
        } else {
            $image = 'avatar2.png';
        }
        $data['name'] = $request->firstname . ' ' . $request->lastname;
        $data['image'] = $image;
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->back()->with('message', 'User created Successfully');
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
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'department_id' => 'required',
            'role' => 'required',
            'status' => 'required',
            'mobile_number' => 'required',
            'address' => 'required',
            'password' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);
        $data = $request->all();
        $user = User::find($id);
        if ($request->hasFile('image')) {
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'), $image);
        } else {
            $image = $user->image;
        }
        if ($request->password) {
            $password = $request->password;
        } else {
            $password = $user->password;
        }
        $data['image'] = $image;
        $data['password'] = bcrypt($password);
        $user->update($data);
        return redirect()->back()->with('message', 'User updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('message', 'User deleted Successfully');
    }
}
