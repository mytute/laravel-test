<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Samadhi Laksahan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="">
    @if($price > 15)
    <p>this pizza is expensive</p>
    @elseif($price < 5) <p>this pizza is cheap</p>
        @else <p>this pizza is normally priced</p>
        @endif

</body>

</html>