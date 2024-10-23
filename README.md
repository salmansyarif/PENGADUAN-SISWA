## Apa itu Web Pengaduan
web Pengaduan adalah website untuk melaporkan kejahatan atau keburukan siswa 


## Fitur apa saja yang tersedia di Web Pengaduan?
- Autentikasi Guru & Siswa
- Guru & CRUD
- Siswa & CRUD
- laporkan & CRUD
- DLL

## install

1. Clone Repository

```bash
 git clone https://github.com/adhiariyadi/Toko-Online-Laravel.git
cd Toko-Online-Laravel
composer install
cp .env.example .env
```
2. Buka .env lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. Instalasi website

```bash
php artisan key:generate
php artisan migrate --seed
```

4. Jalankan website
```bash
    
