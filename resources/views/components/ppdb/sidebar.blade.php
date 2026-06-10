@props(['active' => 'dashboard'])

@php
    $items = [
        ['key' => 'dashboard', 'label' => 'Dashboard', 'route' => 'ppdb.dashboard', 'icon' => 'heroicons:home'],
        ['key' => 'form', 'label' => 'Form Pendaftaran', 'route' => 'ppdb.form', 'icon' => 'heroicons:document-text'],
        ['key' => 'dokumen', 'label' => 'Dokumen', 'route' => 'ppdb.documents', 'icon' => 'heroicons:folder'],
        ['key' => 'status', 'label' => 'Status Pendaftaran', 'route' => 'ppdb.status', 'icon' => 'heroicons:clipboard-document-check'],
        ['key' => 'jadwal', 'label' => 'Jadwal', 'route' => 'ppdb.schedule', 'icon' => 'heroicons:calendar-days'],
        ['key' => 'pengumuman', 'label' => 'Pengumuman', 'route' => 'ppdb.announcements', 'icon' => 'heroicons:megaphone'],
        ['key' => 'pengaturan', 'label' => 'Pengaturan', 'route' => 'ppdb.settings', 'icon' => 'heroicons:cog-6-tooth'],
    ];
@endphp

<aside class="sidebar">
    <button type="button" class="sidebar-close" data-sidebar-toggle aria-label="Close Sidebar">
        <iconify-icon icon="heroicons:x-mark"></iconify-icon>
    </button>
    <div class="brand-block">
        <div class="brand-logo">
            <img src="{{ asset('assets/images/logo_al-azhar.png') }}" alt="Al Azhar Syifa Budi Parahyangan">
        </div>
        <div>
            <strong>Al Azhar Syifa Budi</strong>
            <span>Parahyangan</span>
        </div>
    </div>

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
            <iconify-icon icon="heroicons:arrow-left-on-rectangle"></iconify-icon>
            <span>Keluar</span>
        </a>
    </div>

    <div class="sidebar-message">
        <div class="sidebar-message-copy">
            <p>Bersama Al Azhar,</p>
            <strong>Membentuk Generasi</strong>
            <p>Cerdas, Berakhlak,</p>
            <p>dan Berprestasi.</p>
        </div>
        <div class="mosque-line" aria-hidden="true">
            <img src="{{ asset('assets/shiluate alazhar.png') }}" alt="Siluet Al Azhar">
        </div>
    </div>
</aside>
