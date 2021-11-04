# A eCommerce using Laravel

**Version**: 1.0 Release of the Laravel eCommerce.

---

## Technologies and libraries

- Laravel 7+, PHP 7+.
- JavaScript & VueJS Framework.
- Bootstrap eCommerce UI Kit for frontend design
- Vali Admin for backend design
- MySQL for local
- PgSQL for heroku deploy

### Run on the development environment

- Open terminal
- Run following commands

```sh
$ git clone https://github.com/vorsurm/LaravelEcommerce.git

$ cd LaravelEcommerce
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ config .env file, below description
$ php artisan migrate
$ php artisan serve
$ It`s open a browser window with http://localhost:8000/login

```

### Configure environment variables

- Add the .env variable name of the following below information.

```

MySQL Config:
==============
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=LaravelEcommerce
DB_USERNAME=username
DB_PASSWORD=password


```

- Browser opens up and runs with URL: `http://localhost:8000`
- configure your own style .

---
