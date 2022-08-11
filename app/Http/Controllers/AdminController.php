<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Kursus;
use Illuminate\Http\Request;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function pageLogin()
    {
        # code...
        return view('admin.login');
    }
    public function login(Request $request)
    {
        # code...
        
        $request -> validate([
            'admin_email'=>"required",
            'password' =>"required"
        ]);
        $credentials = $request -> only('admin_email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            # code...
            $request->session()->regenerate();
            return redirect() ->intended('/dashboard');
        }
        return redirect() ->back();
    }
    public function dashboard()
    {
        # code...
        $kursus = Kursus::all();
        return view('admin.dashboard', ['kursus'=>$kursus]);
    }
    public function logout()
    {
        # code...
        Auth::guard('admin')->logout();
        return redirect() ->intended('/admin/login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
