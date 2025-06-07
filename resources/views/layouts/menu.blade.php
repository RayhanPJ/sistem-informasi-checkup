<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item active">
                <a href="{{route('dashboard')}}" class="menu-link">
                    <i class="menu-icon menu-icon icon-base ri ri-home-smile-line"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon icon-base ri ri-home-gear-fill icon-26px text-heading"></i>
                    <div data-i18n="Master Data">Master Data</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="index" class="menu-link">
                            <i class="icon-base ri ri-user-line icon-26px text-heading"></i>
                            <div data-i18n="Users Admin">Users Admin</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index" class="menu-link" target="_blank">
                            <i class="menu-icon icon-base ri ri-layout-left-line"></i>
                            <div data-i18n="Status Hasil MCU">Status Hasil MCU</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index" class="menu-link">
                            <i class="menu-icon icon-base ri ri-account-circle-line"></i>
                            <div data-i18n="Provider">Provider</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Pages -->
            <li class="menu-item">
                <a href="index" class="menu-link">
                    <i class="menu-icon icon-base ri ri-save-3-line icon-26px text-heading"></i>
                    <div data-i18n="Log Pengecekan MCU">Log Pengecekan MCU</div>
                </a>
            </li>

        </ul>
    </div>
</aside>
