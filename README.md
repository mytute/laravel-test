# Laravel 6 Tutorial for Beginners #3 - Laravel Basics (Routes, Views)

link[https://youtu.be/xevIxUQ1SH4]

web request > laravel > route file looks at the request

> get or process any data needed > compile a view to return.

go to routes/web.php and views/ folder
create "/pizzas" route and view call "pizzas"

create "/pizzas-string" route and return string and see return type of brower.

create "/pizzas-json" route and return following json and see return type of brower
Content-Type :application/json under Response Headers.

```php
return ['name'=> 'veg pizzas', 'base'=> 'classic'];
```
