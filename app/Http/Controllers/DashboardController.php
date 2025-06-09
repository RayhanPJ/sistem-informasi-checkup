<?php

namespace App\Http\Controllers;

use App\Exports\McuExport;
use App\Imports\McuImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\HistoryCheckup;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session()->has('user')) {
            return redirect()->route('home');
        }

        return view('pages.dashboard');
    }

    public function exportExcel()
    {
//        dd('Exporting data...'); // Debugging line, remove in production
        $fileName = 'data_mcu_'.date('Ymd_His').'.xlsx';
        return Excel::download(new McuExport, $fileName);
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
        $file = $request->file('file');
        Excel::import(new McuImport, $file);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil di import.'
        ]);
    }

    public function filter(Request $request)
    {
        $nama = $request->input('nama_pasien');
        $nik = $request->input('nik');

        $query = HistoryCheckup::query();

        if ($nama) {
            $query->where('nama_pasien', $nama);
        }
        if ($nik) {
            $query->where('nik', $nik);
        }

        $data = $query->first();

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json([]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
