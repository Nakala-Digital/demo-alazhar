@php
    $pageTitle = $pageTitle ?? $title ?? 'PPDB Portal 2026/2027';
    $pageDescription = $pageDescription ?? null;
    $active = $active ?? 'dashboard';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }} - Al Azhar Syifa Budi Parahyangan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
</head>
<body class="{{ $bodyClass ?? '' }}">
    <div class="app-shell">
        <div class="sidebar-backdrop" data-sidebar-toggle></div>
        <x-ppdb.sidebar :active="$active" />

        <div class="main-shell">
            <x-ppdb.topbar />
            <main class="main-content fin-main-content" data-main-content>
                <div class="main-inner fin-main-inner">
                    <div class="page-header">
                        <div>
                            <p>PPDB Portal 2026/2027</p>
                            <h1>{{ $pageTitle }}</h1>
                            @if ($pageDescription)
                                <span>{{ $pageDescription }}</span>
                            @endif
                        </div>
                        @if ($showBreadcrumb ?? false)
                            <nav aria-label="Breadcrumb">
                                <a href="{{ route('ppdb.dashboard') }}">Dashboard</a>
                                <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                                <strong>{{ $pageTitle }}</strong>
                            </nav>
                        @endif
                    </div>

                    @yield('content')
                </div>
            </main>
            <x-ppdb.footer />
        </div>
    </div>
</body>
</html>
