<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">

    <header class="bg-gray-800 p-6 text-center">
        <h1 class="text-3xl">My Portfolio</h1>
        <a href="{{ route('about') }}" class="text-1xl text-white hover:text-gray-300 m-0,5 p-1">About</a>
        <a href="{{ route('login') }}" class="text-1xl text-white hover:text-gray-300 m-0,5 p-1">Login</a>
    </header>

    <main class="p-6">
        <section class="mb-12">
            <h2 class="text-2xl mb-4">About Me</h2>
            <p class="text-gray-400">Hello! I'm a web developer with a passion for creating beautiful and functional websites. I love coding and I'm always eager to learn new technologies.</p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl mb-4">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl">Project 1</h3>
                    <p class="text-gray-400">Description of project 1. This project involves...</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl">Project 2</h3>
                    <p class="text-gray-400">Description of project 2. This project involves...</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl">Project 3</h3>
                    <p class="text-gray-400">Description of project 3. This project involves...</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl">Project 4</h3>
                    <p class="text-gray-400">Description of project 4. This project involves...</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-2xl mb-4">Contact Me</h2>
            <form action="/login" method="POST" class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label class="block text-gray-400 mb-2" for="name">Name:</label>
                    <input class="bg-gray-500 w-full p-2 rounded" type="text" id="name" name="name" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-400 mb-2" for="email">Email:</label>
                    <input class="bg-gray-500 w-full p-2 rounded" type="email" id="email" name="email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-400 mb-2" for="message">Message:</label>
                    <textarea class="bg-gray-500 w-full p-2 rounded" id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="text-center">
                    <button class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 py-2 px-4 rounded" type="submit">Send Message</button>
                </div>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 p-6 text-center">
        <p class="text-gray-400">© 2023 My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>