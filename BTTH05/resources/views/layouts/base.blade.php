<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title>Your Blog</title>
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css') }}">
    </script>
</head>

<body>
    @include('layouts.header')
    <main class="py-4">
        @yield('content')
    </main>

</body>

</html>