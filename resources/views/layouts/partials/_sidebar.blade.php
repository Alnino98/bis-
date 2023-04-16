    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="nav-item start {{ Route::currentRouteName() == "home" ? 'active open' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">E-Bistrip</h3>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == "admin.sppd.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.sppd.index') }}" class="nav-link">
                        <i class="icon-folder-alt"></i>
                        <span class="title">Pengajuan Proposal</span>
                    </a>
                </li>
<!-- 
                <li class="nav-item {{ Route::currentRouteName() == "admin.surat.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.surat.index') }}" class="nav-link">
                        <i class="icon-docs"></i>
                        <span class="title">Tracking Proposal</span>
                    </a>
                </li> -->
                <li class="nav-item {{ Route::currentRouteName() == "admin.surat.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.track.index') }}" class="nav-link">
                        <i class="icon-docs"></i>
                        <span class="title">Tracking Proposal</span>
                    </a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == "admin.pengeluaran.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.pengeluaran.index') }}" class="nav-link">
                        <i class="icon-basket"></i>
                        <span class="title">Pelaporan</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Reporting</h3>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.laporan.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.laporan.index') }}" class="nav-link">
                        <i class="icon-docs"></i>
                        <span class="title">Laporan Data Proposal</span>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.laporan.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.laporan.index') }}" class="nav-link">
                        <i class="icon-docs"></i>
                        <span class="title">Laporan Data Payrek</span>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.laporan.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.laporan.index') }}" class="nav-link">
                        <i class="icon-docs"></i>
                        <span class="title">Laporan Data Perjalanan</span>
                    </a>
                </li>
                
                <li class="heading">
                    <h3 class="uppercase">Data Master</h3>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.biaya.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.biaya.index') }}" class="nav-link">
                        <i class="icon-calculator"></i>
                        <span class="title">Biaya</span>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.pegawai.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.pegawai.index') }}" class="nav-link">
                        <i class="icon-users"></i>
                        <span class="title">Pegawai</span>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.anggaran.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.anggaran.index') }}" class="nav-link">
                        <i class="icon-wallet"></i>
                        <span class="title">Anggaran</span>
                    </a>
                </li>

                <li class="heading">
                    <h3 class="uppercase">StackHold</h3>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.biaya.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.biaya.index') }}" class="nav-link">
                        <i class="icon-calculator"></i>
                        <span class="title">Aproval</span>
                    </a>
                </li>

                <li class="heading">
                    <h3 class="uppercase">Option</h3>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.instansi.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.instansi.index') }}" class="nav-link">
                        <i class="icon-settings"></i>
                        <span class="title">Instansi</span>
                    </a>
                </li>

                <li class="heading">
                    <h3 class="uppercase">Administrasi</h3>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == "admin.permissions.index" ? 'active open' : '' }}">
                    <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                        <i class="icon-settings"></i>
                        <span class="title">tes</span>
                    </a>
                </li>
                
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>