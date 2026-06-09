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
