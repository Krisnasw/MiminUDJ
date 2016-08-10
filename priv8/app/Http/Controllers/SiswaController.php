<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;
use Alert;
use Illuminate\Support\Facades\Input;
use Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $no = 0;
        $data = Siswa::orderBy('id','asc')->get();
        return view('user.user')->with('siswa', $data)->with('no', $no);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = Siswa::Where('id', '=', $id)->first();

        return view('user.edit')->with('user', $user);
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
        $user = Siswa::find($id);

        $valid = Validator::make(
            Input::all(), array(
                'name' => 'required',
                'email' => 'required',
                'kelas' => 'required',
                'sekolah' => 'required'
                ));

        if ($valid->passes()) {
            # code...
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->kelas = Input::get('kelas');
            $user->sekolah = Input::get('sekolah');
            $user->save();

            Alert::success('Success Update', 'Success', 'Success');

            return redirect()->back();
        } else {

            Alert::error('Gagal Update', 'Error', 'Error');
            return redirect()->back();
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
        //
        $hapus = Siswa::findOrFail($id);
        $hapus->delete();

        return redirect()->back();
    }
}
