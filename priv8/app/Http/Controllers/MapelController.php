<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mapel;
use Alert;
use Illuminate\Support\Facades\Input;
use Validator;

class MapelController extends Controller
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
        $data = Mapel::orderBy('id','desc')->get();
        return view('mapel.index')->with('lap', $data)->with('no', $no);
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
        $valid = validator::make(
            Input::all(), array(
                'tanya' => 'required|min:1'
                ));

        if ($valid->passes()) {
            # code...
            $pft = new Mapel();
            $pft->napel = $request->input('tanya');
            $pft->save();

            return redirect()->back();
        } else {
            return redirect()->back();
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
        //
        $mapel = Mapel::where('id', '=', $id)->first();

        return view('mapel.edit')->with('mapel', $mapel);
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
        $mapel = Mapel::find($id);

        $valid = Validator::make(
            Input::all(), array(
                'napel' => 'required'
                ));

        if ($valid->passes()) {
            # code...
            $mapel->napel = Input::get('napel');
            $mapel->save();

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
        $hapus = Mapel::findOrFail($id);
        $hapus->delete();

        Alert::success('Berhasil Hapus Data', 'Success', 'Success');
        return redirect()->back();
    }
}
