<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HistoryCheckup;
use Illuminate\Http\Request;
use App\Http\Requests\HistoryCheckupRequest; // Contoh request validation custom
use App\Exports\McuExport;
use Maatwebsite\Excel\Facades\Excel;

class McuController extends Controller
{
    public function index()
    {
        try {
            $datas = HistoryCheckup::all()->map(function ($item) {
                return [
                    'id' => $item->id,
                    'id_mcu' => $item->id_mcu,
                    'nama_pasien' => $item->nama_pasien,
                    'tanggal_mcu' => $item->tanggal_mcu,
                    'nik' => $item->nik,
                    'status_mcu' => $item->status_mcu,
                    'created_at' =>  $item->created_at->format('d-m-Y'),
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $datas,
                'message' => 'Data providers retrieved successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve providers: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $datas = HistoryCheckup::findOrFail($id);
            return response()->json($datas);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Data MCU tidak ditemukan'], 404);
        }
    }

    public function store(HistoryCheckupRequest $request)
    {
        try {
            $mcu = HistoryCheckup::create([
                'id_mcu' => $request->id_mcu,
                'nama_pasien' => $request->nama_pasien,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'provider' => $request->provider,
                'tanggal_mcu' => $request->tanggal_mcu,
                'status_mcu' => $request->status_mcu,
                'link_hasil_mcu' => $request->link_hasil_mcu,
            ]);
            return response()->json([
                'message' => 'Data MCU berhasil ditambahkan',
                'mcu' => $mcu,
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menambah data MCU', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(HistoryCheckupRequest $request, $id)
    {
        try {
            $mcu = HistoryCheckup::findOrFail($id);
            $mcu->update([
                'id_mcu' => $request->id_mcu,
                'nama_pasien' => $request->nama_pasien,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'provider' => $request->provider,
                'tanggal_mcu' => $request->tanggal_mcu,
                'status_mcu' => $request->status_mcu,
                'link_hasil_mcu' => $request->link_hasil_mcu,
            ]);
            return response()->json([
                'message' => 'Data MCU berhasil diperbarui',
                'mcu' => $mcu,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Data MCU tidak ditemukan'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal memperbarui data MCU', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $mcu = HistoryCheckup::findOrFail($id);
            $mcu->delete();
            return response()->json(['message' => 'Data MCU berhasil dihapus']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Data MCU tidak ditemukan'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data MCU', 'error' => $e->getMessage()], 500);
        }
    }
}
