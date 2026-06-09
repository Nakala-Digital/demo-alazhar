<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'role' => ['required', 'in:parent,admin'],
        'identifier' => ['required', 'string'],
        'password' => ['required', 'string'],
    ], [
        'identifier.required' => 'Email, nomor HP, atau NISN wajib diisi.',
        'password.required' => 'Kata sandi wajib diisi.',
    ]);

    $identifier = strtolower(trim($credentials['identifier']));
    $isParent = $credentials['role'] === 'parent'
        && in_array($identifier, ['orangtua', 'siswa', 'calon', '081122334455', '1234567890'], true)
        && $credentials['password'] === 'password';
    $isAdmin = $credentials['role'] === 'admin'
        && in_array($identifier, ['admin', 'panitia'], true)
        && $credentials['password'] === 'admin';

    if (! $isParent && ! $isAdmin) {
        return back()
            ->withInput($request->except('password'))
            ->withErrors([
                'login' => 'Data masuk tidak sesuai dengan role yang dipilih. Periksa kembali akun dan kata sandi Anda.',
            ]);
    }

    $request->session()->put('ppdb_role', $credentials['role']);

    return redirect()->route($isAdmin ? 'admin.dashboard' : 'dashboard.index');
})->name('login.submit');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/', fn () => view('dokumen.index', [
    'pageTitle' => 'Dokumen',
    'active' => 'dokumen',
    'pageDescription' => 'Unggah dan kelola dokumen persyaratan pendaftaran siswa.',
]))->name('ppdb.home');

Route::get('/dashboard', fn () => view('dashboard.index', [
    'pageTitle' => 'Dashboard',
    'active' => 'dashboard',
    'pageDescription' => 'Ringkasan status pendaftaran, jadwal penting, dan informasi terbaru PPDB.',
]))->name('ppdb.dashboard');

Route::get('/form-pendaftaran', fn () => view('form-pendaftaran.index', [
    'pageTitle' => 'Form Pendaftaran',
    'active' => 'form',
    'pageDescription' => 'Lengkapi data siswa, data orang tua, alamat, dan riwayat sekolah.',
]))->name('ppdb.form');

Route::get('/dokumen', fn () => view('dokumen.index', [
    'pageTitle' => 'Dokumen',
    'active' => 'dokumen',
    'pageDescription' => 'Unggah dan kelola dokumen persyaratan pendaftaran siswa.',
]))->name('ppdb.documents');

Route::get('/jadwal', fn () => view('jadwal.index', [
    'pageTitle' => 'Jadwal',
    'active' => 'jadwal',
    'pageDescription' => 'Pantau jadwal seleksi, verifikasi berkas, observasi, dan pengumuman.',
]))->name('ppdb.schedule');

Route::get('/pengumuman', fn () => view('pengumuman.index', [
    'pageTitle' => 'Pengumuman',
    'active' => 'pengumuman',
    'pageDescription' => 'Informasi resmi seputar status pendaftaran dan hasil seleksi.',
]))->name('ppdb.announcements');

Route::get('/pengaturan', fn () => view('pengaturan.index', [
    'pageTitle' => 'Pengaturan',
    'active' => 'pengaturan',
    'pageDescription' => 'Kelola profil akun, kontak, dan preferensi notifikasi.',
]))->name('ppdb.settings');

Route::get('/review', fn () => view('review.index', [
    'pageTitle' => 'Review',
    'active' => 'dokumen',
    'pageDescription' => 'Tinjau kembali data dan dokumen sebelum dikirimkan ke panitia PPDB.',
]))->name('ppdb.review');

Route::get('/keluar', fn () => view('keluar.index', [
    'pageTitle' => 'Keluar',
    'active' => 'logout',
    'pageDescription' => 'Anda dapat keluar dari portal setelah memastikan perubahan tersimpan.',
]))->name('ppdb.logout');
