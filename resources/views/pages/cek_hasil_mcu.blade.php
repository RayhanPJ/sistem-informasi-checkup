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
                            <span class="input-group-text">@</span>
                            <div class="form-floating form-floating-outline">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="namaLengkap"
                                    placeholder="John Doe"
                                    aria-label="Nama Lengkap"
                                    aria-describedby="basic-addon11" />
                                <label for="namaLengkap">Nama Lengkap</label>
                            </div>
                        </div>

                        <div class="input-group input-group-merge">
                            <span class="input-group-text">@</span>
                            <div class="form-floating form-floating-outline">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nik"
                                    placeholder="3201123456789012"
                                    aria-label="NIK"
                                    aria-describedby="basic-addon11" />
                                <label for="nik">NIK</label>
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
