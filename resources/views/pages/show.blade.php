<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }}</title>
</head>
<body>
    <div>
        <h1>{{ $page->title }}</h1>
        <!-- Render the page content -->
        {!! $page->content !!}
    </div>
</body>
</html>
