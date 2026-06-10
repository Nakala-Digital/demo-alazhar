@props(['title', 'desc'])

<header class="admin-topbar">
    <button type="button" class="admin-menu-button" data-admin-sidebar-toggle aria-label="Buka navigasi">
        <svg><use href="#i-menu"/></svg>
    </button>
    <div class="admin-page-title">
        <h1>{{ $title }}</h1>
        @if($desc)
            <p>{{ $desc }}</p>
        @endif
    </div>
    <div class="admin-top-actions">
        <button type="button" class="admin-year">
            <svg><use href="#i-calendar"/></svg>
            <span><small>Tahun Ajaran</small><strong>2025/2026</strong></span>
            <svg><path d="m8 10 4 4 4-4"/></svg>
        </button>
        <button type="button" class="admin-icon-button" aria-label="Notifikasi">
            <svg><use href="#i-bell"/></svg><b>5</b>
        </button>
        <button type="button" class="admin-icon-button" aria-label="Bantuan">
            <svg><use href="#i-help"/></svg>
        </button>
        <div class="admin-top-user">
            <span class="admin-avatar"><svg><use href="#i-user"/></svg></span>
            <span><strong>Panitia PPDB</strong><small>Super Admin</small></span>
            <svg><path d="m8 10 4 4 4-4"/></svg>
        </div>
    </div>
</header>
