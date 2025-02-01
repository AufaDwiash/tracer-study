<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo"></span>
            <span class="app-brand-text demo menu-text fw-bold text-primary">Tracer Study</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is(auth()->user()->role . '/dashboard') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        @if(auth()->user()->role == 'alumni')
        <!-- Alumni Menus -->
        <li class="menu-item {{ Request::is(auth()->user()->role . '/alumni') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/alumni" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Data Pribadi">Data Pribadi</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/testimoni') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/testimoni" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message"></i>
                <div data-i18n="Testimoni">Testimoni</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/sekolah') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/sekolah" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="Sekolah">Profile Sekolah</div>
            </a>
        </li>
        @endif

        @if(auth()->user()->role == 'admin')
        <!-- Admin Menus -->
        <li class="menu-item {{ Request::is(auth()->user()->role . '/alumni') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/alumni" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Data Alumni">Data Alumni</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/bidang-keahlian') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/bidang-keahlian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase"></i>
                <div data-i18n="Bidang Keahlian">Bidang Keahlian</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/program-keahlian') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/program-keahlian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Program Keahlian">Program Keahlian</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/konsentrasi-keahlian') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/konsentrasi-keahlian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-target-lock"></i>
                <div data-i18n="Konsentrasi Keahlian">Konsentrasi Keahlian</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/sekolah') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/sekolah" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="Sekolah">Sekolah</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/tahun-lulus') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/tahun-lulus" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Tahun Lulus">Tahun Lulus</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/status-alumni') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/status-alumni" class="menu-link">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div data-i18n="Status Alumni">Status Alumni</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is(auth()->user()->role . '/testimoni') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/testimoni" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message"></i>
                <div data-i18n="Testimoni">Testimoni</div>
            </a>
        </li>
        @endif
       @if(auth()->user()->role == 'admin'||auth()->user()->id_status_alumni=='2')
        <li class="menu-item {{ Request::is(auth()->user()->role . '/tracerkerja') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/tracerkerja" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase-alt"></i>
                <div data-i18n="Tracer Kerja">Tracer Kerja</div>
            </a>
        </li>
       @endif 
        @if(auth()->user()->role == 'admin'||auth()->user()->id_status_alumni=='3')
        <li class="menu-item {{ Request::is(auth()->user()->role . '/tracerkuliah') ? 'active' : '' }}">
            <a href="/{{ auth()->user()->role }}/tracerkuliah" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div data-i18n="Tracer Kuliah">Tracer Kuliah</div>
            </a>
        </li>
        @endif 
    </ul>
</aside>