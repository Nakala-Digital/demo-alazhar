<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#062b68">
        <title>Dashboard Admin | PPDB Al Azhar</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <aside class="admin-sidebar" id="admin-sidebar">
                <div class="admin-brand">
                    <img src="{{ asset('images/logo-alazhar.png') }}" alt="Logo Al Azhar">
                    <div><strong>Al Azhar</strong><span>Syifa Budi Parahyangan</span><small>PPDB Portal 2025/2026</small></div>
                </div>

                <nav class="admin-nav" aria-label="Navigasi admin">
                    <p>Menu Utama</p>
                    @foreach ([
                        ['Dashboard', 'i-home', true],
                        ['Pendaftaran', 'i-file', false],
                        ['Verifikasi Berkas', 'i-checkfile', false],
                        ['Jadwal & Seleksi', 'i-calendar', false],
                        ['Hasil Seleksi', 'i-user', false],
                        ['Pengumuman', 'i-megaphone', false],
                        ['Laporan', 'i-chart', false],
                        ['Pengaturan', 'i-settings', false],
                    ] as [$label, $icon, $active])
                        <a href="#" class="admin-nav-link {{ $active ? 'is-active' : '' }}">
                            <svg><use href="#{{ $icon }}"/></svg><span>{{ $label }}</span>
                        </a>
                    @endforeach

                    <p class="admin-nav-section">Pengaturan Sistem</p>
                    @foreach ([
                        ['Program & Kuota', 'i-briefcase'],
                        ['Pengguna', 'i-user'],
                        ['Role & Akses', 'i-role'],
                        ['Pengaturan Sistem', 'i-settings'],
                    ] as [$label, $icon])
                        <a href="#" class="admin-nav-link">
                            <svg><use href="#{{ $icon }}"/></svg><span>{{ $label }}</span>
                        </a>
                    @endforeach
                </nav>

                <div class="admin-sidebar-user">
                    <div class="admin-user-row">
                        <span class="admin-avatar"><svg><use href="#i-user"/></svg></span>
                        <span><strong>Panitia PPDB</strong><small>Super Admin</small></span>
                        <svg class="admin-user-arrow"><use href="#i-chevron"/></svg>
                    </div>
                    <a href="{{ route('login') }}" class="admin-logout"><svg><use href="#i-logout"/></svg>Keluar</a>
                </div>
            </aside>

            <button type="button" class="admin-sidebar-backdrop" data-admin-sidebar-toggle aria-label="Tutup navigasi"></button>

            <div class="admin-main">
                <header class="admin-topbar">
                    <button type="button" class="admin-menu-button" data-admin-sidebar-toggle aria-label="Buka navigasi">
                        <svg><use href="#i-menu"/></svg>
                    </button>
                    <div class="admin-page-title">
                        <h1>Dashboard Admin</h1>
                        <p>Ringkasan kegiatan PPDB Tahun Ajaran 2025/2026</p>
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

                <main class="admin-content">
                    <section class="admin-summary-grid" aria-label="Ringkasan pendaftaran">
                        @foreach ($stats as $stat)
                            <article class="admin-summary-card admin-tone-{{ $stat['tone'] }}">
                                <div><span>{{ $stat['label'] }}</span><strong>{{ $stat['value'] }}</strong><small>{{ $stat['note'] }}</small></div>
                                <svg><use href="#{{ $stat['icon'] }}"/></svg>
                            </article>
                        @endforeach
                    </section>

                    <section class="admin-stat-grid">
                        <article class="admin-card admin-line-card">
                            <div class="admin-card-head">
                                <h2>Grafik Pendaftaran</h2>
                                <button type="button">7 Hari Terakhir <svg><path d="m8 10 4 4 4-4"/></svg></button>
                            </div>
                            <div class="admin-chart-legend">
                                <span><i class="blue"></i>Pendaftar</span>
                                <span><i class="green"></i>Terverifikasi</span>
                                <span><i class="red"></i>Ditolak</span>
                            </div>
                            <svg class="admin-line-chart" viewBox="0 0 620 270" role="img" aria-label="Grafik pendaftaran tujuh hari terakhir">
                                <g class="grid">
                                    <path d="M52 20H600M52 75H600M52 130H600M52 185H600M52 240H600"/>
                                    <path d="M52 20V240M143 20V240M234 20V240M325 20V240M416 20V240M507 20V240M600 20V240"/>
                                </g>
                                <g class="axis-labels">
                                    <text x="20" y="245">0</text><text x="10" y="190">100</text><text x="10" y="135">200</text><text x="10" y="80">300</text><text x="10" y="25">400</text>
                                    <text x="38" y="265">16 Mei</text><text x="129" y="265">17 Mei</text><text x="220" y="265">18 Mei</text><text x="311" y="265">19 Mei</text><text x="402" y="265">20 Mei</text><text x="493" y="265">21 Mei</text><text x="580" y="265">22 Mei</text>
                                </g>
                                <polyline class="line blue" points="52,150 143,118 234,102 325,94 416,68 507,82 600,62"/>
                                <polyline class="line green" points="52,197 143,173 234,166 325,148 416,124 507,140 600,116"/>
                                <polyline class="line red" points="52,233 143,225 234,219 325,220 416,219 507,217 600,210"/>
                                <g class="dots blue"><circle cx="52" cy="150" r="4"/><circle cx="143" cy="118" r="4"/><circle cx="234" cy="102" r="4"/><circle cx="325" cy="94" r="4"/><circle cx="416" cy="68" r="4"/><circle cx="507" cy="82" r="4"/><circle cx="600" cy="62" r="4"/></g>
                                <g class="dots green"><circle cx="52" cy="197" r="4"/><circle cx="143" cy="173" r="4"/><circle cx="234" cy="166" r="4"/><circle cx="325" cy="148" r="4"/><circle cx="416" cy="124" r="4"/><circle cx="507" cy="140" r="4"/><circle cx="600" cy="116" r="4"/></g>
                                <g class="dots red"><circle cx="52" cy="233" r="4"/><circle cx="143" cy="225" r="4"/><circle cx="234" cy="219" r="4"/><circle cx="325" cy="220" r="4"/><circle cx="416" cy="219" r="4"/><circle cx="507" cy="217" r="4"/><circle cx="600" cy="210" r="4"/></g>
                            </svg>
                        </article>

                        <article class="admin-card admin-donut-card">
                            <h2>Pendaftaran per Jenjang</h2>
                            <div class="admin-donut-body">
                                <div class="admin-donut admin-donut-level"><span><strong>1.248</strong><small>Total</small></span></div>
                                <div class="admin-donut-legend">
                                    @foreach ([['KB','120 (9,6%)','blue'],['TK A','240 (19,2%)','green'],['TK B','240 (19,2%)','orange'],['SD','420 (33,7%)','purple'],['SMP','228 (18,3%)','teal']] as [$label,$value,$tone])
                                        <div><i class="{{ $tone }}"></i><span><strong>{{ $label }}</strong><small>{{ $value }}</small></span></div>
                                    @endforeach
                                </div>
                            </div>
                        </article>

                        <article class="admin-card admin-donut-card">
                            <h2>Status Pendaftaran</h2>
                            <div class="admin-donut-body">
                                <div class="admin-donut admin-donut-status"><span><strong>1.248</strong><small>Total</small></span></div>
                                <div class="admin-donut-legend">
                                    @foreach ([['Terverifikasi','892 (71,5%)','green'],['Menunggu Verifikasi','256 (20,5%)','orange'],['Ditolak','100 (8%)','red']] as [$label,$value,$tone])
                                        <div><i class="{{ $tone }}"></i><span><strong>{{ $label }}</strong><small>{{ $value }}</small></span></div>
                                    @endforeach
                                </div>
                            </div>
                        </article>
                    </section>

                    <section class="admin-bottom-grid">
                        <article class="admin-card admin-table-card">
                            <h2>Pendaftaran Terbaru</h2>
                            <div class="admin-table-wrap">
                                <table>
                                    <thead><tr><th>No.</th><th>Nama Pendaftar</th><th>Jenjang</th><th>Tanggal Daftar</th><th>Status</th><th>Aksi</th></tr></thead>
                                    <tbody>
                                        @foreach ($registrations as $index => $reg)
                                            <tr>
                                                <td>{{ $index + 1 }}</td><td>{{ $reg['student_name'] }}</td><td>{{ $reg['level'] }}</td><td>{{ $reg['registered_at'] }}</td>
                                                <td><span class="admin-status {{ $reg['status_class'] }}">{{ $reg['status'] }}</span></td>
                                                <td><button type="button" class="admin-view"><svg><use href="#i-eye"/></svg></button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <a href="#" class="admin-card-link">Lihat semua pendaftar <span>→</span></a>
                        </article>

                        <article class="admin-card admin-activity-card">
                            <h2>Aktivitas Terbaru</h2>
                            <div class="admin-activity-list">
                                @foreach ($activities as $activity)
                                    <div class="admin-activity-item">
                                        <span class="admin-activity-icon {{ $activity['color'] }}"><svg><use href="#{{ $activity['icon'] }}"/></svg></span>
                                        <p>{{ $activity['message'] }} <small>{{ $activity['sub_message'] }}</small></p><time>{{ $activity['time'] }}</time>
                                    </div>
                                @endforeach
                            </div>
                            <a href="#" class="admin-card-link">Lihat semua aktivitas <span>→</span></a>
                        </article>

                        <article class="admin-card admin-announcement-card">
                            <div class="admin-card-head">
                                <h2><svg><use href="#i-megaphone"/></svg>Pengumuman Penting</h2>
                                <button type="button" class="admin-create-button"><svg><use href="#i-plus"/></svg>Buat Pengumuman</button>
                            </div>
                            <div class="admin-announcement-list">
                                @foreach ($announcements as $announcement)
                                    <div class="admin-announcement {{ $announcement['color'] }}">
                                        <svg><use href="#i-megaphone"/></svg>
                                        <div><strong>{{ $announcement['title'] }}</strong><p>{{ $announcement['description'] }}</p><small>{{ $announcement['date'] }}</small></div>
                                    </div>
                                @endforeach
                            </div>
                            <a href="#" class="admin-card-link">Lihat semua pengumuman <span>→</span></a>
                        </article>
                    </section>
                </main>

                <footer class="admin-footer">© 2025 Al Azhar Syifa Budi Parahyangan. All rights reserved.</footer>
            </div>
        </div>
    </body>
</html>
