<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short URL Service</title>
</head>
<body>
    <h1>Short URL Service</h1>
    <p>Original URL: {{ $shortURL->original_url }}</p>
    <p>Short URL: <a href="{{ $shortURL->short_url }}">{{ $shortURL->short_url }}</a></p>
</body>
</html>
