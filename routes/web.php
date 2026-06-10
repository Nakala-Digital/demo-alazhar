<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Register inline middlewares
app('router')->aliasMiddleware('guest_guard', function (Request $request, Closure $next) {
    if ($request->session()->get('ppdb_auth')) {
        if ($request->session()->get('ppdb_role') === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('ppdb.dashboard');
    }
    return $next($request);
});

app('router')->aliasMiddleware('parent_guard', function (Request $request, Closure $next) {
    if (!$request->session()->get('ppdb_auth')) {
        return redirect()->route('login');
    }
    if ($request->session()->get('ppdb_role') === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return $next($request);
});

app('router')->aliasMiddleware('admin_guard', function (Request $request, Closure $next) {
    if (!$request->session()->get('ppdb_auth')) {
        return redirect()->route('login');
    }
    if ($request->session()->get('ppdb_role') !== 'admin') {
        return redirect()->route('ppdb.dashboard');
    }
    return $next($request);
});

// Redirect / to /login if not logged in, or to respective dashboard if logged in.
Route::get('/', function (Request $request) {
    if ($request->session()->get('ppdb_auth')) {
        if ($request->session()->get('ppdb_role') === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('ppdb.dashboard');
    }
    return redirect()->route('login');
});

Route::middleware(['guest_guard'])->group(function () {
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

        $user = null;
        if ($credentials['role'] === 'parent' && $credentials['password'] === 'password') {
            $parents = \App\Support\PpdbDummyData::parents();
            foreach ($parents as $parent) {
                if ($parent['username'] === $identifier) {
                    $user = [
                        'name' => $parent['name'],
                        'email' => $parent['email'],
                    ];
                    break;
                }
            }
            // Fallback for valid generic identifiers
            if (!$user && in_array($identifier, ['orangtua', 'siswa', 'calon', '081122334455', '1234567890'], true)) {
                $user = [
                    'name' => 'Ahmad Fauzi',
                    'email' => 'ahmad.fauzi@example.com',
                ];
            }
        } elseif ($credentials['role'] === 'admin' && $credentials['password'] === 'admin') {
            $admins = \App\Support\PpdbDummyData::admins();
            foreach ($admins as $admin) {
                if ($admin['username'] === $identifier) {
                    $user = [
                        'name' => $admin['name'],
                        'email' => $admin['email'],
                    ];
                    break;
                }
            }
            // Fallback for valid generic identifiers
            if (!$user && in_array($identifier, ['admin', 'panitia'], true)) {
                $user = [
                    'name' => 'Panitia PPDB',
                    'email' => 'admin@alazhar-sbp.sch.id',
                ];
            }
        }

        if (!$user) {
            return back()
                ->withInput($request->except('password'))
                ->withErrors([
                    'login' => 'Akun atau kata sandi tidak sesuai. Silakan periksa kembali data Anda.',
                ]);
        }

        session([
            'ppdb_auth' => true,
            'ppdb_role' => $credentials['role'],
            'ppdb_user' => $user,
        ]);

        return redirect()->route($credentials['role'] === 'admin' ? 'admin.dashboard' : 'ppdb.dashboard');
    })->name('login.submit');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', function (Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'relationship' => ['required', 'in:ayah,ibu,wali,saudara,lainnya'],
            'terms' => ['accepted'],
        ], [
            'name.required' => 'Nama lengkap orang tua atau wali wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email belum sesuai.',
            'phone.required' => 'Nomor HP atau WhatsApp wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal terdiri dari 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak sama.',
            'relationship.required' => 'Pilih hubungan Anda dengan siswa.',
            'relationship.in' => 'Pilihan hubungan dengan siswa tidak valid.',
            'terms.accepted' => 'Anda harus menyetujui syarat dan kebijakan privasi.',
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Akun berhasil dibuat. Silakan masuk menggunakan akun Anda.');
    })->name('register.submit');
});

Route::get('/keluar', function (Request $request) {
    $request->session()->forget(['ppdb_auth', 'ppdb_role', 'ppdb_user']);
    return redirect()->route('login')->with('success', 'Anda berhasil keluar.');
})->name('ppdb.logout');

Route::middleware(['parent_guard'])->group(function () {
    Route::get('/dashboard', fn () => view('dashboard.index', [
        'pageTitle' => 'Dashboard',
        'active' => 'dashboard',
        'bodyClass' => 'parent-dashboard-page',
        'pageDescription' => 'Ringkasan status pendaftaran, jadwal penting, dan informasi terbaru PPDB.',
    ]))->name('ppdb.dashboard');

    Route::get('/form-pendaftaran', fn () => view('form-pendaftaran.index', [
        'pageTitle' => 'Form Pendaftaran',
        'active' => 'form',
        'bodyClass' => 'form-registration-page',
        'pageDescription' => 'Lengkapi data siswa, data orang tua, alamat, dan riwayat sekolah.',
    ]))->name('ppdb.form');

    Route::get('/dokumen', fn () => view('dokumen.index', [
        'pageTitle' => 'Dokumen',
        'active' => 'dokumen',
        'pageDescription' => 'Unggah dan kelola dokumen persyaratan pendaftaran siswa.',
    ]))->name('ppdb.documents');

    Route::get('/status-pendaptaran', fn () => view('status-pendaptaran.index', [
        'pageTitle' => 'Status Pendaftaran',
        'active' => 'status',
        'bodyClass' => 'status-registration-page',
    ]))->name('ppdb.status');

    Route::get('/jadwal', fn () => view('jadwal.index', [
        'pageTitle' => 'Jadwal',
        'active' => 'jadwal',
        'bodyClass' => 'status-registration-page',
        'pageDescription' => 'Pantau jadwal seleksi, verifikasi berkas, observasi, dan pengumuman.',
    ]))->name('ppdb.schedule');

    Route::get('/pengumuman', fn () => view('pengumuman.index', [
        'pageTitle' => 'Pengumuman',
        'active' => 'pengumuman',
        'bodyClass' => 'status-registration-page',
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
});

Route::middleware(['admin_guard'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard', [
            'stats' => \App\Support\PpdbDummyData::dashboardStats(),
            'registrations' => array_slice(\App\Support\PpdbDummyData::registrations(), 0, 5),
            'activities' => \App\Support\PpdbDummyData::activities(),
            'announcements' => \App\Support\PpdbDummyData::announcements(),
        ]);
    })->name('admin.dashboard');

    Route::get('/admin/verifikasi-berkas', function () {
        return view('admin.verifikasi-berkas.index');
    })->name('admin.verifikasi.index');
});
