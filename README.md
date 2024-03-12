# DIGIPUS

![Home Page Digipus](/public/DIGIPUS-HOME.png)

## Instalasi

Clone Repo ini

```bash
  git clone https://github.com/Suryanataa/assets-31-ukk
```

Pindah direktori

```bash
  cd assets-31-ukk
```

Install depedensi

```bash
  composer install
  npm install
```

Salin file .env.example

```bash
  cp .env.example .env
```

Buat database dan hubungkan di file .env

```bash
  DB_DATABASE=digipus
```

Jalankan migrasi

```bash
  php artisan migrate --seed
  # atau
  php artisan migrate:fresh --seed
```

Jalankan server

```bash
  php artisan key:generate
  php artisan serve
  # start di terminal lain
  npm run dev
```
