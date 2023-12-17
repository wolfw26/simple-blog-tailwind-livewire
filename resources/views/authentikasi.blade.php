<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPL-BLOG | LOGIN</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class=" min-h-screen">
        <div class=" w-full fixed-top absolute flex bg-teal-200 py-2 px-2 rounded-bl-2xl rounded-br-2xl justify-around">
            <h3 class="text-xl font-black font-oswald text-green-500">SMPL-BLOG</h3>
            <div>
                <button class=" rounded-3xl py-1 px-2 text-slate-700 border border-1 border-blue-300 hover:outline hover:outline-2 hover:outline-green-500 hover:text-green-800 hover:font-bold text-md font-medium">LOGIN</button>
            </div>
        </div>
        <div class="bg-cyan-50 border-3 min-h-screen border-slate-700 flex justify-center items-center">
            @yield('konten')
        </div>
    </div>
    @livewireScripts
</body>

</html>
