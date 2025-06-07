<nav class="layout-navbar navbar navbar-expand-xl align-items-center" id="layout-navbar">
    <div class="container-xxl">
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

        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="icon-base ri ri-menu-line icon-22px"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!-- Style Switcher -->
                <li class="nav-item dropdown me-sm-2 me-xl-0">
                    <a
                        class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                        id="nav-theme"
                        href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <i class="icon-base ri ri-sun-line icon-22px theme-icon-active"></i>
                        <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                        <li>
                            <button
                                type="button"
                                class="dropdown-item align-items-center active"
                                data-bs-theme-value="light"
                                aria-pressed="false">
                                <span><i class="icon-base ri ri-sun-line icon-22px me-3" data-icon="sun-line"></i>Light</span>
                            </button>
                        </li>
                        <li>
                            <button
                                type="button"
                                class="dropdown-item align-items-center"
                                data-bs-theme-value="dark"
                                aria-pressed="true">
                        <span
                        ><i class="icon-base ri ri-moon-clear-line icon-22px me-3" data-icon="moon-clear-line"></i
                            >Dark</span
                        >
                            </button>
                        </li>
                        <li>
                            <button
                                type="button"
                                class="dropdown-item align-items-center"
                                data-bs-theme-value="system"
                                aria-pressed="false">
                        <span
                        ><i class="icon-base ri ri-computer-line icon-22px me-3" data-icon="computer-line"></i
                            >System</span
                        >
                            </button>
                        </li>
                    </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{asset('assets/img/avatars/1.png')}}" alt="avatar" class="rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar avatar-online">
                                            <img
                                                src="{{asset('assets/img/avatars/1.png')}}"
                                                alt="alt"
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0 small">John Doe</h6>
                                        <small class="text-body-secondary">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-profile-user.html">
                                <i class="icon-base ri ri-user-3-line icon-22px me-3"></i
                                ><span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="icon-base ri ri-settings-4-line icon-22px me-3"></i
                                ><span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 icon-base ri ri-file-text-line icon-22px me-3"></i>
                          <span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger">4</span>
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="icon-base ri ri-money-dollar-circle-line icon-22px me-3"></i
                                ><span class="align-middle">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="icon-base ri ri-question-line icon-22px me-3"></i
                                ><span class="align-middle">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <div class="d-grid px-4 pt-2 pb-1">
                                <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                                    <small class="align-middle">Logout</small>
                                    <i class="icon-base ri ri-logout-box-r-line ms-2 icon-16px"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </div>
</nav>
