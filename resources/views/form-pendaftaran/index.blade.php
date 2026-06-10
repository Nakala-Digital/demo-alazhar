@extends('layouts.ppdb')

@section('content')
    @php
        $steps = ['Data Siswa', 'Data Orang Tua', 'Alamat', 'Riwayat Sekolah', 'Upload Dokumen', 'Review', 'Selesai'];
        $currentStep = 1;
        $fields = [
            ['label' => 'Nama Lengkap Siswa', 'required' => true, 'placeholder' => 'Contoh: Aisyah Putri Ramadhani', 'icon' => 'heroicons:user'],
            ['label' => 'Nama Panggilan', 'required' => false, 'placeholder' => 'Contoh: Aisyah', 'icon' => 'heroicons:user'],
            ['label' => 'NISN', 'required' => true, 'placeholder' => 'Contoh: 0102030405', 'icon' => 'heroicons:identification'],
            ['label' => 'NIK', 'required' => true, 'placeholder' => 'Contoh: 3273xxxxxxxxxxxx', 'icon' => 'heroicons:identification'],
            ['label' => 'Tempat Lahir', 'required' => true, 'placeholder' => 'Contoh: Bandung', 'icon' => 'heroicons:map-pin'],
            ['label' => 'Tanggal Lahir', 'required' => true, 'placeholder' => 'Pilih tanggal lahir', 'icon' => 'heroicons:calendar-days', 'suffix' => 'heroicons:calendar-days'],
            ['label' => 'Jenis Kelamin', 'required' => true, 'type' => 'radio'],
            ['label' => 'Agama', 'required' => true, 'placeholder' => 'Pilih agama', 'icon' => 'heroicons:chevron-down', 'type' => 'select'],
            ['label' => 'Kewarganegaraan', 'required' => true, 'placeholder' => 'Warga Negara Indonesia (WNI)', 'icon' => 'heroicons:chevron-down', 'type' => 'select'],
            ['label' => 'Jumlah Saudara', 'required' => true, 'placeholder' => 'Pilih jumlah saudara', 'icon' => 'heroicons:chevron-down', 'type' => 'select'],
            ['label' => 'Anak ke', 'required' => true, 'placeholder' => 'Pilih anak ke', 'icon' => 'heroicons:chevron-down', 'type' => 'select'],
            ['label' => 'Jalur Pendaftaran', 'required' => true, 'placeholder' => 'Pilih jalur pendaftaran', 'icon' => 'heroicons:chevron-down', 'type' => 'select'],
            ['label' => 'Jenjang / Unit Tujuan', 'required' => true, 'placeholder' => 'Pilih jenjang / unit tujuan', 'icon' => 'heroicons:chevron-down', 'type' => 'select'],
            ['label' => 'Asal Sekolah', 'required' => true, 'placeholder' => 'Contoh: SD Islam Al Azhar 35', 'icon' => 'heroicons:building-library'],
        ];
    @endphp

    <section class="step-card form-step-card">
        @foreach ($steps as $index => $label)
            @php $number = $index + 1; @endphp
            <div class="step-item {{ $number < $currentStep ? 'is-done' : '' }} {{ $number === $currentStep ? 'is-current' : '' }}">
                <div class="step-line"></div>
                <span>{{ $number }}</span>
                <strong>{{ $label }}</strong>
            </div>
        @endforeach
    </section>

    <div class="content-grid form-registration-grid">
        <section class="document-panel registration-form-panel">
            <div class="registration-form-head">
                <div>
                    <h2>Form Pendaftaran PPDB</h2>
                    <p>Lengkapi data calon siswa dengan benar</p>
                </div>
                <span>* Wajib diisi</span>
            </div>

            <div class="registration-form-layout">
                <div class="student-fields">
                    @foreach ($fields as $field)
                        <label class="registration-field {{ ($field['type'] ?? 'text') === 'radio' ? 'gender-field' : '' }}">
                            <span>{{ $field['label'] }} @if ($field['required']) <em>*</em> @endif</span>

                            @if (($field['type'] ?? 'text') === 'radio')
                                <div class="radio-row">
                                    <span class="radio-option is-selected"><i></i>Laki-laki</span>
                                    <span class="radio-option"><i></i>Perempuan</span>
                                </div>
                            @else
                                <span class="registration-input {{ ($field['type'] ?? 'text') === 'select' ? 'is-select' : '' }}">
                                    <iconify-icon icon="{{ $field['icon'] }}"></iconify-icon>
                                    <input type="text" placeholder="{{ $field['placeholder'] }}">
                                    @if (! empty($field['suffix']))
                                        <iconify-icon icon="{{ $field['suffix'] }}"></iconify-icon>
                                    @elseif (($field['type'] ?? 'text') === 'select')
                                        <iconify-icon icon="heroicons:chevron-down"></iconify-icon>
                                    @endif
                                </span>
                            @endif
                        </label>
                    @endforeach
                </div>

                <aside class="photo-upload-card">
                    <span>Foto Calon Siswa <em>*</em></span>
                    <div class="photo-dropzone">
                        <div class="photo-avatar">
                            <iconify-icon icon="heroicons:user"></iconify-icon>
                            <b><iconify-icon icon="heroicons:camera"></iconify-icon></b>
                        </div>
                        <strong>Klik untuk unggah foto<br>atau drag & drop</strong>
                    </div>
                    <p>Format JPG/PNG, maks. 2MB<br>Rasio 3x4, foto terbaru</p>
                    <div class="photo-tip">
                        <iconify-icon icon="heroicons:information-circle"></iconify-icon>
                        <span>Pastikan foto jelas, menghadap depan, dan latar belakang polos.</span>
                    </div>
                </aside>
            </div>

            <div class="alert-note registration-alert">
                <iconify-icon icon="solar:danger-triangle-outline"></iconify-icon>
                <span>Pastikan data yang Anda masukkan sesuai dengan dokumen resmi. Data yang sudah disimpan dapat diperbarui sebelum tahap ini.</span>
            </div>

            <div class="form-actions registration-actions">
                <a href="{{ route('ppdb.dashboard') }}" class="btn btn-light"><iconify-icon icon="solar:arrow-left-linear"></iconify-icon>Kembali</a>
                <button class="btn btn-light"><iconify-icon icon="solar:diskette-outline"></iconify-icon>Simpan Draft</button>
                <a href="{{ route('ppdb.documents') }}" class="btn btn-primary">Lanjut ke Data Orang Tua<iconify-icon icon="solar:arrow-right-linear"></iconify-icon></a>
            </div>
        </section>

        <aside class="side-stack">
            <section class="info-card">
                <h3><iconify-icon icon="solar:book-2-outline"></iconify-icon>Informasi Pendaftaran</h3>
                <dl>
                    <div><dt>Tahun Ajaran</dt><dd>2026/2027</dd></div>
                    <div><dt>Jenjang Tujuan</dt><dd>SD Al Azhar Syifa Budi Parahyangan</dd></div>
                    <div><dt>Gelombang</dt><dd>Gelombang 1</dd></div>
                    <div><dt>Jalur Pendaftaran</dt><dd>-</dd></div>
                </dl>
                <button><iconify-icon icon="solar:pen-new-square-outline"></iconify-icon>Ubah Pilihan</button>
            </section>

            <section class="info-card progress-card registration-progress-card">
                <div class="progress-head">
                    <div>
                        <h3>Progress Pendaftaran</h3>
                        <small>Langkah 1 dari 7</small>
                    </div>
                    <strong>14%</strong>
                </div>
                <div class="progress-track"><span></span></div>
                <ol class="mini-steps">
                    @foreach ($steps as $index => $label)
                        @php $number = $index + 1; @endphp
                        <li class="{{ $number === $currentStep ? 'current' : '' }}">
                            <span class="mini-status">{{ $number === $currentStep ? '1' : '' }}</span>
                            <span class="mini-number">{{ $number }}</span>
                            {{ $label }}
                        </li>
                    @endforeach
                </ol>
            </section>
        </aside>
    </div>
@endsection
