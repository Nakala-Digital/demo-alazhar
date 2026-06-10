@props(['active' => 'dashboard'])

@php
    $items = [
        ['key' => 'dashboard', 'label' => 'Dashboard', 'route' => 'ppdb.dashboard', 'icon' => 'la:home'],
        ['key' => 'form', 'label' => 'Form Pendaftaran', 'route' => 'ppdb.form', 'icon' => 'mi:document'],
        ['key' => 'dokumen', 'label' => 'Dokumen', 'route' => 'ppdb.documents', 'icon' => 'iconoir:folder'],
        ['key' => 'status', 'label' => 'Status Pendaftaran', 'route' => 'ppdb.status', 'icon' => 'carbon:report'],
        ['key' => 'jadwal', 'label' => 'Jadwal', 'route' => 'ppdb.schedule', 'icon' => 'uiw:date'],
        ['key' => 'pengumuman', 'label' => 'Pengumuman', 'route' => 'ppdb.announcements', 'icon' => 'mdi:announcement-outline'],
        ['key' => 'pengaturan', 'label' => 'Pengaturan', 'route' => 'ppdb.settings', 'icon' => 'ep:setting'],
    ];
@endphp

<aside class="sidebar">
    <div class="brand-block">
        <div class="brand-logo">
            <img src="{{ asset('assets/status-pendaptaran/logo.png') }}" alt="Al Azhar Syifa Budi Parahyangan">
        </div>
        <div>
            <strong>Al Azhar Syifa Budi</strong>
            <span>Parahyangan</span>
        </div>
    </div>

    <a href="{{ route('ppdb.status') }}" class="status-nav-feature {{ $active === 'status' ? 'is-active' : '' }}">
        <strong>06</strong>
        <span>Status Pendaftaran<br>Tracking Status</span>
    </a>

    <nav class="side-nav" aria-label="Navigasi PPDB">
        @foreach ($items as $item)
            <a href="{{ route($item['route']) }}" class="nav-link {{ $active === $item['key'] ? 'is-active' : '' }}">
                <iconify-icon icon="{{ $item['icon'] }}"></iconify-icon>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="logout-wrap">
        <a href="{{ route('ppdb.logout') }}" class="nav-link {{ $active === 'logout' ? 'is-active' : '' }}">
            <iconify-icon icon="line-md:log-out"></iconify-icon>
            <span>Keluar</span>
        </a>
    </div>

    <div class="sidebar-message">
        <p>Bersama Al Azhar,</p>
        <strong>Membentuk Generasi</strong>
        <p>Cerdas, Berakhlak,</p>
        <p>dan Berprestasi.</p>
        <div class="mosque-line" aria-hidden="true">
            <img src="{{ asset('assets/shiluate alazhar.png') }}" alt="Siluet Al Azhar">
        </div>
    </div>
</aside>
