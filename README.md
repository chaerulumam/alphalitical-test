# Alphalitical Test

## Tools

-   Visual Studio Code

## Cara Menjalankan

1. Pastikan folder project sudah aktif pada terminal / command line.
2. Jalankan perintah `composer install`
3. Copy `.env.example` menjadi `.env` dan konfigurasi environment variables.
4. Jalankan perintah `php artisan key:generate`
5. Jalankan perintah `php artisan migrate`
6. Jalankan perintah `php artisan serve`

## List Endpoint

| Route               | Method | Penggunaan                                          |
| ------------------- | ------ | --------------------------------------------------- |
| /                   | `GET`  | Menampilkan halaman utama                           |
| api/summarize       | `GET`  | Mendapatkan ringkasan penjualan berdasarkan tanggal |
| sanctum/csrf-cookie | `GET`  | Mendapatkan cookie CSRF untuk Laravel Sanctum       |
| up                  | `GET`  | Mengecek status aplikasi                            |
