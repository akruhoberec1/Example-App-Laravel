Jela Svijeta API

Upute:
- git clone https://github.com/akruhoberec1/Example-App-Laravel.git
- composer update
- php artisan migrate --seed (ili migrate:fresh --seed ukoliko baza s imenom postoji, obratiti pozornost na ime baze u .env datoteci)
- localhost/api/meals -> dodati query npr. "?per_page=3&lang=de&category=!NULL&with=tags,ingredients,category&diff_time=1" ili query tipa = localhost/api/meals?lang=en&diff_time=1&with=tags,ingredients,category&category=!NULL&per_page=5&page=2 

Baza se sastoji od tablice jela koja mogu imati više tagova i sastojaka, a mogu pripadati jednoj ili niti jednoj kategoriji. 
Sve tablice imaju vlastite tablice prijevoda te prema parametru "lang" filtriramo koji će podaci biti vidljivi. Tablica languages nema tablicu prijevoda.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
