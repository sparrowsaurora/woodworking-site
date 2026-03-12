<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title ?? config('app.name') }}</title>

<meta name="description" content="{{ $description ?? 'Laravel Application' }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{--Favicon--}}
<link rel="icon" href="/favicon.ico">

{{--Fonts--}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

{{--Styles--}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

{{--Tailwind CDN--}}
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

{{--Optional Page Styles--}}
@stack('styles')
