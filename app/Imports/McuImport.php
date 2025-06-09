<?php

namespace App\Imports;

use App\Models\HistoryCheckup;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class McuImport implements ToModel, WithHeadingRow
{
    // Fungsi untuk setiap baris yang dibaca dari Excel
    public function model(array $row)
    {
        return new HistoryCheckup([
            'id_mcu' => $row['id_mcu'] ?? null,
            'nama_pasien' => $row['nama'] ?? null,
            'tempat_lahir' => $row['tempat_lahir'] ?? null,
            'tanggal_lahir' => $row['tanggal_lahir'] ?? null,
            'nik' => $row['nik'] ?? null,
            'jenis_kelamin' => $row['jenis_kelamin'] ?? null,
            'alamat' => $row['alamat'] ?? null,
            'pekerjaan' => $row['bagian'] ?? null, // mapping sesuai header "Bagian"
            'provider' => $row['provider'] ?? null,
            'tanggal_mcu' => $row['tanggal_mcu'] ?? null, // atau adjust sesuai kebutuhan
            'status_mcu' => $row['status_mcu'] ?? null,
            'link_hasil_mcu' => $row['link_hasil_mcu'] ?? null,
        ]);
    }
}
