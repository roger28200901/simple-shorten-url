<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short URL Service</title>
</head>
<body>
    <h1>Short URL Service</h1>
    <form action="/shorten" method="post">
        @csrf
        <input type="text" name="url" placeholder="Enter URL">
        <button type="submit">Shorten</button>
    </form>
</body>
</html>
