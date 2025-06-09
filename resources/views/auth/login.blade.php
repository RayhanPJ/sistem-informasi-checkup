@extends('template.auth')

@section('content')
    <div class="authentication-inner py-6">
        <!-- Login -->
        <div class="card p-md-7 p-1">
            <!-- Logo -->
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-6">
                <a href="{{url('/')}}" class="app-brand-link">
                    <img src="{{asset('assets/img/branding/brand.svg')}}" alt="brand.svg">
                    <div>
                        <span class="app-brand-text demo menu-text fw-semibold">Klinik & Lab Yuliarpan Medika</span>
                        <br>
                        <span class="menu-text fw-normal">Sistem Informasi Hasil Medical Check Up</span>
                    </div>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                    <i class="icon-base ri ri-close-line icon-sm"></i>
                </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-1">
                <h4 class="mb-1">Welcome to Klinik & Lab Yuliarpan Medika! 👋</h4>
                <p class="mb-5">Please sign-in to your Admin Account</p>

                <form id="formAuthentication" method="POST">
                    @csrf
                    <div class="form-floating form-floating-outline mb-5 form-control-validation">
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            placeholder="Enter your email or username"
                            autofocus/>
                        <label for="username">Email or Username</label>
                    </div>
                    <div class="mb-5">
                        <div class="form-password-toggle form-control-validation">
                            <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"/>
                                    <label for="password">Password</label>
                                </div>
                                <span class="input-group-text cursor-pointer">
                                    <i class="icon-base ri ri-eye-off-line icon-20px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </div>
                </form>

            </div>
        </div>
        <!-- /Login -->
        <img
            alt="mask"
            src="{{asset('assets/img/illustrations/auth-basic-login-mask-light.png')}}"
            class="authentication-image d-none d-lg-block"
            data-app-light-img="illustrations/auth-basic-login-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-login-mask-dark.png"/>
    </div>
@endsection
