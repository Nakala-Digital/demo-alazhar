@extends('layouts.ppdb')

@section('content')
    <div class="pengumuman-dashboard">
        <!-- Top Announcement Card -->
        <div class="announcement-banner">
            <div class="banner-left">
                <span class="alhamdulillah">Alhamdulillah!</span>
                <h2>Ahmad Zaki Pratama</h2>
                <h1 class="lulus-text">Dinyatakan LULUS</h1>
                <p>Selamat! Putra Bapak/Ibu dinyatakan lulus seleksi PPDB Al Azhar Syifa Budi Parahyangan<br>Tahun Ajaran 2025/2026 jenjang SMP.</p>
            </div>
            
            <div class="banner-right">
                <div class="confetti-decoration">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                        <!-- Colorful confetti shapes -->
                        <circle cx="20" cy="40" r="6" fill="#f43f5e" />
                        <rect x="60" y="20" width="10" height="10" fill="#f59e0b" transform="rotate(45 60 20)" />
                        <path d="M140,30 L150,45 L130,50 Z" fill="#10b981" />
                        <circle cx="180" cy="70" r="7" fill="#3b82f6" />
                        <rect x="30" y="120" width="8" height="16" fill="#8b5cf6" transform="rotate(30 30 120)" />
                        <path d="M80,160 L90,145 L100,155 Z" fill="#ec4899" />
                        <circle cx="150" cy="170" r="5" fill="#f59e0b" />
                        <rect x="100" y="80" width="14" height="6" fill="#10b981" transform="rotate(-20 100 80)" />
                        <path d="M10,90 L25,85 L20,105 Z" fill="#3b82f6" />
                        <circle cx="120" cy="110" r="4" fill="#8b5cf6" />
                        <rect x="170" y="130" width="12" height="12" fill="#f43f5e" transform="rotate(15 170 130)" />
                        <path d="M50,180 L60,195 L40,190 Z" fill="#14b8a6" />
                        <circle cx="190" cy="190" r="6" fill="#ec4899" />
                        <rect x="70" y="60" width="8" height="8" fill="#f43f5e" transform="rotate(60 70 60)" />
                    </svg>
                </div>

                <div class="student-info-card">
                    <div class="info-row">
                        <iconify-icon icon="solar:folder-with-files-outline"></iconify-icon>
                        <span class="label">No. Pendaftaran</span>
                        <span class="value">AZP25051234</span>
                    </div>
                    <div class="info-row">
                        <iconify-icon icon="solar:user-rounded-outline"></iconify-icon>
                        <span class="label">Jenjang</span>
                        <span class="value">SMP</span>
                    </div>
                    <div class="info-row">
                        <iconify-icon icon="solar:calendar-outline"></iconify-icon>
                        <span class="label">Tahun Ajaran</span>
                        <span class="value">2025/2026</span>
                    </div>
                    <div class="info-row">
                        <iconify-icon icon="solar:calendar-date-outline"></iconify-icon>
                        <span class="label">Tanggal Pengumuman</span>
                        <span class="value">24 Mei 2025</span>
                    </div>
                    
                    <button class="btn-download-surat">
                        <iconify-icon icon="material-symbols:download"></iconify-icon>
                        Unduh Surat Hasil
                    </button>
                </div>
                
                <div class="trophy-illustration">
                    <img src="{{ asset('assets/images/thropy.png') }}" class="trophy-img" alt="Trophy Lulus">
                </div>
            </div>
        </div>

        <!-- Next Information Steps -->
        <div class="section-header">
            <h3>Informasi Selanjutnya</h3>
        </div>
        
        <div class="next-steps-wrapper">
            <!-- Step 1 -->
            <div class="next-step-card">
                <div class="step-badge">1</div>
                <div class="step-icon">
                    <iconify-icon icon="carbon:report"></iconify-icon>
                </div>
                <h4>Daftar Ulang <span class="dot-green"></span></h4>
                <p>Lakukan daftar ulang sesuai jadwal yang ditentukan.</p>
                <div class="step-date">25 - 31 Mei 2025</div>
            </div>
            
            <div class="step-arrow"><iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon></div>
            
            <!-- Step 2 -->
            <div class="next-step-card">
                <div class="step-badge">2</div>
                <div class="step-icon">
                    <iconify-icon icon="ion:card"></iconify-icon>
                </div>
                <h4>Pembayaran</h4>
                <p>Lakukan pembayaran biaya pendaftaran ulang/administrasi.</p>
                <div class="step-date">25 Mei - 31 Mei 2025</div>
            </div>
            
            <div class="step-arrow"><iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon></div>
            
            <!-- Step 3 -->
            <div class="next-step-card">
                <div class="step-badge">3</div>
                <div class="step-icon">
                    <iconify-icon icon="solar:document-add-outline"></iconify-icon>
                </div>
                <h4>Upload Bukti Bayar</h4>
                <p>Unggah bukti pembayaran melalui portal untuk verifikasi.</p>
                <div class="step-date">25 Mei - 31 Mei 2025</div>
            </div>
            
            <div class="step-arrow"><iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon></div>
            
            <!-- Step 4 -->
            <div class="next-step-card">
                <div class="step-badge">4</div>
                <div class="step-icon">
                    <iconify-icon icon="solar:users-group-two-rounded-outline"></iconify-icon>
                </div>
                <h4>Orientasi Siswa</h4>
                <p>Informasi jadwal orientasi akan diumumkan setelah daftar ulang.</p>
                <div class="step-date outline">Akan Diumumkan</div>
            </div>
        </div>

        <!-- Important Notes -->
        <div class="important-notes-alert">
            <div class="notes-content">
                <div class="notes-header">
                    <iconify-icon icon="solar:info-circle-outline"></iconify-icon>
                    <h4>Catatan Penting</h4>
                </div>
                <ul>
                    <li>Pastikan Anda melakukan daftar ulang sesuai jadwal agar tidak kehilangan hak sebagai calon siswa.</li>
                    <li>Informasi lengkap terkait daftar ulang dan biaya dapat dilihat pada menu Pesan atau Anda akan menerima email notifikasi.</li>
                    <li>Jika ada pertanyaan, silakan hubungi Panitia PPDB.</li>
                </ul>
            </div>
            <div class="notes-illustration">
                <svg width="240" height="180" viewBox="0 0 240 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Floor Shadow -->
                    <ellipse cx="105" cy="145" rx="50" ry="5" fill="#dbeafe" transform="rotate(-8 105 145)" />

                    <!-- Sparks / Confetti -->
                    <line x1="25" y1="55" x2="35" y2="45" stroke="#a5c8fb" stroke-width="4.5" stroke-linecap="round" />
                    <line x1="55" y1="38" x2="60" y2="25" stroke="#a5c8fb" stroke-width="4.5" stroke-linecap="round" />
                    <line x1="100" y1="20" x2="105" y2="10" stroke="#bcb0e8" stroke-width="4.5" stroke-linecap="round" />
                    <line x1="35" y1="135" x2="48" y2="125" stroke="#a5c8fb" stroke-width="5" stroke-linecap="round" />
                    
                    <!-- Sound Waves -->
                    <line x1="185" y1="40" x2="202" y2="28" stroke="#d0dce8" stroke-width="5" stroke-linecap="round" />
                    <line x1="195" y1="55" x2="220" y2="50" stroke="#eef3f3" stroke-width="5" stroke-linecap="round" />
                    <line x1="190" y1="72" x2="208" y2="82" stroke="#d0dce8" stroke-width="5" stroke-linecap="round" />

                    <!-- ENVELOPE GROUP (Rotated) -->
                    <g transform="rotate(-8 105 100)">
                        <!-- Envelope Back Inside -->
                        <polygon points="50,65 160,65 160,95 50,95" fill="#f8fafc" />
                        
                        <!-- Letter Inside -->
                        <path d="M 60 45 C 60 40 65 40 65 40 L 145 40 C 145 40 150 40 150 45 L 150 75 L 60 75 Z" fill="#ffffff" />
                        
                        <!-- Letter Lines -->
                        <line x1="85" y1="52" x2="115" y2="52" stroke="#c8d4e5" stroke-width="3.5" stroke-linecap="round" />
                        <line x1="75" y1="60" x2="125" y2="60" stroke="#c8d4e5" stroke-width="3.5" stroke-linecap="round" />
                        <line x1="95" y1="68" x2="115" y2="68" stroke="#c8d4e5" stroke-width="3.5" stroke-linecap="round" />

                        <!-- Envelope Left Flap -->
                        <path d="M 50 65 L 105 100 L 50 135 Z" fill="#fbeed7" stroke="#fbeed7" stroke-width="2" stroke-linejoin="round" />
                        <!-- Envelope Right Flap -->
                        <path d="M 160 65 L 105 100 L 160 135 Z" fill="#fbeed7" stroke="#fbeed7" stroke-width="2" stroke-linejoin="round" />
                        <!-- Envelope Bottom Flap -->
                        <path d="M 50 135 L 105 100 L 160 135 Z" fill="#f3dec0" stroke="#f3dec0" stroke-width="2" stroke-linejoin="round" />
                        <!-- Envelope Bottom Edge Shadow -->
                        <path d="M 50 135 L 105 100 L 160 135" fill="none" stroke="#e8d0ad" stroke-width="1.5" stroke-linejoin="round" />
                    </g>

                    <!-- MEGAPHONE GROUP -->
                    <g transform="translate(150, 75) rotate(-28)">
                        <!-- Mouthpiece Tip -->
                        <path d="M -55 -5 C -60 -5 -60 5 -55 5 L -48 5 L -48 -5 Z" fill="#284898" />
                        <!-- Mouthpiece Base -->
                        <rect x="-48" y="-7" width="8" height="14" rx="2" fill="#cbd5e1" />
                        
                        <!-- Cone -->
                        <path d="M -40 -6 Q -5 -10 35 -25 L 35 25 Q -5 10 -40 6 Z" fill="#284898" />
                        
                        <!-- Big End Outer Rim -->
                        <ellipse cx="35" cy="0" rx="9" ry="25" fill="#c3d1de" />
                        <!-- Big End Inner Hole -->
                        <ellipse cx="36" cy="0" rx="5" ry="21" fill="#4b5a75" />
                        
                        <!-- Middle Wrap Band -->
                        <path d="M -10 -13 Q -2 -14 10 -18 L 10 18 Q -2 14 -10 13 Z" fill="#e6edf4" />
                        
                        <!-- Handle Base (Darker) -->
                        <rect x="-6" y="16" width="12" height="28" rx="5" fill="#b8c6d4" />
                        <!-- Handle Top (Lighter) -->
                        <rect x="-6" y="16" width="12" height="14" rx="3" fill="#d2dde8" />
                    </g>
                </svg>
            </div>
        </div>

        <!-- History / Timeline -->
        <div class="history-card">
            <h3>Riwayat Seleksi</h3>
            
            <div class="horizontal-timeline">
                <!-- Item 1 -->
                <div class="timeline-item completed">
                    <div class="timeline-marker"><iconify-icon icon="mdi:check-bold"></iconify-icon></div>
                    <div class="timeline-content">
                        <strong>Pendaftaran</strong>
                        <span>10 Apr 2025</span>
                    </div>
                </div>
                <!-- Line -->
                <div class="timeline-line completed"></div>
                
                <!-- Item 2 -->
                <div class="timeline-item completed">
                    <div class="timeline-marker"><iconify-icon icon="mdi:check-bold"></iconify-icon></div>
                    <div class="timeline-content">
                        <strong>Verifikasi Berkas</strong>
                        <span>15 Apr 2025</span>
                    </div>
                </div>
                <!-- Line -->
                <div class="timeline-line completed"></div>
                
                <!-- Item 3 -->
                <div class="timeline-item completed">
                    <div class="timeline-marker"><iconify-icon icon="mdi:check-bold"></iconify-icon></div>
                    <div class="timeline-content">
                        <strong>Tes Akademik</strong>
                        <span>24 Mei 2025</span>
                    </div>
                </div>
                <!-- Line -->
                <div class="timeline-line completed"></div>
                
                <!-- Item 4 -->
                <div class="timeline-item completed">
                    <div class="timeline-marker"><iconify-icon icon="mdi:check-bold"></iconify-icon></div>
                    <div class="timeline-content">
                        <strong>Wawancara</strong>
                        <span>24 Mei 2025</span>
                    </div>
                </div>
                <!-- Line -->
                <div class="timeline-line completed"></div>
                
                <!-- Item 5 -->
                <div class="timeline-item active">
                    <div class="timeline-marker number">5</div>
                    <div class="timeline-content">
                        <strong>Pengumuman Hasil</strong>
                        <span>24 Mei 2025</span>
                        <span class="badge-selesai">Selesai</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
