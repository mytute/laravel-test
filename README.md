# Laravel 6 Tutorial for Beginners #6 - Blade Loops

link[https://youtu.be/ub2PdzJqFXg]

1.  in the 'pizza' view template write a loop 0-5 and print p tag 5 time.
    hint : @for @endfor

2.  pass following array data to view template and loop it

```php
$pizzas = [
    ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ['type' => 'volcano', 'base' => 'gralic crust'],
    ['type' => 'veg supreme', 'base' => 'thin & crispy'],
]
```

3. and show above examle with foreach loop
   hintL @foreach @endforeach $loop-> index
