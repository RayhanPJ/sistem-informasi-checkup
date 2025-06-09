@extends('template.app')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">Cek Hasil Medical Check Up</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="icon-base ri ri-user-line text-heading"></i></span>
                            <div class="form-floating form-floating-outline">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="namaLengkap"
                                    placeholder="John Doe"
                                    aria-label="Nama Lengkap Anda"
                                    aria-describedby="basic-addon11" />
                                <label for="namaLengkap">Nama Lengkap</label>
                            </div>
                        </div>

                        <div class="input-group input-group-merge">
                            <span class="input-group-text">NIK</span>
                            <div class="form-floating form-floating-outline">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nik"
                                    placeholder="3201123456789012"
                                    aria-label="Masukan NIK Anda"
                                    aria-describedby="basic-addon11" />
                                <label for="nik">NIK</label>
                            </div>
                        </div>
                        <button
                            type="button"
                            class="btn btn-primary d-flex align-items-center gap-2 w-100"
                            id="btnShowMedical"
                            data-bs-toggle="modal"
                            data-bs-target="#medicalModal"
                        >Show Medical Check Up Result</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="modal fade" id="medicalModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content shadow-sm">
                <div class="modal-header flex-column align-items-center">
                    <h5 class="modal-title fw-semibold text-dark" id="modalTitle">
                        Hasil Medical Check Up
                    </h5>
                    <small class="fst-italic text-secondary">Medical Check Up Results</small>
                </div>
                <div class="modal-body">
                    <div class="row text-secondary text-sm">
                        <!-- Kolom-kolom data hasil MCU akan diisi secara dinamis -->
                        <div class="col-12 col-sm-6 mb-4" id="mcu_id_mcu">
                            <p class="label-text mb-1">Nomor ID MCU:</p>
                            <p class="fw-bold text-dark fs-5 mb-0"></p>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_nama_pasien">
                            <p class="label-text mb-1">Nama Lengkap:</p>
                            <p class="fw-bold text-dark fs-5 mb-0"></p>
                            <small class="fst-italic text-secondary"></small>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_tempat_tanggal_lahir">
                            <p class="label-text mb-1">Tempat, Tanggal Lahir:</p>
                            <p class="fw-bold text-dark mb-0"></p>
                            <p class="fst-italic"></p>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_nik">
                            <p class="label-text mb-1">NIK:</p>
                            <p class="fw-bold text-dark mb-0"></p>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_jenis_kelamin">
                            <p class="label-text mb-1">Jenis Kelamin:</p>
                            <p class="fw-bold text-dark mb-0"></p>
                            <p class="fst-italic"></p>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_alamat">
                            <p class="label-text mb-1">Alamat:</p>
                            <p class="fw-bold text-dark mb-0"></p>
                            <p class="fst-italic"></p>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_pekerjaan">
                            <p class="label-text mb-1">Bagian:</p>
                            <p class="fw-bold text-dark mb-0"></p>
                            <p class="fst-italic"></p>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center mb-4" id="mcu_provider">
                            <div>
                                <p class="label-text mb-1">Provider:</p>
                                <p class="fw-bold text-dark mb-0 d-inline-block"></p>
                            </div>
                            <span class="red-dot"></span>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_tanggal_mcu">
                            <p class="label-text mb-1">Tanggal MCU:</p>
                            <p class="text-dark mb-0"></p>
                        </div>
                        <div class="col-12 col-sm-6 mb-4" id="mcu_status_mcu">
                            <p class="label-text mb-1">Status Hasil MCU:</p>
                            <p class="status-fit mb-0"></p>
                        </div>
                    </div>

                    <hr />

                    <div>
                        <p class="fw-semibold text-dark fs-6 mb-1">
                            Hasil Medical Check Up ini berlaku sampai tanggal:
                        </p>
                        <p class="fst-italic text-secondary mb-1">
                            The results of this Medical Check Up are valid until:
                        </p>
                        <p class="fw-bold text-dark fs-5 mb-0" id="mcu_berlaku_sampai"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" target="_blank" id="download_hasil_mcu" type="button" class="btn btn-success d-flex align-items-center gap-2 w-100">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="bi bi-download"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                            focusable="false"
                        >
                            <path d="M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="4" />
                        </svg>
                        Download Hasil MCU
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#btnShowMedical').click(function () {
                // Ambil nilai input nama lengkap dan nik
                let namaLengkap = $('#namaLengkap').val().trim();
                let nik = $('#nik').val().trim();

                if (namaLengkap === '' && nik === '') {
                    Swal.fire('Notice', 'Silakan masukkan Nama Lengkap atau NIK untuk pencarian!', 'warning');
                    $('#medicalModal').modal('hide');
                    return;
                }

                // Lakukan AJAX request ke route/filter MCU Anda yang menerima parameter nama & nik
                $.ajax({
                    url: '{{ route("filter") }}', // Pastikan route ini sesuai di backend Anda
                    type: 'GET',
                    data: {
                        nama_pasien: namaLengkap,
                        nik: nik,
                    },
                    success: function (response) {
                        if (!response || Object.keys(response).length === 0) {
                            Swal.fire('Info', 'Data tidak ditemukan untuk kriteria tersebut.', 'info');
                            $('#medicalModal').modal('hide');
                            return;
                        }

                        // Isi konten modal dengan data yang diterima
                        $('#mcu_id_mcu p.fw-bold').text(response.id_mcu ?? '-');
                        $('#mcu_nama_pasien p.fw-bold').text(response.nama_pasien ?? '-');
                        $('#mcu_nama_pasien small').text(response.nama_pasien ?? '-');
                        $('#mcu_tempat_tanggal_lahir p.fw-bold').text(`${response.tempat_lahir ?? '-'}, ${response.tanggal_lahir ?? '-'}`);
                        $('#mcu_tempat_tanggal_lahir p.fst-italic').text(new Date(response.tanggal_lahir).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' }) ?? '-');
                        $('#mcu_nik p.fw-bold').text(response.nik ?? '-');
                        $('#mcu_jenis_kelamin p.fw-bold').text(response.jenis_kelamin ?? '-');
                        $('#mcu_jenis_kelamin p.fst-italic').text(response.jenis_kelamin === 'L' || response.jenis_kelamin.toLowerCase() === 'laki-laki' ? 'Male' : 'Female');
                        $('#mcu_alamat p.fw-bold').text(response.alamat ?? '-');
                        $('#mcu_alamat p.fst-italic').text(response.alamat ?? '-');
                        $('#mcu_pekerjaan p.fw-bold').text(response.pekerjaan ?? '-');
                        $('#mcu_pekerjaan p.fst-italic').text(response.pekerjaan ?? '-');
                        $('#mcu_provider p.fw-bold').text(response.provider ?? '-');
                        $('#mcu_tanggal_mcu p.text-dark').text(new Date(response.tanggal_mcu).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' }) ?? '-');
                        $('#mcu_status_mcu p.status-fit').text(response.status_mcu ?? '-');
                        $('#mcu_berlaku_sampai').text(new Date(response.tanggal_mcu).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' }) ?? '-');
                        $('#download_hasil_mcu').attr('href', response.link_hasil_mcu ?? '#');

                        // Tampilkan modal (jika sebelumnya di-hide)
                        $('#medicalModal').modal('show');
                    },
                    error: function () {
                        Swal.fire('Error', 'Gagal mengambil data Medical Check Up.', 'error');
                        $('#medicalModal').modal('hide');
                    }
                });
            });
        });

    </script>
@endsection
