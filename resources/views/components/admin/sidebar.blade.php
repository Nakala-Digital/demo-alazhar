@props(['active' => 'dashboard'])

@php
    $menus = [
        ['label' => 'Dashboard', 'icon' => 'i-home', 'key' => 'dashboard', 'route' => 'admin.dashboard'],
        ['label' => 'Pendaftaran', 'icon' => 'i-file', 'key' => 'pendaftaran', 'route' => 'admin.dashboard'],
        ['label' => 'Verifikasi Berkas', 'icon' => 'i-checkfile', 'key' => 'verifikasi', 'route' => 'admin.verifikasi.index'],
        ['label' => 'Jadwal & Seleksi', 'icon' => 'i-calendar', 'key' => 'jadwal', 'route' => 'admin.dashboard'],
        ['label' => 'Hasil Seleksi', 'icon' => 'i-user', 'key' => 'hasil', 'route' => 'admin.dashboard'],
        ['label' => 'Pengumuman', 'icon' => 'i-megaphone', 'key' => 'pengumuman', 'route' => 'admin.dashboard'],
        ['label' => 'Laporan', 'icon' => 'i-chart', 'key' => 'laporan', 'route' => 'admin.dashboard'],
        ['label' => 'Pengaturan', 'icon' => 'i-settings', 'key' => 'pengaturan', 'route' => 'admin.dashboard'],
    ];

    $settings = [
        ['label' => 'Program & Kuota', 'icon' => 'i-briefcase', 'route' => '#'],
        ['label' => 'Pengguna', 'icon' => 'i-user', 'route' => '#'],
        ['label' => 'Role & Akses', 'icon' => 'i-role', 'route' => '#'],
        ['label' => 'Pengaturan Sistem', 'icon' => 'i-settings', 'route' => '#'],
    ];
@endphp

<aside class="admin-sidebar" id="admin-sidebar">
    <div class="admin-brand">
        <img src="{{ asset('images/logo-alazhar.png') }}" alt="Logo Al Azhar">
        <div><strong>Al Azhar</strong><span>Syifa Budi Parahyangan</span><small>PPDB Portal 2025/2026</small></div>
    </div>

    <nav class="admin-nav" aria-label="Navigasi admin">
        <p>Menu Utama</p>
        @foreach ($menus as $menu)
            <a href="{{ Route::has($menu['route']) ? route($menu['route']) : '#' }}" class="admin-nav-link {{ $active === $menu['key'] ? 'is-active' : '' }}">
                <svg><use href="#{{ $menu['icon'] }}"/></svg><span>{{ $menu['label'] }}</span>
            </a>
        @endforeach

        <p class="admin-nav-section">Pengaturan Sistem</p>
        @foreach ($settings as $setting)
            <a href="{{ $setting['route'] }}" class="admin-nav-link">
                <svg><use href="#{{ $setting['icon'] }}"/></svg><span>{{ $setting['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="admin-sidebar-user">
        <div class="admin-user-row">
            <span class="admin-avatar"><svg><use href="#i-user"/></svg></span>
            <span><strong>Panitia PPDB</strong><small>Super Admin</small></span>
            <svg class="admin-user-arrow"><use href="#i-chevron"/></svg>
        </div>
        <a href="{{ route('ppdb.logout') }}" class="admin-logout"><svg><use href="#i-logout"/></svg>Keluar</a>
    </div>
</aside>
