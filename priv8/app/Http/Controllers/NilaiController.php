<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Nilai;
use Alert;
use Validator;
use Excel;
use DB;
use Illuminate\Support\Facades\Input;

class NilaiController extends Controller
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
        $data = DB::table('hasil')
            ->join('users', 'hasil.nama', '=', 'users.name')
            ->select('*')
            ->where('users.kelas', '=', 'X')
            ->get();

        return view('nilai.index')->with('data', $data)->with('no', $no);
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
        $del = Nilai::findOrFail($id);
        $del->delete();

        Alert::success('Sukses Hapus Data', 'Success', 'Success');
        return redirect()->back();
    }

    public function nilaiSebelas()
    {
        //
        $no = 0;
        $data = DB::table('hasil')
            ->join('users', 'hasil.nama', '=', 'users.name')
            ->select('*')
            ->where('users.kelas', '=', 'XI')
            ->get();

        return view('nilai.sebelas')->with('data', $data)->with('no', $no);
    }

    public function nilaiDuaBelas()
    {
        //
        $no = 0;
        $data = DB::table('hasil')
            ->join('users', 'hasil.nama', '=', 'users.name')
            ->select('*')
            ->where('users.kelas', '=', 'XII')
            ->get();

        return view('nilai.belas')->with('data', $data)->with('no', $no);
    }

    public function exportExcel()
    {
        //
        $nilai = Nilai::join('users', 'users.id', '=', 'hasil.id_user')
        ->select(
          'hasil.id',
          'users.email',
          'users.name',
          'hasil.nilai')
        ->where('users.kelas', '=', 'X')
        ->get();

        $nilaiArray = [];

        // Define the Excel spreadsheet headers
        $nilaiArray[] = ['id', 'email','nama','nilai'];

        foreach ($nilai as $score) {
            $nilaiArray[] = $score->toArray();
        }

        // Generate and return the spreadsheet
        Excel::create('Rekap Nilai', function($excel) use ($nilaiArray) {

            // Set the spreadsheet title, creator, and description
            $excel->setTitle('Rekap Nilai');
            $excel->setCreator('Administrator')->setCompany('SEAMEO SEAMOLEC');
            $excel->setDescription('File Rekap Nilai');

            // Build the spreadsheet, passing in the payments array
            $excel->sheet('sheet1', function($sheet) use ($nilaiArray) {
                $sheet->fromArray($nilaiArray, null, 'A1', false, false);
            });

        })->download('xlsx');
    }

    public function exportExcelXI()
    {
      //
      $nilai = Nilai::join('users', 'users.id', '=', 'hasil.id_user')
      ->select(
        'hasil.id',
        'users.email',
        'users.name',
        'hasil.nilai')
      ->where('users.kelas', '=', 'XI')
      ->get();

      $nilaiArray = [];

      // Define the Excel spreadsheet headers
      $nilaiArray[] = ['id', 'email','nama','nilai'];

      foreach ($nilai as $score) {
          $nilaiArray[] = $score->toArray();
      }

      // Generate and return the spreadsheet
      Excel::create('Rekap Nilai', function($excel) use ($nilaiArray) {

          // Set the spreadsheet title, creator, and description
          $excel->setTitle('Rekap Nilai');
          $excel->setCreator('Administrator')->setCompany('SEAMEO SEAMOLEC');
          $excel->setDescription('File Rekap Nilai');

          // Build the spreadsheet, passing in the payments array
          $excel->sheet('sheet1', function($sheet) use ($nilaiArray) {
              $sheet->fromArray($nilaiArray, null, 'A1', false, false);
          });

      })->download('xlsx');
    }

    public function exportExcelXII()
    {
      $nilai = Nilai::join('users', 'users.id', '=', 'hasil.id_user')
      ->select(
        'hasil.id',
        'users.email',
        'users.name',
        'hasil.nilai')
      ->where('users.kelas', '=', 'XII')
      ->get();

      $nilaiArray = [];

      // Define the Excel spreadsheet headers
      $nilaiArray[] = ['id', 'email','nama','nilai'];

      foreach ($nilai as $score) {
          $nilaiArray[] = $score->toArray();
      }

      // Generate and return the spreadsheet
      Excel::create('Rekap Nilai', function($excel) use ($nilaiArray) {

          // Set the spreadsheet title, creator, and description
          $excel->setTitle('Rekap Nilai');
          $excel->setCreator('Administrator')->setCompany('SEAMEO SEAMOLEC');
          $excel->setDescription('File Rekap Nilai');

          // Build the spreadsheet, passing in the payments array
          $excel->sheet('sheet1', function($sheet) use ($nilaiArray) {
              $sheet->fromArray($nilaiArray, null, 'A1', false, false);
          });

      })->download('xlsx');
    }
}
