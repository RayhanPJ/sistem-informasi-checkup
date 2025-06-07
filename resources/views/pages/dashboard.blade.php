@extends('template.app')

@section('content')
    <div class="card-body">
        <h5 class="card-header text-center text-md-start pb-md-0">Data Pasien MCU</h5>
        <div class="card-datatable text-nowrap">
            <table class="dt-scrollableTable table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>ID MCU</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Tanggal MCU</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
