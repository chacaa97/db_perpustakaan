# Sistem Peminjaman Buku Perpustakaan

Maintain by [ipincamp](https://github.com/ipincamp)

## Installations Guide

> Clone this repository

```sh
git clone https://github.com/ipincamp/perpus.git
```

> Navigate into the `perpus` folder, then install all required dependency packages

```sh
cd perpus
composer install

# Wait until the installation process is complete
```

> Now, copy the file `.env.example` then rename it to `.env`

```sh
cp .env.example .env
```

> Open the `.env` file then edit the section as below:

```js
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpus
DB_USERNAME=root
DB_PASSWORD=

/*
According to your configuration.
Example:
    DB_PORT=3309
*/
```

~> *Make sure the database name already exists*

> Get new `APP_KEY`

```sh
php artisan key:generate
```

> Also install the dependencies package for bootstrap

```sh
npm install
npm ci
npm run dev

# Press CTRL+C

npm run build
```

> Continue for migration and seeding

```sh
# Migration
php artisan migrate:fresh

# Seeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=BookSeeder
```

## Start the application

```sh
php artisan serve
```

## License

`Sistem Peminjaman Buku Perpustakaan` is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
