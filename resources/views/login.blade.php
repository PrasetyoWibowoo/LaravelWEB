<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-gray-700 p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-white text-center text-2xl mb-6">Login Form</h2>
        <form id="loginForm">
            <div class="mb-4">
                <label class="block text-red-300 mb-2" for="username">Username:</label>
                <input class="w-full p-2 rounded" type="text" id="username" name="username">
            </div>
            <div class="mb-6">
                <label class="block text-red-300 mb-2" for="password">Password:</label>
                <input class="w-full p-2 rounded" type="password" id="password" name="password">
            </div>
            <div class="submit">
                <button class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 py-2 px-10 rounded-3xl" type="submit">Login</button>
            </div>
        </form>
    </div>
    <script src='assets/js/script.js'></script>
</body>
</html>