<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <!--Hero Section Start-->
    <section id="Home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-xl font-semibold text-primary">Hallo Semua 👋, Saya <span class="text-4xl block font-bold text-slate-900">Prasetyo Wibowo</span></h1>
                    <h1 class="absolute text-2xl font-semibold m-1 p-1">I'm a <span class="font-bold auto-type text-primary text-3xl drop-shadow-md">Programmer</span></h1><br>
                    <p class="m-6 mb-1 font-medium leading-relaxed">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias tempore necessitatibus maiores, beatae tempora porro quisquam, sit illum quis, cumque eum assumenda quia dolor quae deleniti aliquam repellendus ducimus. Earum maxime rem sint id ea officiis aliquam expedita vel voluptatum officia quas perferendis consequuntur similique aut aspernatur inventore illum optio architecto accusamus amet, ducimus cumque iste! Eos, neque facilis ipsam dolore laborum sint sit.
                    </p>
                    <a href="#" class="text-base font-semibold transition duration-300 ease-in-out text-white bg-primary hover:bg-teal-600 py-3 px-8 rounded-full drop-shadow-lg">Hubungi Saya</a>
                    <button class="bg-gray-200 transition duration-300 ease-in-out hover:bg-gray-300 text-gray-900 font-bold m-3 py-3 px-8 rounded-full drop-shadow-lg ">Download CV!</button></br>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type",{
        strings : ["Programmer", "Designer", "Photograph", "Programmer"],
        typeSpeed: 150,
        backSpeed: 100,
        loop: true,
        showCursor: true, // Optional: Show cursor
        cursorChar: '|',  // Optional: Customize cursor character
        })
  </script>
                </div>
                <div class="w-full self-end px-4">
                    <div class="relative mt-10">
                        <img src="{{URL::asset('assets/image/img.png')}}" alt="profile Pic" class="max-w-full mx-auto">
                        <span class="absolute -bottom-20 -z-10 left-1/2 -translate-x-1/2">
                        <svg width="700" height="700" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#14b8a6" d="M52.2,-53.3C63.4,-41,65.4,-20.5,63.9,-1.5C62.4,17.5,57.4,35,46.2,48.4C35,61.7,17.5,71,-0.1,71C-17.6,71.1,-35.3,62,-50.2,48.6C-65.1,35.3,-77.3,17.6,-76.7,0.6C-76.1,-16.4,-62.7,-32.9,-47.8,-45.2C-32.9,-57.6,-16.4,-65.8,2,-67.8C20.5,-69.9,41,-65.7,52.2,-53.3Z" transform="translate(100 100)" />
                    </svg> 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section End-->
</body>
</html>