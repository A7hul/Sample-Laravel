<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## This project

1.Create a New Laravel Project
2.Use default migration for users table and modify the column id from auto incrementing to uuid and set it as primary key
3.Create Traits with name HasUuid and apply it to Users so when a user entry is generated uuid should be generated and added automatically
4.Create a command to create user account the values can be randomised and it should generate an output when the command php artisan register:user is run
5.Create an API route that would return data as below {"status":true,"user":[]}

Note: API route: http://127.0.0.1:8000/api/data