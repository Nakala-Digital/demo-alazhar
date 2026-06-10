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
                <div class="brand-copy flex items-center">
                    <strong class="text-[#092f6a] text-[17px] font-bold tracking-tight">Al Azhar Syifa Budi Parahyangan</strong>
                    <span class="w-[1px] h-5 bg-slate-300 mx-4" aria-hidden="true"></span>
                    <span class="text-slate-500 text-[15px] font-medium tracking-wide">PPDB Portal 2026/2027</span>
                </div>
            </div>

            <div class="header-support">
                <div class="support-item">
                    <span class="support-icon support-icon--green">
                        <svg viewBox="0 0 24 24" aria-hidden="true" style="fill: currentColor; stroke: none;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.82 9.82 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
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
                <div class="w-full max-w-[660px] mx-auto p-4 sm:p-6 lg:p-7 bg-slate-50/70 border border-slate-100/50 rounded-[32px] shadow-[0_8px_30px_rgba(0,0,0,0.02)]">
                    <div class="login-card !m-0 !max-w-none !shadow-[0_8px_24px_rgba(11,35,74,0.04)]">
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
                            <button type="button" class="role-tab {{ old('role', 'parent') === 'parent' ? 'is-active' : '' }}" data-role="parent">
                                <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px]"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></svg>
                                Orang Tua / Calon Siswa
                            </button>
                            <button type="button" class="role-tab {{ old('role') === 'admin' ? 'is-active' : '' }}" data-role="admin">
                                <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px]"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></svg>
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
                            <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px] !stroke-[1.5] text-slate-400"><circle cx="12" cy="8" r="3"/><path d="M6 20v-2a5 5 0 0 1 5-5h2a5 5 0 0 1 5 5v2"/></svg>
                            <input id="identifier" name="identifier" type="text" value="{{ old('identifier') }}" placeholder="Contoh: nama@email.com / 0812xxxxxxx / 1234567890" autocomplete="username">
                        </div>
                        @error('identifier')<p class="field-error">{{ $message }}</p>@enderror

                        <label class="field-label" for="password">Kata Sandi</label>
                        <div class="input-wrap @error('password') input-wrap--error @enderror">
                            <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px] !stroke-[1.5] text-slate-400"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3M12 14v2"/></svg>
                            <input id="password" name="password" type="password" placeholder="Masukkan kata sandi Anda" autocomplete="current-password">
                            <button type="button" class="password-toggle" aria-label="Tampilkan kata sandi" aria-pressed="false">
                                <svg class="eye-open !w-[18px] !h-[18px] !stroke-[1.5]" viewBox="0 0 24 24"><path d="M3 12s3.5-6 9-6 9 6 9 6-3.5 6-9 6-9-6-9-6Z"/><circle cx="12" cy="12" r="2.5"/></svg>
                                <svg class="eye-closed !w-[18px] !h-[18px] !stroke-[1.5]" viewBox="0 0 24 24"><path d="m4 4 16 16M10.6 6.2A9 9 0 0 1 12 6c5.5 0 9 6 9 6a15 15 0 0 1-2.2 2.8M6.2 6.2C4.2 7.6 3 12 3 12s3.5 6 9 6c1 0 1.9-.2 2.7-.5"/></svg>
                            </button>
                        </div>
                        @error('password')<p class="field-error">{{ $message }}</p>@enderror

                        <div class="form-options">
                            <label class="remember-check">
                                <input type="checkbox" name="remember" value="1" {{ old('remember', true) ? 'checked' : '' }}>
                                <span><svg viewBox="0 0 16 16"><path d="m3 8 3 3 7-7"/></svg></span>
                                Ingat saya di perangkat ini
                            </label>
                            <button type="button" class="text-link">Lupa password?</button>
                        </div>

                        <button type="submit" class="button button--primary">
                            <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px] !stroke-2"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3"/></svg>
                            Masuk ke Portal
                        </button>
                        <a href="{{ route('register') }}" class="button button--outline">
                            <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px] !stroke-2"><circle cx="10" cy="8" r="3"/><path d="M4 20v-2a5 5 0 0 1 5-5h2a5 5 0 0 1 5 5v2M18 8v6M15 11h6"/></svg>
                            Daftar Akun Baru
                        </a>

                        <div class="form-divider"><span>ATAU</span></div>

                        <button type="button" class="button button--google demo-action">
                            <span class="google-icon mr-2 flex items-center justify-center" aria-hidden="true">
                                <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px]" style="fill: none; stroke: none;" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                </svg>
                            </span>
                            Masuk dengan Google
                        </button>
                        <button type="button" class="status-button demo-action">
                            <span>
                                <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px] !stroke-[1.5]"><rect x="6" y="3" width="12" height="18" rx="2"/><path d="M9 8h6M9 12h6M9 16h4"/></svg>
                                Cek Status Pendaftaran
                            </span>
                            <svg viewBox="0 0 24 24" class="!w-[18px] !h-[18px] !stroke-[1.5]"><path d="m9 5 7 7-7 7"/></svg>
                        </button>
                        <p class="demo-note" aria-live="polite"></p>
                    </form>
                </div>
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
