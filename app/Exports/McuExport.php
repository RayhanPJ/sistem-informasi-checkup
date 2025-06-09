<?php

namespace App\Exports;

use App\Models\HistoryCheckup;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class McuExport implements FromCollection, WithHeadings, WithMapping
{
    // Mengambil semua data MCU
    public function collection()
    {
        return HistoryCheckup::all();
    }

    // Header kolom
    public function headings(): array
    {
        return [
            'ID MCU',
            'Nama',
            'Tempat Lahir',
            'Tanggal Lahir',
            'NIK',
            'Jenis Kelamin',
            'Alamat',
            'Bagian',
            'Provider',
            'Tanggal MCU',
            'Status MCU',
            'Link Hasil MCU',
        ];
    }

    // Mapping data agar kolom sesuai urutan dan format yang diinginkan
    public function map($item): array
    {
        return [
            $item->id_mcu,
            $item->nama_pasien,
            $item->tempat_lahir,
            $item->tanggal_lahir,
            $item->nik,
            $item->jenis_kelamin,
            $item->alamat,
            $item->pekerjaan,
            $item->provider,
            $item->tanggal_mcu,
            $item->status_mcu,
            $item->link_hasil_mcu,
        ];
    }
}
