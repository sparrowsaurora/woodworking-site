<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? "App" }}</title>
    @include('partials.head')
</head>

<body>

<x-navigation.navbar />

<main class="container">
    {{ $slot }}
</main>

@include('partials.footer')

</body>
</html>
