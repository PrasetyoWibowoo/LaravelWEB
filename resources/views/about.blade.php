<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>
<div class="header"><div class="text-3xl font-bold text-gray-600 text-center p-56">
<div>404 Error</div></div>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">About Us</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Who Im I?</h2>
            <p class="text-gray-700 mb-4 text-2xl">
                Nama saya {{ $name }}, Umur saya {{ $age }}, Hobi saya {{ $hobby }}, Saya tinggal di {{ $address }}, Email saya {{ $email }} </p>
        </div>
    </div>
</body>
</html>