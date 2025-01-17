<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title . ' | ' . config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
