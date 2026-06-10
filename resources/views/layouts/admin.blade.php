<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#062b68">
        <title>{{ $title ?? 'Admin' }} | PPDB Al Azhar</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </head>
    <body class="admin-page">
        <svg class="admin-svg-defs" aria-hidden="true">
            <symbol id="i-menu" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></symbol>
            <symbol id="i-home" viewBox="0 0 24 24"><path d="m3 11 9-7 9 7v9H3zM9 20v-6h6v6"/></symbol>
            <symbol id="i-file" viewBox="0 0 24 24"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 7h6M9 11h6M9 15h4"/></symbol>
            <symbol id="i-checkfile" viewBox="0 0 24 24"><path d="M8 4h8l3 3v14H5V4h3"/><path d="M9 3h6v4H9zM8 14l2.5 2.5L16 11"/></symbol>
            <symbol id="i-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M7 3v4M17 3v4M3 10h18M8 14h.01M12 14h.01M16 14h.01"/></symbol>
            <symbol id="i-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></symbol>
            <symbol id="i-users" viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2"/><path d="M3 20v-2a5 5 0 0 1 10 0v2M14 14a4 4 0 0 1 7 3v2"/></symbol>
            <symbol id="i-megaphone" viewBox="0 0 24 24"><path d="m4 13 12-6v10L4 13ZM16 9l4-2v10l-4-2M6 14l2 6h4l-2-5"/></symbol>
            <symbol id="i-chart" viewBox="0 0 24 24"><path d="M4 20V10h4v10M10 20V4h4v16M16 20v-7h4v7"/></symbol>
            <symbol id="i-settings" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19 13.5v-3l-2-.7-.7-1.7.9-1.9-2.1-2.1-1.9.9-1.7-.7L10.5 2h-3l-.7 2.3-1.7.7-1.9-.9-2.1 2.1.9 1.9-.7 1.7-2 .7v3l2 .7.7 1.7-.9 1.9 2.1 2.1 1.9-.9 1.7.7.7 2.3h3l.7-2.3 1.7-.7 1.9.9 2.1-2.1-.9-1.9.7-1.7z"/></symbol>
            <symbol id="i-briefcase" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V4h8v3M3 12h18M10 11v3h4v-3"/></symbol>
            <symbol id="i-role" viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><path d="M3 20v-2a5 5 0 0 1 10 0v2M16 8h5M18.5 5.5v5M15 15h6"/></symbol>
            <symbol id="i-logout" viewBox="0 0 24 24"><path d="M10 5H4v14h6M14 8l4 4-4 4M8 12h10"/></symbol>
            <symbol id="i-bell" viewBox="0 0 24 24"><path d="M6 17h12l-1.5-2v-4a4.5 4.5 0 0 0-9 0v4zM10 20h4"/></symbol>
            <symbol id="i-help" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9.8 9a2.4 2.4 0 1 1 3.8 2c-1 .7-1.6 1.2-1.6 2.5M12 17h.01"/></symbol>
            <symbol id="i-chevron" viewBox="0 0 24 24"><path d="m9 6 6 6-6 6"/></symbol>
            <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
            <symbol id="i-x" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m9 9 6 6M15 9l-6 6"/></symbol>
            <symbol id="i-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0zM8 6H4v2a4 4 0 0 0 4 4M16 6h4v2a4 4 0 0 1-4 4M12 13v5M8 21h8M9 18h6"/></symbol>
            <symbol id="i-eye" viewBox="0 0 24 24"><path d="M3 12s3.5-6 9-6 9 6 9 6-3.5 6-9 6-9-6-9-6Z"/><circle cx="12" cy="12" r="2.5"/></symbol>
            <symbol id="i-cloud" viewBox="0 0 24 24"><path d="M7 18h10a4 4 0 0 0 .7-7.9A6 6 0 0 0 6.3 9 4.5 4.5 0 0 0 7 18Z"/></symbol>
            <symbol id="i-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8 12 2.5 2.5L16 9"/></symbol>
            <symbol id="i-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
        </svg>

        <div class="admin-layout">
            <x-admin.sidebar :active="$active ?? 'dashboard'" />

            <button type="button" class="admin-sidebar-backdrop" data-admin-sidebar-toggle aria-label="Tutup navigasi"></button>

            <div class="admin-main">
                <x-admin.topbar :title="$pageTitle ?? 'Dashboard Admin'" :desc="$pageDesc ?? ''" />

                <main class="admin-content">
                    @yield('content')
                </main>

                <footer class="admin-footer">© 2025 Al Azhar Syifa Budi Parahyangan. All rights reserved.</footer>
            </div>
        </div>
    </body>
</html>
