# Soal 3 - 10 Error (bahan untuk Tldraw)

Format tiap error: **Nama error -> Before -> After**.
Cara pakai: reproduksi error di browser (Before), screenshot halaman error Laravel,
lalu perbaiki dan screenshot hasilnya (After). Tempel keduanya di canvas Tldraw.

| # | Nama Error | Before (penyebab) | After (perbaikan) |
|---|-----------|-------------------|-------------------|
| 1 | **419 Page Expired** | `<form method="POST">` tanpa `@csrf` | Tambahkan `@csrf` tepat di bawah tag `<form>` |
| 2 | **405 Method Not Allowed** | Form `POST /auth` tetapi route hanya `Route::get('/auth', ...)` | Tambah `Route::post('/auth', [AuthController::class, 'login']);` |
| 3 | **RouteNotFoundException: Route [auth.login] not defined** | `route('auth.login')` dipanggil, route belum diberi `->name('auth.login')` | `Route::post('/auth', ...)->name('auth.login');` |
| 4 | **InvalidArgumentException: View [guest.login] not found** | File ada di `resources/views/guest/Login.blade.php` (huruf besar) / belum dibuat | Ganti nama file menjadi `login.blade.php` |
| 5 | **Class "App\Http\Controllers\Guest\AuthController" not found** | Route memakai `AuthController` tetapi tidak ada `use ...\Guest\AuthController;` di `routes/web.php` | Tambahkan `use App\Http\Controllers\Guest\AuthController;` |
| 6 | **Undefined variable $dataUser** | `return view('admin.user.index');` tanpa mengirim data | `$data['dataUser'] = User::all(); return view('admin.user.index', $data);` |
| 7 | **SQLSTATE[42S01]: Base table 'categories' already exists** | Ada 2 migration `create_categories_table` (`2026_10_17_073139` dan `2026_10_17_100001`) | Hapus salah satu migration duplikat (juga untuk `products` dan `customers`), lalu `php artisan migrate:fresh` |
| 8 | **Duplicate route name `question.store`** | `routes/web.php` mendefinisikan `question.store` dua kali (baris 19 dan 42); `php artisan route:cache` gagal | Hapus salah satu definisi route |
| 9 | **Route `/mahasiswa/{profil}` mengembalikan halaman kosong** | `if/else if` tanpa `else`, nilai selain `detail`/`profil` tidak mengembalikan response | Tambah `else { abort(404); }` |
| 10 | **Validasi password confirmation gagal terus** | Input konfirmasi bernama `confirm_password`, sedangkan rule `confirmed` mengharuskan `password_confirmation` | Ubah `name="confirm_password"` menjadi `name="password_confirmation"` |

> Catatan: error 7 dan 8 benar-benar ada di project `laravel-web` Anda saat ini.
