<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        dd($data);
        return Validator::make($data, [
            'idnum' => ['required'],
            'phone' => ['required', 'string', 'max:10', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd('ok');
        $nid = request('idnum');
        $client = new \GuzzleHttp\Client();
        $req = $client->get('http://localhost:9000/api/nida/citizen/' . $nid);
        $response = json_decode($req->getBody());
        $citizen = $response[0];
        $role_id = DB::table('roles')->where('name', 'customer')->value('id');
        return User::create([
            'name' => $citizen->name,
            'role_id' => $role_id,
            'national_id' => $data['idnum'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
