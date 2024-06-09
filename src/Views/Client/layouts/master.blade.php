<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.partials.head')
   <title>@yield('title')</title> 
</head>

<body>
<header>

@include('layouts.partials.nav')
@include('layouts.partials.banner')

</header>
<main>
@yield('content')

</main>
    @include('layouts.partials.footer')
</body>

</html>