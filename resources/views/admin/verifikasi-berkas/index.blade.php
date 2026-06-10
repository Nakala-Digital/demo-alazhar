@extends('layouts.admin', ['active' => 'verifikasi', 'pageTitle' => 'Verifikasi Berkas', 'pageDesc' => 'Kelola dan verifikasi dokumen persyaratan calon siswa'])

@section('content')
    <section class="v-summary-grid">
        <article class="v-summary-card">
            <div class="v-summary-icon blue"><iconify-icon icon="fluent-mdl2:text-document-edit"></iconify-icon></div>
            <div class="v-summary-info">
                <span class="text-blue">Total Pendaftar</span>
                <strong>1.248</strong>
                <small>Seluruh Jenjang</small>
            </div>
        </article>
        <article class="v-summary-card">
            <div class="v-summary-icon green"><iconify-icon icon="octicon:shield-check-24"></iconify-icon></div>
            <div class="v-summary-info">
                <span class="text-green">Sudah Diverifikasi</span>
                <strong>892</strong>
                <small>71,5% dari total</small>
            </div>
        </article>
        <article class="v-summary-card">
            <div class="v-summary-icon yellow"><iconify-icon icon="tdesign:task-time"></iconify-icon></div>
            <div class="v-summary-info">
                <span class="text-yellow">Menunggu Verifikasi</span>
                <strong>256</strong>
                <small>20,5% dari total</small>
            </div>
        </article>
        <article class="v-summary-card">
            <div class="v-summary-icon red"><iconify-icon icon="mdi:file-document-error-outline"></iconify-icon></div>
            <div class="v-summary-info">
                <span class="text-red">Perlu Revisi</span>
                <strong>78</strong>
                <small>6,3% dari total</small>
            </div>
        </article>
        <article class="v-summary-card">
            <div class="v-summary-icon purple"><iconify-icon icon="heroicons:document-check"></iconify-icon></div>
            <div class="v-summary-info">
                <span class="text-purple">Disetujui (Final)</span>
                <strong>22</strong>
                <small>1,7% dari total</small>
            </div>
        </article>
    </section>

    <section class="v-filter-bar">
        <div class="v-search-box">
            <input type="text" placeholder="Cari nama / no. pendaftaran...">
            <iconify-icon icon="heroicons:magnifying-glass"></iconify-icon>
        </div>
        <div class="v-filter-group">
            <div class="v-filter-item">
                <label>Jenjang</label>
                <select><option>Semua Jenjang</option></select>
            </div>
            <div class="v-filter-item">
                <label>Status Verifikasi</label>
                <select><option>Semua Status</option></select>
            </div>
            <div class="v-filter-item">
                <label>Program</label>
                <select><option>Semua Program</option></select>
            </div>
            <button type="button" class="v-btn-outline"><iconify-icon icon="heroicons:funnel"></iconify-icon> Filter Lainnya</button>
        </div>
        <button type="button" class="v-btn-outline btn-export"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon> Export</button>
    </section>

    <div class="v-main-grid">
        <article class="v-table-card">
            <div class="v-table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pendaftar</th>
                            <th>No. Pendaftaran</th>
                            <th>Jenjang</th>
                            <th>Status Verifikasi</th>
                            <th>Tanggal Daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><strong>Ahmad Zaki Pratama</strong></td>
                            <td>AZP25051234</td>
                            <td>SMP</td>
                            <td><span class="v-badge yellow">Menunggu Verifikasi</span></td>
                            <td>22 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><strong>Aisyah Nur Haliza</strong></td>
                            <td>AZP25051235</td>
                            <td>SD</td>
                            <td><span class="v-badge red">Perlu Revisi</span></td>
                            <td>22 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><strong>Rafka Al Farizi</strong></td>
                            <td>AZP25051236</td>
                            <td>TK B</td>
                            <td><span class="v-badge green">Diverifikasi</span></td>
                            <td>22 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><strong>Nayla Putri Ramadhani</strong></td>
                            <td>AZP25051237</td>
                            <td>TK A</td>
                            <td><span class="v-badge yellow">Menunggu Verifikasi</span></td>
                            <td>22 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><strong>Arkan Daffa Pratama</strong></td>
                            <td>AZP25051238</td>
                            <td>SMP</td>
                            <td><span class="v-badge red">Perlu Revisi</span></td>
                            <td>22 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><strong>Zahra Kamila</strong></td>
                            <td>AZP25051239</td>
                            <td>SD</td>
                            <td><span class="v-badge green">Diverifikasi</span></td>
                            <td>21 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><strong>Muhammad Rayyan</strong></td>
                            <td>AZP25051240</td>
                            <td>SMP</td>
                            <td><span class="v-badge green">Diverifikasi</span></td>
                            <td>21 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><strong>Khayla Azzahra</strong></td>
                            <td>AZP25051241</td>
                            <td>TK B</td>
                            <td><span class="v-badge yellow">Menunggu Verifikasi</span></td>
                            <td>21 Mei 2025</td>
                            <td><button class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="v-pagination">
                <span>Menampilkan 1 - 8 dari 256 data</span>
                <div class="v-page-links">
                    <button><iconify-icon icon="heroicons:chevron-left"></iconify-icon></button>
                    <button class="active">1</button>
                    <button>2</button>
                    <button>3</button>
                    <span>...</span>
                    <button>32</button>
                    <button><iconify-icon icon="heroicons:chevron-right"></iconify-icon></button>
                </div>
            </div>
        </article>
        
        <article class="v-detail-card">
            <div class="v-detail-header">
                <button type="button" class="v-btn-close"><iconify-icon icon="heroicons:x-mark"></iconify-icon></button>
                <div class="v-detail-title">
                    <h2>Ahmad Zaki Pratama</h2>
                    <span class="v-badge green" style="background:#dcfce7;color:#16a34a;">Menunggu Verifikasi</span>
                </div>
                <p class="v-detail-sub">AZP25051234 &bull; SMP &bull; 22 Mei 2025 10:15 WIB</p>
            </div>
            <div class="v-detail-tabs">
                <button type="button">Data Pendaftar</button>
                <button type="button" class="active">Dokumen <span class="v-tab-badge">7</span></button>
                <button type="button">Riwayat</button>
                <button type="button">Catatan</button>
            </div>
            
            <div class="v-doc-list-head">
                <span>Dokumen</span>
                <span>Status</span>
                <span>Catatan</span>
                <span class="text-right">Aksi</span>
            </div>
            <div class="v-doc-list">
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon purple"><iconify-icon icon="heroicons:identification"></iconify-icon></div>
                        <div>
                            <strong>Akta Kelahiran</strong>
                            <small>IMG_20250522_001.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge green">Diverifikasi</span></div>
                    <div class="v-doc-note">Sesuai</div>
                    <div class="v-doc-actions">
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon></button>
                    </div>
                </div>
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon green"><iconify-icon icon="heroicons:users"></iconify-icon></div>
                        <div>
                            <strong>Kartu Keluarga</strong>
                            <small>IMG_20250522_002.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge green">Diverifikasi</span></div>
                    <div class="v-doc-note">Sesuai</div>
                    <div class="v-doc-actions">
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon></button>
                    </div>
                </div>
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon red"><iconify-icon icon="heroicons:user-circle"></iconify-icon></div>
                        <div>
                            <strong>Pas Foto</strong>
                            <small>IMG_20250522_003.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge red">Perlu Revisi</span></div>
                    <div class="v-doc-note">Foto buram, mohon unggah ulang foto yang jelas.</div>
                    <div class="v-doc-actions">
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon></button>
                    </div>
                </div>
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon yellow"><iconify-icon icon="heroicons:clipboard-document-list"></iconify-icon></div>
                        <div>
                            <strong>Raport / Laporan Belajar</strong>
                            <small>IMG_20250522_004.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge yellow">Menunggu</span></div>
                    <div class="v-doc-note">-</div>
                    <div class="v-doc-actions">
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon></button>
                    </div>
                </div>
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon blue"><iconify-icon icon="heroicons:document-plus"></iconify-icon></div>
                        <div>
                            <strong>Surat Keterangan Sehat</strong>
                            <small>IMG_20250522_005.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge green">Diverifikasi</span></div>
                    <div class="v-doc-note">Sesuai</div>
                    <div class="v-doc-actions">
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon></button>
                    </div>
                </div>
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon purple"><iconify-icon icon="heroicons:academic-cap"></iconify-icon></div>
                        <div>
                            <strong>Sertifikat / Prestasi (Opsional)</strong>
                            <small>IMG_20250522_006.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge yellow">Menunggu</span></div>
                    <div class="v-doc-note">-</div>
                    <div class="v-doc-actions">
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                        <button type="button" class="v-btn-icon"><iconify-icon icon="heroicons:arrow-down-tray"></iconify-icon></button>
                    </div>
                </div>
                <div class="v-doc-item">
                    <div class="v-doc-info">
                        <div class="v-doc-icon gray"><iconify-icon icon="heroicons:document"></iconify-icon></div>
                        <div>
                            <strong>Dokumen Lainnya (Opsional)</strong>
                            <small>IMG_20250522_007.jpg</small>
                        </div>
                    </div>
                    <div class="v-doc-status"><span class="v-badge gray">Tidak Ada</span></div>
                    <div class="v-doc-note">-</div>
                    <div class="v-doc-actions">
                        <!-- No actions -->
                    </div>
                </div>
            </div>
            
            <div class="v-detail-footer">
                <div class="v-note-box">
                    <label>Catatan Verifikasi (opsional)</label>
                    <input type="text" placeholder="Tulis catatan untuk pendaftar...">
                </div>
                <div class="v-action-buttons">
                    <button type="button" class="v-btn-red">Minta Revisi</button>
                    <button type="button" class="v-btn-red">Tolak</button>
                    <button type="button" class="v-btn-green"><iconify-icon icon="heroicons:check"></iconify-icon> Setujui &amp; Lanjutkan</button>
                </div>
            </div>
        </article>
    </div>
@endsection
