<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paket;
use App\Mapel;
use Alert;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class PaketController extends Controller
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
        $data = Paket::orderBy('id','desc')->get();
        $soal = DB::table('quiz_questions')
            ->join('quiz', 'quiz_questions.id_paket', '=', 'quiz.id')
            ->select('*')
            ->get();
        return view('paket.paket')->with('lap', $data)->with('no', $no)->with('soal', $soal);
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
        $validate = Validator::make(
            Input::all(), array(
                'tanya' => 'required'
                ));

        if ($validate->passes()) {
            # code...
            $add = new Paket();
            $add->nama_quiz = Input::get('tanya');
            $add->id_paket = $request->input('ids');
            $add->tanggal_mulai = $request->input('mulai');
            $add->tanggal_selesai = $request->input('selesai');
            $add->creator = $request->input('user');
            $add->save();

            Alert::success('Berhasil Tambah Paket', 'Success', 'Success');
            return redirect()->back();
        } else {
            Alert::error('Gagal Tambah Paket', 'Error', 'Error');
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
        $cek = Paket::where('id', '=', $id)->first();
        $pft = Mapel::orderBy('id', 'asc')->get();

        return view('paket.edit')->with('Paket', $cek)->with('pft', $pft);
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
        $add = Paket::find($id);

        $valid = Validator::make(
            Input::all(), array(
                'nama_quiz' => 'required',
                'creator' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
                ));

        if ($valid->passes()) {
            # code...
            $add->nama_quiz = Input::get('nama_quiz');
            $add->id_paket = $request->input('ids');
            $add->tanggal_mulai = $request->input('tanggal_mulai');
            $add->tanggal_selesai = $request->input('tanggal_selesai');
            $add->creator = $request->input('creator');
            $add->save();

            Alert::success('Berhasil Edit Paket', 'Success', 'Success');
            return redirect()->back();
        } else {
            Alert::error('Gagal Edit Paket', 'Error', 'Error');
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
        $hapus = Paket::findOrFail($id);
        $hapus->delete();

        return redirect()->back();
    }

    public function dropDown()
    {
        $pft = Mapel::orderBy('id', 'asc')->get();

        return view('paket.tambah')->with('exe', $pft);
    }
}
