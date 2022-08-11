<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kursus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Seesion;

class UserController extends Controller
{
    public function pageLogin()
    {
        # code...
        return view('user.login');
    }
    public function login(Request $request)
    {
        # code...
        $request -> validate([
            'mahasiswa_npm' =>"required|min:8|max:9",
            'password' => 'required'
        ]);

        $credentials = $request ->only('mahasiswa_npm', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect() -> intended('main');
        }
        return redirect() ->back();
        
    }
    public function logout()
    {
        # code...
        Auth::logout();
        return redirect() ->intended('/');
    }
    public function main()
    {
        # code...
        $kursus = Kursus::all();
        return view('user.main', compact('kursus'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        return view('user.tb-user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.register');

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
        $request -> validate([
            'mahasiswa_nama' => 'required',
            'mahasiswa_npm' => 'required|numeric|min:8',
            'mahasiswa_kelas' => 'required',
            'password' => 'required'
        ]);
        $user = new User;

        $user -> mahasiswa_nama = $request->input('mahasiswa_nama');
        $user -> mahasiswa_npm = $request -> input('mahasiswa_npm');
        $user -> mahasiswa_kelas = $request -> input('mahasiswa_kelas');
        $user -> password = Hash::make($request -> input('password'));

        $user ->save();

        return redirect() ->intended('/');

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
        $kursus = Kursus::find($id);
        return view('user.info', compact('kursus'));
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
        $user = User::find($id);
        return view('user.edit', compact('user'));
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
        
        $user = User::find($id);
        
        $user ->mahasiswa_nama = $request->input('mahasiswa_nama');
        $user -> mahasiswa_kelas = $request->input('mahasiswa_kelas');
        $user-> password = Hash::make($request->input('password'));
        $user -> update();

        return redirect() ->intended('main');
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
