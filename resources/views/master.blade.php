<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/tailwind.css','resources/js/app.js'])
</head>
<body>

    <div class="container">

        @yield('content')

    </div>


</body>
</html>
