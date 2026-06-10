@extends('layouts.admin', ['active' => 'dashboard', 'pageTitle' => 'Dashboard Admin', 'pageDesc' => 'Ringkasan kegiatan PPDB Tahun Ajaran 2025/2026'])

@section('content')
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
@endsection
