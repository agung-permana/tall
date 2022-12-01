<h1 align="center">TALL 👋</h1>

## Requirements

The following tools are required in order to start the installation.

- PHP >=8.0
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## Cara Install

1. **Clone Repository**

```bash
git clone https://github.com/agung-permana/tall.git
cd tall
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Buka `.env` lalu ubah baris berikut sesuai dengan api smtp kamu**

```bash
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

4. **Instalasi Aplikasi**

```bash
php artisan key:generate
php artisan migrate --seed
```

5. **Jalankan Aplikasi**

```bash
php artisan serve
npm run dev
```
## Commands

Command | Deskripsi
--- | ---
**`php artisan test`** | Untuk Jalankan Test
`php artisan migrate:fresh --seed` | Untuk Reset Database
`npm run dev` | Untk perubahan dalam file CSS dan JS