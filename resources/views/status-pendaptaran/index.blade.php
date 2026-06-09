@extends('layouts.ppdb')

@section('content')
    @php
        $steps = [
            ['label' => 'Akun Dibuat', 'state' => 'done', 'status' => 'Selesai'],
            ['label' => 'Form Lengkap', 'state' => 'done', 'status' => 'Selesai'],
            ['label' => 'Dokumen Diupload', 'state' => 'done', 'status' => 'Selesai'],
            ['label' => 'Verifikasi Berkas', 'state' => 'current', 'status' => 'Sedang Berlangsung'],
            ['label' => 'Jadwal Seleksi', 'state' => 'pending', 'status' => 'Belum'],
            ['label' => 'Hasil Seleksi', 'state' => 'pending', 'status' => 'Belum'],
            ['label' => 'Daftar Ulang / Selesai', 'state' => 'pending', 'status' => 'Belum'],
        ];

        $activities = [
            ['time' => '22 Mei 2026, 09:15', 'title' => 'Dokumen rapor sedang direview', 'desc' => 'Tim PPDB sedang meninjau dokumen rapor semester terakhir.', 'tone' => 'blue', 'badge' => 'Terbaru', 'icon' => 'solar:document-text-outline'],
            ['time' => '21 Mei 2026, 14:30', 'title' => 'Kartu Keluarga terverifikasi', 'desc' => 'Dokumen Kartu Keluarga telah diverifikasi.', 'tone' => 'orange', 'badge' => null, 'icon' => 'solar:document-text-outline'],
            ['time' => '21 Mei 2026, 10:45', 'title' => 'Dokumen akta kelahiran terverifikasi', 'desc' => 'Dokumen Akta Kelahiran telah diverifikasi.', 'tone' => 'green', 'badge' => null, 'icon' => 'solar:check-circle-outline'],
            ['time' => '20 Mei 2026, 11:05', 'title' => 'Formulir pendaftaran berhasil dikirim', 'desc' => 'Formulir pendaftaran telah diterima oleh sistem.', 'tone' => 'green', 'badge' => null, 'icon' => 'solar:check-circle-outline'],
        ];

        $documents = [
            ['title' => 'Akta Kelahiran', 'file' => 'terlampir_akta_aisyah.pdf', 'status' => 'Terverifikasi', 'tone' => 'verified', 'statusIcon' => 'solar:check-circle-bold'],
            ['title' => 'Kartu Keluarga', 'file' => 'terlampir_kk.pdf', 'status' => 'Terverifikasi', 'tone' => 'verified', 'statusIcon' => 'solar:check-circle-bold'],
            ['title' => 'Rapor Semester Terakhir', 'file' => 'rapor_semester_5.pdf', 'status' => 'Dalam Review', 'tone' => 'review', 'statusIcon' => 'solar:clock-circle-bold'],
            ['title' => 'Pas Foto', 'file' => 'pasfoto_aisyah.jpg', 'status' => 'Terverifikasi', 'tone' => 'verified', 'statusIcon' => 'solar:check-circle-bold'],
            ['title' => 'Surat Keterangan Sehat', 'file' => 'belum diunggah', 'status' => 'Belum Diunggah', 'tone' => 'upload', 'statusIcon' => 'solar:upload-minimalistic-outline'],
            ['title' => 'Surat Keterangan Domisili', 'file' => 'belum diunggah', 'status' => 'Belum Diunggah', 'tone' => 'upload', 'statusIcon' => 'solar:upload-minimalistic-outline'],
        ];

        $infoItems = [
            ['label' => 'Tahun Ajaran', 'value' => '2026/2027'],
            ['label' => 'Jenjang / Unit Tujuan', 'value' => 'SD Al Azhar Syifa Budi Parahyangan'],
            ['label' => 'Gelombang', 'value' => 'Gelombang 1'],
            ['label' => 'Jalur Pendaftaran', 'value' => 'Reguler'],
            ['label' => 'Tanggal Daftar', 'value' => '20 Mei 2026, 10:32 WIB'],
            ['label' => 'Nomor Pendaftaran', 'value' => 'SD-26G1-000123'],
        ];
    @endphp

    <div class="status-dashboard">
        <div class="status-layout">
            <div class="status-main">
                <section class="status-welcome">
                    <div class="welcome-mark">
                        <img src="{{ asset('assets/status-pendaptaran/logo.jpg') }}" alt="Al Azhar Syifa Budi Parahyangan" style="border-radius: 50%; aspect-ratio: 1/1; object-fit: cover;">
                    </div>
                    <div class="welcome-copy">
                        <h2>Selamat datang kembali, Ahmad Fauzi <span>&#128075;</span></h2>
                        <p>Berikut adalah status terkini pendaftaran PPDB<br>Al Azhar Syifa Budi Parahyangan.</p>
                    </div>
                    <div class="student-select">
                        <span>Pilih Anak / Calon Siswa</span>
                        <button type="button" class="student-picker">
                            <span class="student-avatar">&#128103;</span>
                            <span><strong>Aisyah Putri</strong><small>Calon Siswa SD</small></span>
                            <iconify-icon icon="solar:alt-arrow-down-linear"></iconify-icon>
                        </button>
                    </div>
                    <button type="button" class="change-child">
                        <iconify-icon icon="solar:add-circle-outline"></iconify-icon>
                        Ganti Anak
                    </button>
                </section>

                <section class="status-process">
                    <div class="process-summary">
                        <div class="process-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 48 48">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                    <path d="M40 23v-9L31 4H10a2 2 0 0 0-2 2v36a2 2 0 0 0 2 2h12"/>
                                    <path d="m26 38l6 5l9-11M30 4v10h10"/>
                                </g>
                            </svg>
                        </div>
                        <div class="current-status">
                            <span>Status Saat Ini</span>
                            <h2>Sedang Diverifikasi</h2>
                            <strong>Verifikasi Berkas</strong>
                        </div>
                        <div class="process-note">
                            <p>Berkas pendaftaran Aisyah Putri sedang diverifikasi oleh tim PPDB. Mohon menunggu, kami akan memberikan kabar jika ada informasi terbaru.</p>
                            <span>Terakhir diperbarui: 22 Mei 2026, 09:15 WIB</span>
                        </div>
                    </div>

                    <div class="tracking-steps">
                        @foreach ($steps as $index => $step)
                            <div class="tracking-step {{ $step['state'] }}">
                                <span class="step-dot">
                                    @if ($step['state'] === 'done' && $index === 0)
                                        &#10003;
                                    @else
                                        {{ $index + 1 }}
                                    @endif
                                </span>
                                <strong>{{ $step['label'] }}</strong>
                                <small>{{ $step['status'] }}</small>
                            </div>
                        @endforeach
                    </div>
                </section>

                <div class="status-content-grid">
                    <section class="status-card activity-card">
                        <header>
                            <h3>Riwayat Aktivitas Pendaftaran</h3>
                        </header>
                        <div class="activity-list">
                            @foreach ($activities as $activity)
                                <article class="activity-item {{ $activity['tone'] }}">
                                    <span class="activity-icon"><iconify-icon icon="{{ $activity['icon'] }}"></iconify-icon></span>
                                    <div>
                                        <time>{{ $activity['time'] }}</time>
                                        @if ($activity['badge'])
                                            <em>{{ $activity['badge'] }}</em>
                                        @endif
                                        <strong>{{ $activity['title'] }}</strong>
                                        <p>{{ $activity['desc'] }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <a href="#">Lihat Semua Riwayat <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></a>
                    </section>

                    <section class="status-card verification-card">
                        <header>
                            <h3>Status Verifikasi Dokumen</h3>
                        </header>
                        <div class="verification-list">
                            @foreach ($documents as $document)
                                <article class="verification-row">
                                    <span class="verification-file-icon" aria-hidden="true"></span>
                                    <div>
                                        <strong>{{ $document['title'] }}</strong>
                                        <span>{{ $document['file'] }}</span>
                                    </div>
                                    <span class="verification-badge {{ $document['tone'] }}">
                                        {{ $document['status'] }}
                                        <iconify-icon class="verification-status-icon {{ $document['tone'] }}" icon="{{ $document['statusIcon'] }}" aria-hidden="true"></iconify-icon>
                                    </span>
                                </article>
                            @endforeach
                        </div>
                        <a href="{{ route('ppdb.documents') }}">Lihat Semua Dokumen <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></a>
                    </section>

                    <section class="admin-note-card">
                        <header>
                            <h3>Catatan / Feedback Admin</h3>
                        </header>
                        <div class="note-status">
                            <span><iconify-icon icon="solar:danger-circle-outline"></iconify-icon>Perlu Perbaikan</span>
                            <small>Dibuat: 22 Mei 2026, 09:15</small>
                        </div>
                        <strong>Dokumen rapor semester terakhir</strong>
                        <p>Mohon unggah ulang rapor dengan hasil yang lebih jelas agar dapat diverifikasi.</p>
                        <div class="tips">
                            <span>Tips:</span>
                            <ul>
                                <li>Pastikan semua teks terbaca dengan jelas</li>
                                <li>Hindari foto buram atau terpotong</li>
                                <li>Gunakan format PDF atau JPG/PNG</li>
                            </ul>
                        </div>
                        <button type="button">Unggah Ulang Dokumen</button>
                    </section>
                </div>
            </div>

            <aside class="status-sidebar">
                <section class="status-card info-registration">
                    <header>
                        <h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512" style="color: #0d54d9;">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0 1 16 16v288a16 16 0 0 1-16 16c-128 0-177.45 25.81-208 64c-30.37-38-80-64-208-64c-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0 1 16-16c131.57.59 192 32.84 208 96m0 0v288"/>
                            </svg>
                            Informasi Pendaftaran
                        </h3>
                    </header>
                    <dl>
                        @foreach ($infoItems as $item)
                            <div>
                                <dt>{{ $item['label'] }}</dt>
                                <dd>{{ $item['value'] }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </section>

                <section class="status-card progress-registration">
                    <h3>Progress Pendaftaran</h3>
                    <div class="progress-body">
                        <div class="progress-donut"><span>57%</span></div>
                        <div>
                            <strong>4 dari 7 tahap selesai</strong>
                            <p>Terus pantau progres pendaftaran untuk memastikan semua proses berjalan lancar.</p>
                        </div>
                    </div>
                </section>

                <section class="status-card next-step">
                    <h3><iconify-icon icon="solar:calendar-mark-outline"></iconify-icon>Langkah Berikutnya</h3>
                    <p>Setelah verifikasi berkas selesai, Anda akan mendapatkan jadwal seleksi sesuai jenjang pendaftaran.</p>
                </section>

                <section class="status-card quick-actions">
                    <h3><iconify-icon icon="solar:bolt-outline"></iconify-icon>Aksi Cepat</h3>
                    <a href="{{ route('ppdb.documents') }}" class="green">
                        <iconify-icon icon="solar:clipboard-check-outline"></iconify-icon>
                        Lihat Dokumen
                        <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                    </a>
                    <a href="{{ route('ppdb.form') }}">
                        <iconify-icon icon="solar:pen-new-square-outline"></iconify-icon>
                        Edit Jika Diminta
                        <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                    </a>
                    <a href="{{ route('ppdb.schedule') }}">
                        <iconify-icon icon="solar:calendar-date-outline"></iconify-icon>
                        Cek Jadwal Seleksi
                        <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                    </a>
                </section>
            </aside>
        </div>
    </div>
@endsection
