<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $userReg = User::all();
        return view('home', [
            'userReg' => $userReg,
        ]);
    }
    /**
     * ---- Edit USER ----
     */

    public function edit(Request $request)
    {
        $userAux = User::find($request->id);        
        return view('auth.edit',);
    }
}
