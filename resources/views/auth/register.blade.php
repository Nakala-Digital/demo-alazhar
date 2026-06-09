<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#082b63">
        <title>Daftar Akun Baru | PPDB Al Azhar Syifa Budi Parahyangan</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="ppdb-page register-page">
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

        <main class="auth-shell register-shell">
            <section class="hero-panel register-hero">
                <img class="hero-background" src="{{ asset('images/background-register.png') }}" alt="" aria-hidden="true">
                <div class="hero-shade" aria-hidden="true"></div>
                <div class="register-hero-content">
                    <div class="register-kicker"><strong>02</strong><span>Daftar Akun Baru</span></div>
                    <img class="hero-wordmark register-wordmark" src="{{ asset('images/logo-besar-alazhar-hero.png') }}" alt="Al Azhar Syifa Budi Parahyangan, PG-TK, SD, SMP, dan SMA">

                    <div class="hero-copy register-hero-copy">
                        <h1>Buat akun baru<br><span>untuk memulai PPDB.</span></h1>
                        <p>Satu akun orang tua untuk mendaftarkan putra/putri Anda,<br>mengunggah dokumen dengan mudah, dan memantau<br>status pendaftaran secara real-time.</p>
                    </div>

                    <div class="benefit-grid register-benefits">
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><circle cx="8" cy="8" r="3"/><circle cx="16" cy="8" r="3"/><path d="M2 20v-2a5 5 0 0 1 10 0v2M12 20v-2a5 5 0 0 1 10 0v2"/></svg></span>
                            <p>Satu akun untuk<br>beberapa anak</p>
                        </div>
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                            <p>Pantau status<br>real-time</p>
                        </div>
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><path d="M6 3h9l4 4v14H6zM14 3v5h5M9 13h6M12 10v6"/></svg></span>
                            <p>Upload dokumen<br>mudah</p>
                        </div>
                        <div class="benefit">
                            <span><svg viewBox="0 0 24 24"><path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"/><path d="m8.5 12 2.2 2.2 4.8-5"/></svg></span>
                            <p>Aman &amp;<br>terpercaya</p>
                        </div>
                    </div>
                </div>

                <div class="security-badge register-security-badge">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"/><path d="m8.5 12 2.2 2.2 4.8-5"/></svg>
                    <span>Satu akun dapat digunakan untuk jenjang PG - TK, SD, SMP, dan SMA</span>
                </div>
            </section>

            <section class="login-panel register-panel">
                <div class="login-card register-card">
                    <div class="login-heading register-heading">
                        <h2>Daftar Akun Baru</h2>
                        <p>Lengkapi data berikut untuk membuat akun orang tua / wali.</p>
                    </div>

                    <form action="{{ route('register.submit') }}" method="POST" class="register-form" novalidate>
                        @csrf
                        <input id="register-account-type" type="hidden" name="account_type" value="{{ old('account_type', 'parent') }}">

                        <div class="role-tabs register-role-tabs" aria-label="Jenis akun">
                            <button type="button" class="role-tab is-active" data-register-role="parent" aria-selected="true">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></svg>
                                Orang Tua / Wali
                            </button>
                            <button type="button" class="role-tab register-admin-tab" data-register-role="admin" aria-selected="false">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2"/></svg>
                                Panitia / Admin
                            </button>
                        </div>

                        <div class="register-grid">
                            <div class="register-field">
                                <label class="field-label" for="name">Nama Lengkap Orang Tua / Wali</label>
                                <div class="input-wrap @error('name') input-wrap--error @enderror">
                                    <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M6 20v-2a5 5 0 0 1 5-5h2a5 5 0 0 1 5 5v2"/></svg>
                                    <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Contoh: Ahmad Fauzi" autocomplete="name">
                                </div>
                                @error('name')<p class="field-error">{{ $message }}</p>@enderror
                            </div>

                            <div class="register-field">
                                <label class="field-label" for="email">Email</label>
                                <div class="input-wrap @error('email') input-wrap--error @enderror">
                                    <svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Contoh: email@gmail.com" autocomplete="email">
                                </div>
                                @error('email')<p class="field-error">{{ $message }}</p>@enderror
                            </div>

                            <div class="register-field">
                                <label class="field-label" for="phone">No. HP / WhatsApp</label>
                                <div class="input-wrap @error('phone') input-wrap--error @enderror">
                                    <svg viewBox="0 0 24 24"><path d="M5 4h4l2 5-3 2c1.5 3 3.5 5 6.5 6.5l2-3 5 2v4c0 1-1 2-2 2C10 22 2 14 2 5c0-1 1-2 3-1Z"/></svg>
                                    <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" placeholder="Contoh: 0812-xxxx-xxxx" autocomplete="tel">
                                </div>
                                @error('phone')<p class="field-error">{{ $message }}</p>@enderror
                            </div>

                            <div class="register-field">
                                <label class="field-label" for="register-password">Password</label>
                                <div class="input-wrap @error('password') input-wrap--error @enderror">
                                    <svg viewBox="0 0 24 24"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3M12 14v2"/></svg>
                                    <input id="register-password" name="password" type="password" placeholder="Minimal 8 karakter" autocomplete="new-password">
                                    <button type="button" class="password-toggle" data-target="register-password" aria-label="Tampilkan kata sandi" aria-pressed="false">
                                        <svg class="eye-open" viewBox="0 0 24 24"><path d="M3 12s3.5-6 9-6 9 6 9 6-3.5 6-9 6-9-6-9-6Z"/><circle cx="12" cy="12" r="2.5"/></svg>
                                        <svg class="eye-closed" viewBox="0 0 24 24"><path d="m4 4 16 16M10.6 6.2A9 9 0 0 1 12 6c5.5 0 9 6 9 6a15 15 0 0 1-2.2 2.8M6.2 6.2C4.2 7.6 3 12 3 12s3.5 6 9 6c1 0 1.9-.2 2.7-.5"/></svg>
                                    </button>
                                </div>
                                @error('password')<p class="field-error">{{ $message }}</p>@enderror
                            </div>

                            <div class="register-field">
                                <label class="field-label" for="password-confirmation">Konfirmasi Password</label>
                                <div class="input-wrap">
                                    <svg viewBox="0 0 24 24"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3M12 14v2"/></svg>
                                    <input id="password-confirmation" name="password_confirmation" type="password" placeholder="Ulangi password Anda" autocomplete="new-password">
                                    <button type="button" class="password-toggle" data-target="password-confirmation" aria-label="Tampilkan kata sandi" aria-pressed="false">
                                        <svg class="eye-open" viewBox="0 0 24 24"><path d="M3 12s3.5-6 9-6 9 6 9 6-3.5 6-9 6-9-6-9-6Z"/><circle cx="12" cy="12" r="2.5"/></svg>
                                        <svg class="eye-closed" viewBox="0 0 24 24"><path d="m4 4 16 16M10.6 6.2A9 9 0 0 1 12 6c5.5 0 9 6 9 6a15 15 0 0 1-2.2 2.8M6.2 6.2C4.2 7.6 3 12 3 12s3.5 6 9 6c1 0 1.9-.2 2.7-.5"/></svg>
                                    </button>
                                </div>
                            </div>

                            <div class="register-field">
                                <label class="field-label" for="relationship">Hubungan dengan Siswa</label>
                                <div class="input-wrap select-wrap @error('relationship') input-wrap--error @enderror">
                                    <select id="relationship" name="relationship">
                                        <option value="">Pilih hubungan</option>
                                        <option value="ayah" @selected(old('relationship') === 'ayah')>Ayah</option>
                                        <option value="ibu" @selected(old('relationship') === 'ibu')>Ibu</option>
                                        <option value="wali" @selected(old('relationship') === 'wali')>Wali</option>
                                        <option value="saudara" @selected(old('relationship') === 'saudara')>Saudara</option>
                                        <option value="lainnya" @selected(old('relationship') === 'lainnya')>Lainnya</option>
                                    </select>
                                    <svg viewBox="0 0 24 24"><path d="m7 9 5 5 5-5"/></svg>
                                </div>
                                @error('relationship')<p class="field-error">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <label class="remember-check register-terms">
                            <input type="checkbox" name="terms" value="1" {{ old('terms') ? 'checked' : '' }}>
                            <span><svg viewBox="0 0 16 16"><path d="m3 8 3 3 7-7"/></svg></span>
                            <span>Saya menyetujui <a href="#">Syarat &amp; Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> yang berlaku.</span>
                        </label>
                        @error('terms')<p class="field-error register-terms-error">{{ $message }}</p>@enderror

                        <button type="submit" class="button button--primary register-submit">
                            <svg viewBox="0 0 24 24"><rect x="6" y="10" width="12" height="10" rx="2"/><path d="M9 10V7a3 3 0 0 1 6 0v3"/></svg>
                            Buat Akun
                        </button>

                        <div class="form-divider register-divider"><span>ATAU</span></div>

                        <button type="button" class="button button--google demo-action">
                            <span class="google-g">G</span>
                            Daftar dengan Google
                        </button>

                        <p class="register-login-link">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                        <p class="demo-note" aria-live="polite"></p>
                    </form>
                </div>

                <div class="register-info-box">
                    <svg viewBox="0 0 24 24"><path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"/><path d="m8.5 12 2.2 2.2 4.8-5"/></svg>
                    <span>Kami akan mengirimkan kode verifikasi melalui email atau WhatsApp Anda.</span>
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
