<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="background-color: green">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('logo/JSS2.png') }}" alt="" width="60%">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">JSS</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'data-kategori' ? 'active' : '' }}">
        <li class="menu-item">
            <a href="{{ route('admin.data-kategori.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Basic">Kategori</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'data-jenis-layanan' ? 'active' : '' }}">
        <li class="menu-item">
            <a href="{{ route('admin.data-jenis-layanan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Basic">Master Jenis Layanan</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'data-artikel' ? 'active' : '' }}">
        <li class="menu-item">
            <a href="{{ route('admin.data-artikel.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div data-i18n="Basic">Artikel</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'data-event' ? 'active' : '' }}">
        <li class="menu-item">
            <a href="{{ route('admin.data-event.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                {{-- <box-icon type='solid' name='calendar-event'></box-icon> --}}
                <div data-i18n="Basic">Event</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'data-layanan' ? 'active' : '' }}">
        <li class="menu-item">
            <a href="{{ route('admin.data-layanan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layer"></i>
                <div data-i18n="Basic">Layanan</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'data-profile' ? 'active' : '' }}">
        <li class="menu-item">
            <a href="{{ route('admin.data-profile.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layer"></i>
                <div data-i18n="Basic">Profile</div>
            </a>
        </li>
    </ul>
</aside>
