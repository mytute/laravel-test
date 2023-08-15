# Laravel 6 Tutorial for Beginners #5 - Blade Basics

link[https://youtu.be/ub2PdzJqFXg]

pass price value to the 'pizza' view template

```php
return view('pizza', ['price'=>10]);
```

and if price higher than 15 then print "this pizza is expensive"
if price less than 5 then print "this pizza is cheap"  
else print "this pizza is normally priced"

hint : you can use follwoing syntax
@if @elseif @else @endif
