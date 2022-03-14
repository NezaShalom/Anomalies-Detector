<?php

namespace App\Http\Middleware;

use App\Role;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\DB;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $rid = Role::where('name', '=', 'admin')->value('id');
        if (auth()->user() && auth()->user()->role_id == $rid && auth()->user()->status == 'active') {
            return $next($request);
        }
        //save data into anomalies tables
        // if ($request->is('dosiyes2/*')) {

        // }
        $role = Role::where('id', '=', auth()->user()->role_id)->value('name');

        DB::table('data_entry_anomalies')->insert([
            'names' => auth()->user()->name,
            'national_id' => auth()->user()->national_id,
            'role' => $role,
            'failedtask' => 'Attempt to view documents',
            'created_at' => Carbon::now()
        ]);
        return redirect()->back();
    }
}
