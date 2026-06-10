<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#082b63">
        <title>Masuk Portal PPDB | Al Azhar Syifa Budi Parahyangan</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="ppdb-page login-page">
        <header class="topbar">
            <div class="brand-lockup">
                <img class="school-logo school-logo--header" src="{{ asset('images/logo-alazhar.png') }}" alt="Logo Al Azhar Syifa Budi Parahyangan">
                <div class="brand-copy">
                    <strong>Al Azhar Syifa Budi Parahyangan</strong>
                    <span class="brand-divider" aria-hidden="true"></span>
                    <span>PPDB Portal 2026/2027</span>
                </div>
            </div>

            <div class="header-support">
                <div class="support-item">
                    <span class="support-icon support-icon--green">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.45L3 20.5l1.55-5.25A8.5 8.5 0 1 1 21 11.5Z"/><path d="M8.2 7.4c.3-.3.7-.2.9.2l1 2c.2.3.1.7-.2.9l-.7.6c.6 1.5 1.8 2.7 3.3 3.3l.6-.7c.2-.3.6-.4.9-.2l2 1c.4.2.5.6.2.9-.7.9-1.7 1.3-2.8 1.1-3.6-.7-6.4-3.5-7.1-7.1-.2-1.1.2-2.1 1.1-2.8Z"/></svg>
                    </span>
                    <span><small>Butuh bantuan?</small><strong>0811-2233-4455</strong></span>
                </div>
                <div class="support-item">
                    <span class="support-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                    </span>
                    <span><small>Jam Layanan</small><strong>08.00 - 16.00 WIB</strong></span>
                </div>
            </div>
        </header>

        <main class="auth-shell">
            <section class="hero-panel">
                <img class="hero-background" src="{{ asset('images/background-login.png') }}" alt="" aria-hidden="true">
                <div class="hero-shade" aria-hidden="true"></div>
                <div class="hero-content">
                    <img class="hero-wordmark" src="{{ asset('images/logo-besar-alazhar-hero.png') }}" alt="Al Azhar Syifa Budi Parahyangan, PG-TK, SD, SMP, dan SMA">

                    <div class="hero-copy">
                        <h1>Mulai langkah baru<br><span>menuju masa depan.</span></h1>
                        <p>Sistem Penerimaan Peserta Didik Baru.<br>Daftar, lengkapi dokumen, dan pantau status seleksi<br>dalam satu portal terintegrasi.</p>
                    </div>

                    <div class="benefit-grid">
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><path d="M6 3h12v18H6zM9 7h6M9 11h6M12 4v16"/></svg></span>
                            <p>Nilai Islami</p>
                        </div>
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><path d="m3 9 9-5 9 5-9 5-9-5ZM7 12v5c3 2 7 2 10 0v-5"/></svg></span>
                            <p>Pendidikan<br>Berkualitas</p>
                        </div>
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><circle cx="5" cy="10" r="2"/><circle cx="19" cy="10" r="2"/><path d="M7 20v-3a5 5 0 0 1 10 0v3M2 19v-2a3 3 0 0 1 4-3M22 19v-2a3 3 0 0 0-4-3"/></svg></span>
                            <p>Pembinaan<br>Karakter</p>
                        </div>
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18"/></svg></span>
                            <p>Wawasan<br>Global</p>
                        </div>
                    </div>
                </div>

                <div class="security-badge">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"/><path d="m8.5 12 2.2 2.2 4.8-5"/></svg>
                    <span>Akses aman dan terintegrasi untuk proses PPDB 2026/2027.</span>
                </div>
            </section>

            <section class="login-panel">
                <div class="login-card">
                    <div class="login-heading">
                        <h2>Masuk ke Portal PPDB</h2>
                        <p>Akses portal pendaftaran untuk melanjutkan<br>proses penerimaan peserta didik baru.</p>
                    </div>

                    <form action="{{ route('login.submit') }}" method="POST" class="login-form" novalidate>
                        @csrf
                        <input type="hidden" name="role" id="selected-role" value="{{ old('role', 'parent') }}">

                        @if (session('success'))
                            <div class="form-success" role="status">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8 12 2.5 2.5L16 9"/></svg>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <div class="role-tabs" role="tablist" aria-label="Pilih role login">
                            <button type="button" class="role-tab" data-role="parent">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></svg>
                                Orang Tua / Calon Siswa
                            </button>
                            <button type="button" class="role-tab" data-role="admin">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></svg>
                                Admin / Panitia
                            </button>
                        </div>

                        @if ($errors->has('login'))
                            <div class="form-alert" role="alert">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v6M12 17h.01"/></svg>
                                <span>{{ $errors->first('login') }}</span>
                            </div>
                        @endif

                        <label class="field-label" for="identifier">Email / No. HP / NISN</label>
                        <div class="input-wrap @error('identifier') input-wrap--error @enderror">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M6 20v-2a5 5 0 0 1 5-5h2a5 5 0 0 1 5 5v2"/></svg>
                            <input id="identifier" name="identifier" type="text" value="{{ old('identifier') }}" placeholder="Contoh: nama@email.com / 0812xxxxxxx / 1234567890" autocomplete="username">
                        </div>
                        @error('identifier')<p class="field-error">{{ $message }}</p>@enderror

                        <label class="field-label" for="password">Kata Sandi</label>
                        <div class="input-wrap @error('password') input-wrap--error @enderror">
                            <svg viewBox="0 0 24 24"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3M12 14v2"/></svg>
                            <input id="password" name="password" type="password" placeholder="Masukkan kata sandi Anda" autocomplete="current-password">
                            <button type="button" class="password-toggle" aria-label="Tampilkan kata sandi" aria-pressed="false">
                                <svg class="eye-open" viewBox="0 0 24 24"><path d="M3 12s3.5-6 9-6 9 6 9 6-3.5 6-9 6-9-6-9-6Z"/><circle cx="12" cy="12" r="2.5"/></svg>
                                <svg class="eye-closed" viewBox="0 0 24 24"><path d="m4 4 16 16M10.6 6.2A9 9 0 0 1 12 6c5.5 0 9 6 9 6a15 15 0 0 1-2.2 2.8M6.2 6.2C4.2 7.6 3 12 3 12s3.5 6 9 6c1 0 1.9-.2 2.7-.5"/></svg>
                            </button>
                        </div>
                        @error('password')<p class="field-error">{{ $message }}</p>@enderror

                        <div class="form-options">
                            <label class="remember-check">
                                <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                                <span><svg viewBox="0 0 16 16"><path d="m3 8 3 3 7-7"/></svg></span>
                                Ingat saya di perangkat ini
                            </label>
                            <button type="button" class="text-link">Lupa password?</button>
                        </div>

                        <button type="submit" class="button button--primary">
                            <svg viewBox="0 0 24 24"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3"/></svg>
                            Masuk ke Portal
                        </button>
                        <a href="{{ route('register') }}" class="button button--outline">
                            <svg viewBox="0 0 24 24"><circle cx="10" cy="8" r="3"/><path d="M4 20v-2a5 5 0 0 1 5-5h2a5 5 0 0 1 5 5v2M18 8v6M15 11h6"/></svg>
                            Daftar Akun Baru
                        </a>

                        <div class="form-divider"><span>ATAU</span></div>

                        <button type="button" class="button button--google demo-action">
                            <span class="google-g">G</span>
                            Masuk dengan Google
                        </button>
                        <button type="button" class="status-button demo-action">
                            <span>
                                <svg viewBox="0 0 24 24"><rect x="6" y="3" width="12" height="18" rx="2"/><path d="M9 8h6M9 12h6M9 16h4"/></svg>
                                Cek Status Pendaftaran
                            </span>
                            <svg viewBox="0 0 24 24"><path d="m9 5 7 7-7 7"/></svg>
                        </button>
                        <p class="demo-note" aria-live="polite"></p>
                    </form>
                </div>
            </section>
        </main>

        <footer class="info-footer">
            <div class="footer-item">
                <svg viewBox="0 0 24 24"><path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"/><path d="m8.5 12 2.2 2.2 4.8-5"/></svg>
                <span><strong>PPDB 2026/2027</strong><small>Tahun Ajaran 2026/2027</small></span>
            </div>
            <div class="footer-item">
                <svg class="green" viewBox="0 0 24 24"><path d="M5 4h4l2 5-3 2c1.5 3 3.5 5 6.5 6.5l2-3 5 2v4c0 1-1 2-2 2C10 22 2 14 2 5c0-1 1-2 3-1Z"/></svg>
                <span><small>Informasi PPDB</small><strong>0811-2233-4455</strong></span>
            </div>
            <div class="footer-item">
                <svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg>
                <span><small>Email Resmi</small><strong>ppdb@alazhar-sbp.sch.id</strong></span>
            </div>
            <div class="footer-item">
                <svg viewBox="0 0 24 24"><path d="M6 3h9l4 4v14H6zM14 3v5h5M9 12h7M9 16h7"/></svg>
                <span><small>Panduan Pendaftaran</small><strong class="green-text">Unduh Panduan</strong></span>
            </div>
            <div class="footer-item">
                <svg class="green" viewBox="0 0 24 24"><rect x="5" y="10" width="14" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3M12 14v3"/></svg>
                <span><small>Keamanan Terjamin</small><strong>Data Anda Aman &amp; Terlindungi</strong></span>
            </div>
        </footer>
    </body>
</html>
