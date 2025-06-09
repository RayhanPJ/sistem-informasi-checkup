@extends('template.app')

@section('content')
    <div class="card-body">
        <div class="d-flex justify-content-end me-5">
            <a type="button" href="{{ route('export') }}"
               class="btn btn-success me-6">
                <i class="icon-base ri ri-file-download-line icon-20px"></i>
                <span class="d-none d-md-inline-block ms-2">Export Excel</span>
            </a>
            <button
                type="button"
                class="btn btn-warning me-6"
                data-bs-toggle="modal"
                data-bs-target="#modalImport">
                <i class="icon-base ri ri-file-upload-line icon-20px"></i>
                <span class="d-none d-md-inline-block ms-2">Import Excel</span>
            </button>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalCenter">
                <i class="icon-base ri ri-add-box-line icon-20px"></i>
                <span class="d-none d-md-inline-block ms-2">Tambah Data</span>
            </button>
        </div>
        <h5 class="card-header text-center text-md-start pb-md-0">Data Pasien MCU</h5>
        <div class="card-datatable text-nowrap">
            <table class="dt-scrollableTable table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>ID MCU</th>
                    <th>Nama Pasien</th>
                    <th>NIK</th>
                    <th>Tanggal MCU</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="formMcu" autocomplete="off">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Tambah/Edit Data MCU</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id"/>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="id_mcu" class="form-label">Nomor ID MCU</label>
                                    <input type="text" class="form-control" id="id_mcu" name="id_mcu"
                                           placeholder="Masukkan Nomor ID MCU" required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama_pasien" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien"
                                           placeholder="Masukkan Nama Pasien" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                           placeholder="Masukkan Tempat Lahir Pasien" required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK"
                                           required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"
                                           required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="pekerjaan" class="form-label">Bagian</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Bagian"
                                           required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="provider" class="form-label">Provider</label>
                                    <select id="provider" name="provider" class="form-select" required>
                                        <option value="" disabled selected>Pilih Provider</option>
                                        <option value="BPJS Kesehatan">BPJS Kesehatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tanggal_mcu" class="form-label">Tanggal MCU</label>
                                    <input type="date" class="form-control" id="tanggal_mcu" name="tanggal_mcu" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="status_mcu" class="form-label">Status Hasil MCU</label>
                                    <select id="status_mcu" name="status_mcu" class="form-select" required>
                                        <option value="" disabled selected>Pilih Status</option>
                                        <option value="Fit">Fit</option>
                                        <option value="Fit With Note">Fit With Note</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Unfit">Unfit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="link_hasil_mcu" class="form-label">Link PDF Hasil MCU (Google Drive)</label>
                                    <input type="text" class="form-control" id="link_hasil_mcu" name="link_hasil_mcu" placeholder="Masukkan Bagian"
                                           required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalImport" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="formImport" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalImportTitle">Import Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group">
                                <input
                                    type="file"
                                    name="file"
                                    class="form-control"
                                    id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04"
                                    aria-label="Upload"
                                    accept=".xlsx,.xls" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        /**
         * DataTables Extensions (js)
         */
        'use strict';

        document.addEventListener('DOMContentLoaded', function (e) {
            const dt_scrollable_table = document.querySelector('.dt-scrollableTable');
            let dt_scrollableTable;

            if (dt_scrollable_table) {
                dt_scrollableTable = new DataTable(dt_scrollable_table, {
                    ajax: '{{ route("mcu.index") }}', // Sesuaikan path JSON Anda
                    columns: [
                        {data: 'id_mcu', title: 'ID MCU'},
                        {data: 'nama_pasien', title: 'Nama'},
                        {data: 'nik', title: 'NIK'},
                        {data: 'tanggal_mcu', title: 'Tanggal MCU'},
                        {data: 'status_mcu', title: 'Status'}
                    ],
                    columnDefs: [
                        {
                            targets: 4, // Kolom status (indeks ke-4)
                            render: function (data, type, full, meta) {
                                // Pemetaan status Anda
                                const statusMap = {
                                    'Fit': {title: 'Fit', class: 'bg-label-success'},
                                    'Fit With Note': {title: 'Fit With Note', class: 'bg-label-warning'},
                                    'Pending': {title: 'Pending', class: 'bg-label-primary'},
                                    'Unfit': {title: 'Unfit', class: 'bg-label-danger'}
                                };

                                if (data in statusMap) {
                                    return `
                                <span class="badge rounded-pill ${statusMap[data].class}">
                                    ${statusMap[data].title}
                                </span>
                            `;
                                }
                                return data; // Jika status tidak terdefinisi, tampilkan teks biasa
                            }
                        },
                        {
                            targets: 5, // Kolom aksi tambahan, sesuaikan jika ada
                            title: 'Actions',
                            searchable: false,
                            orderable: false,
                            className: 'd-flex align-items-center',
                            render: function (data, type, full, meta) {
                                // console.log('Rendering actions for:', full);
                                return (
                                    '<div class="d-inline-block">' +
                                    '<a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="icon-base ri ri-more-2-fill icon-20px"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-end m-0">' +
                                    '<div class="dropdown-divider"></div>' +
                                    `<a href="javascript:;" class="dropdown-item text-danger delete-record" data-id="${full.id}" id="btn-delete">Hapus</a>` +
                                    '</div>' +
                                    '</div>' +
                                    `<a href="javascript:;" id='btn-edit' class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit" data-id="${full.id}"><i class="icon-base ri ri-edit-box-line icon-20px"></i></a>`
                                );
                            }
                        }
                    ],
                    scrollY: '300px',
                    scrollX: true,
                    layout: {
                        topStart: {
                            rowClass: 'row mx-2 justify-content-between',
                            features: [
                                {
                                    pageLength: {
                                        menu: [7, 10, 25, 50, 100],
                                        text: 'Show_MENU_entries'
                                    }
                                }
                            ]
                        },
                        topEnd: {
                            search: {
                                placeholder: 'Type search here'
                            }
                        },
                        bottomStart: {
                            rowClass: 'row mx-2 justify-content-between',
                            features: ['info']
                        },
                        bottomEnd: 'paging'
                    },
                    language: {
                        paginate: {
                            next: '<i class="icon-base ri ri-arrow-right-s-line scaleX-n1-rtl icon-22px"></i>',
                            previous: '<i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-22px"></i>',
                            first: '<i class="icon-base ri ri-skip-back-mini-line scaleX-n1-rtl icon-22px"></i>',
                            last: '<i class="icon-base ri ri-skip-forward-mini-line scaleX-n1-rtl icon-22px"></i>'
                        }
                    },
                    initComplete: function (settings, json) {
                        dt_scrollable_table.querySelector('tbody tr:first-child').classList.add('border-top-0');
                    }
                });
            }

            setTimeout(() => {
                const elementsToModify = [
                    {selector: '.dt-layout-table', classToRemove: 'row mt-2'},
                    {selector: '.dt-layout-end', classToAdd: 'mt-0', classToRemove: 'ms-auto'},
                    {selector: '.dt-layout-end .dt-search', classToAdd: 'mt-md-5 mt-0', classToRemove: 'ms-auto'},
                    {selector: '.dt-layout-full', classToRemove: 'col-md col-12', classToAdd: 'table-responsive'}
                ];

                elementsToModify.forEach(({selector, classToRemove, classToAdd}) => {
                    document.querySelectorAll(selector).forEach(element => {
                        if (classToRemove) {
                            classToRemove.split(' ').forEach(className => element.classList.remove(className));
                        }
                        if (classToAdd) {
                            classToAdd.split(' ').forEach(className => element.classList.add(className));
                        }
                    });
                });
            }, 100);
        });

        $(document).ready(function() {
            let currentEditId = null; // untuk menyimpan id data yang sedang diedit

            // Function untuk reset form modal
            function resetForm() {
                $('#formMcu')[0].reset();
                $('#id').val('');
                currentEditId = null;
            }

            // Tampilkan modal tambah data
            $('#btnAdd').click(function() {
                resetForm();
                $('#modalCenterTitle').text('Tambah Data MCU');
                $('#modalCenter').modal('show');
            });

            // Ambil data dan isi form modal untuk edit
            $(document).on('click', '#btn-edit', function() {
                resetForm();
                let id = $(this).data('id');
                currentEditId = id;

                $.ajax({
                    url: `{{ route('mcu.show', '') }}/${id}`, // sesuaikan route show MCU Anda
                    type: 'GET',
                    success: function(response) {
                        // Isi form dengan data dari response
                        $('#modalCenterTitle').text('Edit Data MCU');
                        $('#id').val(response.id ?? '');
                        $('#id_mcu').val(response.id_mcu ?? '');
                        $('#nama_pasien').val(response.nama_pasien ?? '');
                        $('#tempat_lahir').val(response.tempat_lahir ?? '');
                        $('#tanggal_lahir').val(response.tanggal_lahir ?? '');
                        $('#nik').val(response.nik ?? '');
                        $('#jenis_kelamin').val(response.jenis_kelamin ?? '');
                        $('#alamat').val(response.alamat ?? '');
                        $('#pekerjaan').val(response.pekerjaan ?? '');
                        $('#provider').val(response.provider ?? '');
                        $('#tanggal_mcu').val(response.tanggal_mcu ?? '');
                        $('#status_mcu').val(response.status_mcu ?? ''); // status MCU (fit, unfit, etc)
                        $('#link_hasil_mcu').val(response.link_hasil_mcu ?? '');

                        $('#modalCenter').modal('show');
                    },
                    error: function() {
                        Swal.fire('Error', 'Gagal mengambil data.', 'error');
                    }
                });
            });

            // Submit form untuk tambah dan edit
            $('#formMcu').submit(function(e) {
                e.preventDefault();

                let formData = $(this).serialize();

                let url = currentEditId === null ?
                    "{{ route('mcu.store') }}" : // route buat simpan data baru
                    `{{ route('mcu.update', '') }}/${currentEditId}`; // route buat update data

                let method = currentEditId === null ? 'POST' : 'PUT';

                $.ajax({
                    url: url,
                    type: method,
                    data: formData,
                    success: function(response) {
                        $('#modalCenter').modal('hide');
                        Swal.fire('Sukses', response.message || 'Data berhasil disimpan', 'success');
                        $('.dt-scrollableTable').DataTable().ajax.reload(null, false); // reload datatable tanpa reset pagination
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON?.errors;
                        let errMsg = 'Terjadi kesalahan.';

                        if (errors) {
                            errMsg = Object.values(errors).map(arr => arr.join('<br>')).join('<br>');
                        } else if (xhr.responseJSON?.message) {
                            errMsg = xhr.responseJSON.message;
                        }

                        Swal.fire('Gagal', errMsg, 'error');
                    }
                });
            });

            $('#formImport').submit(function(e) {
                e.preventDefault();

                // 'this' harus merujuk ke form DOM element
                const formElement = this;

                // Buat objek FormData dari form
                let formData = new FormData(formElement);

                // Cek file ada di FormData (opsional)
                if (!formData.get('file') || formData.get('file').size === 0) {
                    Swal.fire('Gagal', 'Silakan pilih file Excel yang valid.', 'error');
                    return;
                }

                $.ajax({
                    url: "{{ route('import') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#modalCenter').modal('hide');
                        Swal.fire('Sukses', response.message || 'Data berhasil disimpan', 'success');
                        $('.dt-scrollableTable').DataTable().ajax.reload(null, false);
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON?.errors;
                        let errMsg = 'Terjadi kesalahan.';

                        if (errors) {
                            errMsg = Object.values(errors).map(arr => arr.join('<br>')).join('<br>');
                        } else if (xhr.responseJSON?.message) {
                            errMsg = xhr.responseJSON.message;
                        }

                        Swal.fire('Gagal', errMsg, 'error');
                    }
                });
            });


            // Hapus data
            $(document).on('click', '#btn-delete', function() {
                let id = $(this).data('id');
                console.log('id to delete:', id);

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `{{ route('mcu.destroy', '') }}/${id}`,
                            type: 'DELETE',
                            data: {_token: '{{ csrf_token() }}'},
                            success: function(response) {
                                Swal.fire('Terhapus', response.message || 'Data berhasil dihapus', 'success');
                                $('.dt-scrollableTable').DataTable().ajax.reload(null, false);
                            },
                            error: function() {
                                Swal.fire('Error', 'Gagal menghapus data.', 'error');
                            }
                        });
                    }
                });
            });
        });


    </script>
@endsection
