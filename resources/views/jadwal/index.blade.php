@extends('layouts.ppdb')

@section('content')
    <div class="schedule-dashboard">
        <!-- Profile Card -->
        <div class="schedule-profile-card">
            <div class="profile-info">
                <div class="profile-avatar">
                    <iconify-icon icon="solar:user-bold"></iconify-icon>
                </div>
                <div class="profile-text">
                    <span>Profil Pendaftar</span>
                    <h2>Ahmad Zaki Pratama</h2>
                    <div class="registration-number">No. Pendaftaran: AZP25051234</div>
                </div>
            </div>
            <div class="profile-stats">
                <div class="stat-item">
                    <span>Jenjang</span>
                    <strong>SMP</strong>
                </div>
                <div class="stat-item">
                    <span>Tahun Ajaran</span>
                    <strong>2025/2026</strong>
                </div>
                <div class="stat-item">
                    <span>Status Pendaftaran</span>
                    <span class="badge badge-process">Dalam Proses</span>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="schedule-tabs-container">
            <nav class="schedule-tabs">
                <a href="#" class="active">Jadwal Tes</a>
                <a href="#">Riwayat Seleksi</a>
            </nav>
        </div>

        <!-- Alert -->
        <div class="schedule-alert">
            <iconify-icon icon="formkit:datetime"></iconify-icon>
            <div class="alert-text">
                <strong>Informasi Penting</strong>
                <p>Harap datang 30 menit sebelum jadwal tes. Pastikan membawa kartu peserta dan alat tulis.</p>
            </div>
        </div>

        <!-- Main Grid -->
        <div class="schedule-grid">
            <!-- Left Column: Steps -->
            <div class="schedule-list-column">
                <div class="schedule-card list-card">
                    <h3>Daftar Tahapan Seleksi</h3>
                    
                    <div class="steps-list">
                        <!-- Step 1 -->
                        <div class="step-item active">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Tes Akademik</h4>
                                <div class="step-meta">
                                    <span><iconify-icon icon="solar:calendar-outline"></iconify-icon> Sabtu, 24 Mei 2025</span>
                                    <span><iconify-icon icon="solar:clock-circle-outline"></iconify-icon> 08.00 - 10.00 WIB</span>
                                </div>
                            </div>
                            <div class="step-status status-upcoming">
                                <span>Akan Datang</span>
                                <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Tes Tahfidz <span>(Bagi yang memilih program Islam)</span></h4>
                                <div class="step-meta">
                                    <span><iconify-icon icon="solar:calendar-outline"></iconify-icon> Sabtu, 24 Mei 2025</span>
                                    <span><iconify-icon icon="solar:clock-circle-outline"></iconify-icon> 10.30 - 11.30 WIB</span>
                                </div>
                            </div>
                            <div class="step-status status-waiting">
                                <span>Menunggu</span>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Wawancara Orang Tua</h4>
                                <div class="step-meta">
                                    <span><iconify-icon icon="solar:calendar-outline"></iconify-icon> Sabtu, 24 Mei 2025</span>
                                    <span><iconify-icon icon="solar:clock-circle-outline"></iconify-icon> 13.00 - 14.00 WIB</span>
                                </div>
                            </div>
                            <div class="step-status status-waiting">
                                <span>Menunggu</span>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="step-item">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Pengumuman Hasil Seleksi</h4>
                                <div class="step-meta">
                                    <span><iconify-icon icon="solar:calendar-outline"></iconify-icon> Kamis, 29 Mei 2025</span>
                                </div>
                            </div>
                            <div class="step-status status-waiting">
                                <span>Menunggu</span>
                            </div>
                        </div>
                    </div>

                    <!-- Note Box -->
                    <div class="schedule-note">
                        <div class="note-header">
                            <iconify-icon icon="solar:info-circle-outline"></iconify-icon>
                            <strong>Catatan</strong>
                        </div>
                        <p>Jadwal dapat berubah sewaktu-waktu.<br>Informasi terbaru akan dikirim melalui email dan notifikasi.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="schedule-detail-column">
                <div class="schedule-card detail-card">
                    <h3>Detail Tes Akademik</h3>
                    
                    <div class="detail-grid">
                        <div class="detail-info-list">
                            <div class="detail-row">
                                <iconify-icon icon="stash:data-date"></iconify-icon>
                                <span class="label">Tanggal</span>
                                <span class="value">Sabtu, 24 Mei 2025</span>
                            </div>
                            <div class="detail-row">
                                <iconify-icon icon="solar:clock-circle-outline"></iconify-icon>
                                <span class="label">Waktu</span>
                                <div class="value">
                                    08.00 - 10.00 WIB
                                    <small>(Durasi 120 menit)</small>
                                </div>
                            </div>
                            <div class="detail-row">
                                <iconify-icon icon="basil:location-outline"></iconify-icon>
                                <span class="label">Lokasi</span>
                                <div class="value location">
                                    Al Azhar Syifa Budi Parahyangan<br>
                                    <small>Jl. Raya Parahyangan KM. 2,5<br>Kota Baru Parahyangan, Bandung<br>Jawa Barat 40754</small>
                                </div>
                            </div>
                            <div class="detail-row">
                                <iconify-icon icon="material-symbols-light:meeting-room-outline-rounded"></iconify-icon>
                                <span class="label">Ruang</span>
                                <span class="value">Ruang Ujian 3 (Lantai 2)</span>
                            </div>
                            <div class="detail-row">
                                <iconify-icon icon="solar:document-text-outline"></iconify-icon>
                                <span class="label">Materi Ujian</span>
                                <span class="value">Matematika, Bahasa Indonesia, IPA</span>
                            </div>
                            <div class="detail-row">
                                <iconify-icon icon="solar:checklist-minimalistic-outline"></iconify-icon>
                                <span class="label">Yang Harus<br>Dibawa</span>
                                <span class="value">Kartu Peserta, Alat Tulis, Pensil 2B, Penghapus</span>
                            </div>
                        </div>
                        
                        <div class="detail-widgets">
                            <div class="widget-card ticket-widget">
                                <strong>Kartu Peserta</strong>
                                <p>Tunjukkan kartu peserta saat pelaksanaan tes.</p>
                                <button type="button" class="btn-download">
                                    <iconify-icon icon="material-symbols:download"></iconify-icon>
                                    Unduh Kartu
                                </button>
                            </div>
                            
                            <div class="widget-card map-widget">
                                <iframe 
                                    class="real-map"
                                    src="https://maps.google.com/maps?q=Al+Azhar+Syifa+Budi+Parahyangan,+Bandung&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                                    frameborder="0" 
                                    scrolling="no" 
                                    marginheight="0" 
                                    marginwidth="0">
                                </iframe>
                                <a href="https://maps.google.com/maps?q=Al+Azhar+Syifa+Budi+Parahyangan,+Bandung" target="_blank" class="btn-route" style="text-decoration: none;">
                                    <iconify-icon icon="tdesign:map-location"></iconify-icon>
                                    Lihat Rute
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Guide Alert -->
                <div class="schedule-guide-alert">
                    <div class="guide-content">
                        <div class="guide-icon">
                            <iconify-icon icon="icon-park-outline:message-success"></iconify-icon>
                        </div>
                        <div class="guide-text">
                            <strong>Pastikan Anda siap mengikuti tes</strong>
                            <p>Pelajari panduan dan contoh soal untuk persiapan terbaik.</p>
                        </div>
                    </div>
                    <a href="#" class="btn-guide">
                        Lihat Panduan
                        <iconify-icon icon="quill:link-out"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
