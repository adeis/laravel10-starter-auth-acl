<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Starter auth + acl laravel 10

di repo ini sudah disediakan project awal laravel, dengan login/register (laravel/ui), juga ACL dengan metode RBAC (Role Base Access Controll) yaitu kendali access berdasarkan role atau peran, jadi permisi dikumpulkan dalam satu peran, sehingga bisa lebih dinamis. 

### Cara Install 
<p> Pastikan anda sudah mengikuti requirement dari laravel, silahkan baca doc laravel terlebih dahulu, lalu ikuti langkah ini</p>

```bash
git clone https://github.com/adeis/laravel10-starter-auth-acl.git

cd laravel10-starter-auth-acl

composer install

cp .env.example .env

php artisan key:generate

#buka .env

#buat database sesuai aplikasi anda
#lalu ubah aturan database sesuai aplikasi anda, contoh

#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=secret

#lalu jalan migrasi database
php artisan migrate:fresh --seed

#perintah diatas sudah memasukkan data seeder, yang ada untuk login admin

npm install

npm run build

php artisan serve

#buka url yang tertera, biasanya http://127.0.0.1:8000/

# login dengan :
# username admin@local.test
# password 123456! 

```
<p> Login WEB </p>
silahkan login ke web dengan akun seperti diatas

<p> Login API </p>
buka postman, atau via curl. lalu login dengan endpoint POST

``` bash

POST http://localhost:8000/api/auth/login
```
contoh dengan curl
``` bash
curl --location --request POST 'http://localhost:8000/api/auth/login' \
--header 'Accept: Application/json' \
--header 'User-Agent: Apidog/1.0.0' \
--form 'email="admin@local.test"' \
--form 'password="123456!"'
```

setelah berhasil, ambil token dari respon. dan coba akses url berikut ini
``` bash
GET http://localhost:8000/api/user

#contoh

curl --location --request GET 'http://localhost:8000/api/user' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer <token>' \
--header 'User-Agent: Apidog/1.0.0'
```
### Terimakasih semoga bisa membantu : Ade Iskandar



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
