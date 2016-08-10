<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Soal;
use App\Paket;
use Alert;
use Illuminate\Support\Facades\Input;
use Validator;

class SoalController extends Controller
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
        $data = Soal::orderBy('id','asc')->get();
        return view('soal.soal')->with('lap', $data)->with('no', $no);
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
        $validator = Validator::make(
            Input::all(), array(
                'tanya' => 'required',
                'pila' => 'required',
                'pilb' => 'required',
                'pilc' => 'required',
                'pild' => 'required',
                'jawab' => 'required'
            )
        );

        if ($validator->passes())
        {
            if ($request->hasFile('image')) {
                # code...
                $soal = new Soal();
                $soal->question = Input::get('tanya');
                $soal->id_paket = Input::get('ids');
                $soal->pila = Input::get('pila');
                $soal->pilb = Input::get('pilb');
                $soal->pilc = Input::get('pilc');
                $soal->pild = Input::get('pild');
                $soal->correct_answer = Input::get('jawab');
                $soal->image = $this->savePhoto($request->file('image'));
                $soal->save();

                alert()->success('Soal Berhasil Ditambahkan', 'Sukses');
                return redirect('/mimin/soal');
            } else {
            $soal = new Soal();
            $soal->question = Input::get('tanya');
            $soal->id_paket = Input::get('ids');
            $soal->pila = Input::get('pila');
            $soal->pilb = Input::get('pilb');
            $soal->pilc = Input::get('pilc');
            $soal->pild = Input::get('pild');
            $soal->correct_answer = Input::get('jawab');
            $soal->save();

            alert()->success('Soal Berhasil Ditambahkan', 'Sukses');
            return redirect('/mimin/soal');
            }
        } else {
            alert()->error('Soal Gagal Ditambahkan', 'Error');
            return redirect('/mimin/addsoal');
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
        $soal = Soal::where('id', '=', $id)->first();

        return view('soal.edit')->with(['soal' => $soal]);
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
        $soal = Soal::find($id);

        $validator = Validator::make(
            Input::all(), array(
                'tanya' => 'required',
                'pila' => 'required',
                'pilb' => 'required',
                'pilc' => 'required',
                'pild' => 'required',
                'jawab' => 'required'
            )
        );

        if ($validator->passes())
        {
            if ($request->hasFile('image')) {
            # code...
            $soal->question = Input::get('tanya');
            $soal->id_paket = Input::get('ids');
            $soal->pila = Input::get('pila');
            $soal->pilb = Input::get('pilb');
            $soal->pilc = Input::get('pilc');
            $soal->pild = Input::get('pild');
            $soal->correct_answer = Input::get('jawab');
            $soal->image = $this->savePhoto($request->file('image'));
            $soal->save();

            alert()->info('Soal Berhasil diUpdate');
            return redirect('/mimin/soal');
          } else {
            $soal->question = Input::get('tanya');
            $soal->id_paket = Input::get('ids');
            $soal->pila = Input::get('pila');
            $soal->pilb = Input::get('pilb');
            $soal->pilc = Input::get('pilc');
            $soal->pild = Input::get('pild');
            $soal->correct_answer = Input::get('jawab');
            $soal->save();

            alert()->info('Soal Berhasil diUpdate');
            return redirect('/mimin/soal');
          }
        } else {
          Alert::error('Gagal Update Soal', 'Error', 'Error');
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
        $blog = Soal::findOrFail($id);
        $blog->delete();

        alert()->success('Soal Berhasil Dihapus', 'Success');
        return redirect('/mimin/soal');
    }

    public function dropdownPaket()
    {
      //
      $paket = Paket::all();

      return view('soal.tambah')->with('paket', $paket);
    }

    protected function savePhoto($photo)
    {
        $destinationPath = 'images';
        $subdestinationPath = 'soal';
        $extension = $photo->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        $photo->move($destinationPath. '/' . $subdestinationPath , $fileName);
        $prod['gambar'] = $destinationPath. '/' . $subdestinationPath . '/' . $fileName;

        return $prod['gambar'];
    }

    protected function deletePhoto($photo)
    {
        File::delete($photo);
        return $photo;
    }
}
