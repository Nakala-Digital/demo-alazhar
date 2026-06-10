@php
    $user = session('ppdb_user', ['name' => 'Ahmad Fauzi']);
@endphp

<header class="topbar">
    <div class="portal-title"><span></span>PPDB Portal 2026/2027</div>
    <div class="topbar-meta">
        <div class="meta-item">
            <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
            <div><span>Butuh bantuan?</span><strong>0811-2233-4455</strong></div>
        </div>
        <div class="meta-item">
            <iconify-icon icon="solar:clock-circle-outline"></iconify-icon>
            <div><span>Jam Layanan</span><strong>08.00 - 16.00 WIB</strong></div>
        </div>
        <div class="profile-menu">
            <button class="profile-pill" type="button" data-profile-toggle aria-expanded="false" aria-haspopup="true">
                <div class="avatar">AA</div>
                <div><strong>{{ $user['name'] ?? 'Ahmad Fauzi' }}</strong><span>Orang Tua</span></div>
                <iconify-icon icon="solar:alt-arrow-down-linear"></iconify-icon>
            </button>
            <div class="profile-dropdown" data-profile-dropdown>
                <a href="{{ route('ppdb.settings') }}"><iconify-icon icon="heroicons:cog-6-tooth"></iconify-icon>Pengaturan</a>
                <a href="{{ route('ppdb.logout') }}"><iconify-icon icon="heroicons:arrow-left-on-rectangle"></iconify-icon>Keluar</a>
            </div>
        </div>
    </div>
</header>
