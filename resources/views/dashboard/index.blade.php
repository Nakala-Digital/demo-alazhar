@extends('layouts.ppdb')

@section('content')
    @php
        $user = session('ppdb_user', ['name' => 'Ahmad Fauzi']);
        $steps = [
            ['label' => 'Akun', 'status' => 'Selesai'],
            ['label' => 'Data Siswa', 'status' => 'Selesai'],
            ['label' => 'Data Orang Tua', 'status' => 'Selesai'],
            ['label' => 'Alamat', 'status' => 'Dalam Pengisian'],
            ['label' => 'Riwayat Sekolah', 'status' => 'Belum'],
            ['label' => 'Upload Dokumen', 'status' => 'Belum'],
            ['label' => 'Review', 'status' => 'Belum'],
            ['label' => 'Selesai', 'status' => 'Belum'],
        ];
        $nextSteps = [
            ['title' => 'Lengkapi Data Siswa', 'desc' => 'Informasi pribadi dan data akademik siswa', 'status' => 'Selesai', 'tone' => 'success'],
            ['title' => 'Upload Akta Kelahiran', 'desc' => 'Unggah akta kelahiran siswa', 'status' => 'Selesai', 'tone' => 'success'],
            ['title' => 'Upload Kartu Keluarga', 'desc' => 'Unggah kartu keluarga terbaru', 'status' => 'Dalam Review', 'tone' => 'warning'],
            ['title' => 'Pilih Jenjang & Unit', 'desc' => 'Pilih jenjang dan unit sekolah tujuan', 'status' => 'Dalam Pengisian', 'tone' => 'info'],
            ['title' => 'Konfirmasi Data', 'desc' => 'Periksa kembali dan konfirmasi data pendaftaran', 'status' => 'Belum', 'tone' => 'muted'],
        ];
        $announcements = [
            ['icon' => 'heroicons:bell', 'tone' => 'green', 'title' => 'Verifikasi dokumen sedang berlangsung', 'desc' => 'Dokumen Anda sedang kami verifikasi.', 'time' => '22 Mei 2025, 11:20'],
            ['icon' => 'heroicons:calendar-days', 'tone' => 'yellow', 'title' => 'Pengumuman jadwal seleksi', 'desc' => 'Jadwal tes akan diumumkan pada 30 Mei 2025.', 'time' => '20 Mei 2025, 09:00'],
            ['icon' => 'heroicons:information-circle', 'tone' => 'blue', 'title' => 'Panduan pengisian formulir', 'desc' => 'Pastikan semua data diisi dengan benar.', 'time' => '16 Mei 2025, 16:45'],
        ];
    @endphp

    <section class="dashboard-welcome">
        <div class="welcome-visual">
            <img src="{{ asset('assets/images/logo_al-azhar.png') }}" alt="Al Azhar Syifa Budi Parahyangan">
        </div>
        <div class="welcome-message">
            <h2>Selamat datang kembali, {{ $user['name'] ?? 'Ahmad Fauzi' }} <span class="welcome-clap">👏</span></h2>
            <strong>Lanjutkan proses pendaftaran PPDB Al Azhar Syifa Budi Parahyangan</strong>
            <p>Pastikan semua data terisi dengan benar dan dokumen telah diunggah.</p>
        </div>
        <div class="child-picker-panel">
            <span>Pilih Anak / Calon Siswa</span>
            <div class="child-picker-row">
                <button class="child-picker" type="button">
                    <span class="child-avatar"><iconify-icon icon="fluent-emoji:girl"></iconify-icon></span>
                    <span><strong>Anak 1 - Aisyah Putri</strong><small>Calon Siswa SD</small></span>
                    <iconify-icon icon="heroicons:chevron-down"></iconify-icon>
                </button>
                <button class="add-child" type="button"><iconify-icon icon="heroicons:plus"></iconify-icon>Tambah Anak</button>
            </div>
        </div>
    </section>

    <section class="dashboard-stepper">
        @foreach ($steps as $index => $step)
            @php
                $number = $index + 1;
                $state = $number < 4 ? 'done' : ($number === 4 ? 'current' : 'pending');
            @endphp
            <div class="dashboard-step {{ $state }}">
                <div class="dashboard-step-line"></div>
                <span>@if ($state === 'done') &#10003; @else {{ $number }} @endif</span>
                <strong>{{ $step['label'] }}</strong>
                <small>{{ $step['status'] }}</small>
            </div>
        @endforeach
    </section>

    <div class="dashboard-layout">
        <div class="dashboard-main-column">
            <section class="summary-grid">
                <article class="summary-card status">
                    <div><span>Status Pendaftaran</span><strong>Dalam Pengisian</strong></div>
                    <p>Terakhir diperbarui:<br>22 Mei 2025, 14:30 WIB</p>
                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                </article>
                <article class="summary-card document">
                    <div><span>Dokumen</span><strong>4 / 7 terunggah</strong></div>
                    <div class="summary-progress"><i></i></div>
                    <a href="{{ route('ppdb.documents') }}">Lihat detail dokumen <iconify-icon icon="heroicons:arrow-right"></iconify-icon></a>
                    <iconify-icon icon="heroicons:folder"></iconify-icon>
                </article>
                <article class="summary-card schedule">
                    <div><span>Jadwal Tes / Seleksi</span><strong>Belum tersedia</strong></div>
                    <p>Jadwal akan diumumkan setelah verifikasi dokumen selesai.</p>
                    <iconify-icon icon="heroicons:calendar-days"></iconify-icon>
                </article>
                <article class="summary-card deadline">
                    <div><span>Batas Waktu Pendaftaran</span><strong>23 hari lagi</strong></div>
                    <p>Batas akhir pendaftaran:<br>15 Juni 2025</p>
                    <iconify-icon icon="heroicons:clock"></iconify-icon>
                </article>
            </section>

            <div class="dashboard-bottom-grid">
                <section class="dashboard-card next-actions-card">
                    <header><h3>Langkah Selanjutnya</h3></header>
                    <div class="next-step-list">
                        @foreach ($nextSteps as $index => $step)
                            <a href="{{ $index < 2 ? route('ppdb.form') : route('ppdb.documents') }}" class="next-step-row">
                                <span class="next-check {{ $index < 2 ? 'done' : '' }}">@if ($index < 2) &#10003; @endif</span>
                                <strong>{{ $index + 1 }}</strong>
                                <span><b>{{ $step['title'] }}</b><small>{{ $step['desc'] }}</small></span>
                                <em class="{{ $step['tone'] }}">{{ $step['status'] }}</em>
                                <iconify-icon icon="heroicons:chevron-right"></iconify-icon>
                            </a>
                        @endforeach
                    </div>
                    <a href="{{ route('ppdb.status') }}" class="full-width-action">Lihat Semua Langkah <iconify-icon icon="heroicons:arrow-right"></iconify-icon></a>
                </section>

                <section class="dashboard-card announcements-card">
                    <header>
                        <h3><iconify-icon icon="heroicons:megaphone"></iconify-icon>Pengumuman Terbaru</h3>
                        <a href="{{ route('ppdb.announcements') }}">Lihat Semua</a>
                    </header>
                    <div class="announcement-list">
                        @foreach ($announcements as $item)
                            <article class="announcement-item {{ $item['tone'] }}">
                                <span><iconify-icon icon="{{ $item['icon'] }}"></iconify-icon></span>
                                <div>
                                    <strong>{{ $item['title'] }}</strong>
                                    <p>{{ $item['desc'] }}</p>
                                    <time>{{ $item['time'] }}</time>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>

        <aside class="dashboard-side-column">
            <section class="info-card dashboard-info-card">
                <h3><iconify-icon icon="solar:book-2-outline"></iconify-icon>Informasi Pendaftaran</h3>
                <dl>
                    <div><dt>Jenjang / Unit Tujuan</dt><dd>SD Al Azhar Syifa Budi Parahyangan</dd></div>
                    <div><dt>Gelombang</dt><dd>Gelombang 1</dd></div>
                    <div><dt>Jalur Pendaftaran</dt><dd>Regular</dd></div>
                    <div><dt>Tahun Ajaran</dt><dd>2026/2027</dd></div>
                </dl>
                <button><iconify-icon icon="solar:pen-new-square-outline"></iconify-icon>Ubah Pilihan</button>
            </section>

            <section class="dashboard-card quick-actions-card">
                <h3><iconify-icon icon="heroicons:bolt"></iconify-icon>Aksi Cepat</h3>
                <a class="primary" href="{{ route('ppdb.form') }}">Lanjutkan Form Pendaftaran <iconify-icon icon="heroicons:chevron-right"></iconify-icon></a>
                <a class="success" href="{{ route('ppdb.documents') }}"><iconify-icon icon="heroicons:arrow-up-tray"></iconify-icon>Upload Dokumen</a>
                <a href="{{ route('ppdb.schedule') }}"><iconify-icon icon="heroicons:calendar-days"></iconify-icon>Cek Jadwal Seleksi</a>
            </section>

            <section class="dashboard-card agenda-card">
                <header>
                    <h3><iconify-icon icon="heroicons:calendar-days"></iconify-icon>Agenda Mendatang</h3>
                    <a href="{{ route('ppdb.schedule') }}">Lihat Kalender</a>
                </header>
                <div class="empty-agenda">
                    <iconify-icon icon="heroicons:calendar"></iconify-icon>
                    <div><strong>Belum ada agenda</strong><p>Jadwal akan muncul setelah verifikasi dokumen selesai.</p></div>
                </div>
            </section>
        </aside>
    </div>
@endsection
