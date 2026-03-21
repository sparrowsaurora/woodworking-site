<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? config('app.name') }}</title>
    @include('partials.head')
</head>

<body>

<x-navigation.navbar />

<main>
    {{ $slot }}
</main>

@include('partials.footer')

</body>
</html>
