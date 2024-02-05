# Laravel 10 - Installing Laravel   
link[https://youtu.be/E74_WZpjeKA]

to check composer version 
$ composer -v

to check php version   
$ php -v

to install laravel globally to use in any directory (do not use sudo)
```bash
$ composer global require laravel/installer
```

to create laravel new project call "hello-world"
```bash
$ laravel new pizzahouse # if install globally
$ composer create-project laravel/laravel hello-world
```

to check laravel install successfully
```bash
$ cd hello-world
$ php artisan serve
```

1. go project file(hello-world) and rename the 'artisan' file to any other name like 'arti' and show following commad works.    
and change that name back.
```bash
$ php arti serve
```
