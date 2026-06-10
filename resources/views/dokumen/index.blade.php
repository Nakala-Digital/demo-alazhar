@extends('layouts.ppdb')

@section('content')
    @php
        $steps = ['Data Siswa', 'Data Orang Tua', 'Alamat', 'Riwayat Sekolah', 'Upload Dokumen', 'Review', 'Selesai'];
        $currentStep = 5;
        $documents = [
            ['no' => 1, 'title' => 'Akta Kelahiran', 'desc' => 'Scan akta kelahiran siswa', 'file' => 'Akta_Kelahiran_Aisyah_Putri.pdf', 'size' => '812 KB', 'type' => 'PDF', 'max' => 'Maks. 2MB', 'status' => 'Terverifikasi', 'tone' => 'success', 'icon' => 'heroicons:document-text'],
            ['no' => 2, 'title' => 'Kartu Keluarga', 'desc' => 'Scan kartu keluarga', 'file' => 'Kartu_Keluarga_Fauzi.pdf', 'size' => '1.2 MB', 'type' => 'PDF', 'max' => 'Maks. 2MB', 'status' => 'Terverifikasi', 'tone' => 'success', 'icon' => 'heroicons:document-text'],
            ['no' => 3, 'title' => 'Raport / Nilai', 'desc' => 'Scan raport / nilai terakhir', 'file' => 'Raport_Semester_5.pdf', 'size' => '1.8 MB', 'type' => 'PDF', 'max' => 'Maks. 5MB', 'status' => 'Dalam Review', 'tone' => 'warning', 'icon' => 'heroicons:document-text'],
            ['no' => 4, 'title' => 'Pas Foto 3x4', 'desc' => 'Foto terbaru latar belakang merah/biru', 'file' => null, 'size' => null, 'type' => 'JPG / PNG', 'max' => 'Maks. 2MB', 'status' => 'Belum Diunggah', 'tone' => 'danger', 'icon' => 'heroicons:photo'],
            ['no' => 5, 'title' => 'KTP Orang Tua / Wali', 'desc' => 'Scan KTP orang tua atau wali', 'file' => 'KTP_Ahmad_Fauzi.pdf', 'size' => '926 KB', 'type' => 'PDF', 'max' => 'Maks. 2MB', 'status' => 'Upload Ulang', 'tone' => 'retry', 'icon' => 'heroicons:identification', 'note' => 'Catatan verifikasi: Foto kurang jelas. Mohon unggah ulang dengan resolusi lebih baik.'],
            ['no' => 6, 'title' => 'Surat Keterangan / Dokumen Pendukung', 'desc' => 'Contoh: Surat Domisili, Prestasi, dll.', 'file' => 'Surat_Domisili.pdf', 'size' => '745 KB', 'type' => 'PDF', 'max' => 'Maks. 5MB', 'status' => 'Terverifikasi', 'tone' => 'success', 'icon' => 'heroicons:document-text'],
        ];
    @endphp

    <section class="step-card">
        @foreach ($steps as $index => $label)
            @php $number = $index + 1; @endphp
            <div class="step-item {{ $number < $currentStep ? 'is-done' : '' }} {{ $number === $currentStep ? 'is-current' : '' }}">
                <div class="step-line"></div>
                <span>
                    @if ($number < $currentStep)
                        &#10003;
                    @else
                        {{ $number }}
                    @endif
                </span>
                <strong>{{ $label }}</strong>
            </div>
        @endforeach
    </section>

    <div class="content-grid">
        <section class="document-panel">
            <div class="panel-head">
                <div>
                    <h2>Upload Dokumen PPDB</h2>
                    <p>Unggah semua dokumen yang dipersyaratkan dengan jelas dan lengkap.</p>
                </div>
                <div class="upload-counter">
                    <iconify-icon icon="solar:upload-square-outline"></iconify-icon>
                    <div><strong>4 dari 6 dokumen</strong><span>telah diunggah</span></div>
                </div>
            </div>

            <div class="document-list">
                @foreach ($documents as $document)
                    <article class="document-row">
                        <div class="doc-number {{ $document['tone'] === 'danger' ? 'muted' : '' }}">{{ $document['no'] }}</div>
                        <div class="doc-name">
                            <iconify-icon icon="{{ $document['icon'] }}"></iconify-icon>
                            <div><strong>{{ $document['title'] }}</strong><span>{{ $document['desc'] }}</span></div>
                        </div>
                        <div class="file-cell {{ empty($document['file']) ? 'is-empty' : '' }}">
                            @if (! empty($document['file']))
                                <iconify-icon icon="vscode-icons:file-type-pdf2"></iconify-icon>
                                <div><strong>{{ $document['file'] }}</strong><span>{{ $document['size'] }}</span></div>
                            @else
                                <iconify-icon icon="solar:cloud-upload-outline"></iconify-icon>
                                <div><strong>Klik atau drag & drop file foto di sini</strong><span>JPG / PNG - Maks. 2MB</span></div>
                            @endif
                        </div>
                        <div class="doc-type"><strong>{{ $document['type'] }}</strong><span>{{ $document['max'] }}</span></div>
                        <div class="status-badge {{ $document['tone'] }}">{{ $document['status'] }}</div>
                        @if (empty($document['file']))
                            <div class="doc-actions is-empty" aria-hidden="true"></div>
                        @else
                            <div class="doc-actions">
                                <button aria-label="Lihat dokumen"><iconify-icon icon="heroicons:eye"></iconify-icon></button>
                                @if ($document['tone'] === 'retry')
                                    <button aria-label="Upload ulang"><iconify-icon icon="heroicons:arrow-path"></iconify-icon></button>
                                @else
                                    <button class="danger" aria-label="Hapus dokumen"><iconify-icon icon="heroicons:trash"></iconify-icon></button>
                                @endif
                            </div>
                        @endif
                        @if (! empty($document['note']))
                            <p class="doc-note">{{ $document['note'] }}</p>
                        @endif
                    </article>
                @endforeach
            </div>

            <div class="alert-note">
                <iconify-icon icon="solar:danger-triangle-outline"></iconify-icon>
                <span>Pastikan dokumen yang diunggah jelas, dapat dibaca, dan sesuai dengan aslinya. Dokumen yang tidak jelas atau tidak lengkap dapat menyebabkan penundaan verifikasi.</span>
            </div>

            <div class="form-actions">
                <a href="{{ route('ppdb.form') }}" class="btn btn-light"><iconify-icon icon="solar:arrow-left-linear"></iconify-icon>Kembali ke Riwayat Sekolah</a>
                <button class="btn btn-light"><iconify-icon icon="solar:diskette-outline"></iconify-icon>Simpan Draft</button>
                <a href="{{ route('ppdb.review') }}" class="btn btn-primary">Lanjut ke Review<iconify-icon icon="solar:arrow-right-linear"></iconify-icon></a>
            </div>
        </section>

        <aside class="side-stack">
            <section class="info-card">
                <h3><iconify-icon icon="solar:book-2-outline"></iconify-icon>Informasi Pendaftaran</h3>
                <dl>
                    <div><dt>Tahun Ajaran</dt><dd>2026/2027</dd></div>
                    <div><dt>Jenjang Tujuan</dt><dd>SD Al Azhar Syifa Budi Parahyangan</dd></div>
                    <div><dt>Gelombang</dt><dd>Gelombang 1</dd></div>
                    <div><dt>Jalur Pendaftaran</dt><dd>Regular</dd></div>
                </dl>
                <button><iconify-icon icon="solar:pen-new-square-outline"></iconify-icon>Ubah Pilihan</button>
            </section>

            <section class="info-card progress-card">
                <div class="progress-head"><h3>Progress Pendaftaran</h3><strong>71%</strong></div>
                <div class="progress-track"><span></span></div>
                <ol class="mini-steps">
                    @foreach ($steps as $index => $label)
                        @php $number = $index + 1; @endphp
                        <li class="{{ $number < $currentStep ? 'done' : '' }} {{ $number === $currentStep ? 'current' : '' }}">
                            <span class="mini-status">
                                @if ($number < $currentStep)
                                    &#10003;
                                @elseif ($number === $currentStep)
                                    &#10003;
                                @else
                                @endif
                            </span>
                            <span class="mini-number">{{ $number }}</span>
                            {{ $label }}
                        </li>
                    @endforeach
                </ol>
            </section>

            <section class="info-card guidance">
                <h3><iconify-icon icon="solar:info-circle-outline"></iconify-icon>Panduan Dokumen</h3>
                <ul>
                    <li><iconify-icon icon="solar:check-circle-bold"></iconify-icon>Pastikan hasil scan/foto jelas dan terbaca.</li>
                    <li><iconify-icon icon="solar:check-circle-bold"></iconify-icon>Ukuran file maksimal 2MB (foto) / 5MB (dokumen).</li>
                    <li><iconify-icon icon="solar:check-circle-bold"></iconify-icon>Format file yang diperbolehkan: PDF, JPG, PNG.</li>
                    <li><iconify-icon icon="solar:check-circle-bold"></iconify-icon>Pastikan dokumen sesuai dan tidak terpotong.</li>
                </ul>
            </section>
        </aside>
    </div>
@endsection
