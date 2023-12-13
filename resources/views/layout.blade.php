<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog |</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"> --}}
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> -->

    @livewireStyles
</head>

<body>
    <div class="p-0 min-w-full">
        <div class="w-full border-b-2 border-slate-200">
            <nav class="pt-5 ">
                <div class=" px-1 py-1">
                    <div class=" w-screen flex justify-between px-5">
                        <button class=" sm:hidden" id="openNav"><img src="{{ asset('assets/icons-svg/menu.svg') }}" title="Menu"></button>
                        {{-- MENU NAV --}}
                        <div id="menuNav" class="hidden min-w-[40%] h-full absolute top-0 left-0 bg-emerald-50 shadow-md py-1 px-5 rounded-md sm:flex sm:bg-transparent sm:w-full sm:relative sm:shadow-none">
                            <div class="w-full sm:flex sm:justify-start sm:items-center">
                                <div id="closeNav" class=" cursor-pointer absolute top-1 -right-5 rounded-r-full bg-emerald-50 px-2 py-2 border-r border-slate-500 sm:hidden">X</div>
                                <h3 class=" font-black text-xl text-center border-b-2 py-4 border-x-black font-merriweather sm:w-1/3 sm:border-none sm:py-0">My-Blog</h3>
                                <ul class=" w-full font-oswald font-bold text-center sm:flex sm:justify-evenly  sm:w-1/4">
                                    <li class="py-1 px-1 my-1 hover:bg-green-200 hover:rounded-md hover:shadow-lg"><a href="#">Home</a></li>
                                    <li class="py-1 px-1 my-1 hover:bg-green-200 hover:rounded-md hover:shadow-lg sm:px-5"><a href="#">My Post</a></li>
                                    <li class="py-1 px-1 my-1 hover:bg-green-200 hover:rounded-md hover:shadow-lg"><a href="#">Notification</a></li>
                                    <li class="py-1 px-1 my-1 hover:bg-green-200 hover:rounded-md hover:shadow-lg"><a href="#">Comment</a></li>
                                </ul>
                            </div>
                        </div>
                        <img class=" sm:mx-3" src="{{ asset('assets/icons-svg/account-circle.svg') }}" alt="" srcset="">
                    </div>
                    <div>
                        <div class="my-9 px-5 sm:max-w-sm sm:absolute sm:right-0">
                            <div class="my-4 flex">
                                <input type="text" id="search" name="search" class="w-full px-4 py-2 border rounded-l-full focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" placeholder="Search" value="" required><button class="border px-3 rounded-r-full hover:ring-2 hover:ring-slate-700"> <img src="{{ asset('assets/icons-svg/search.svg') }}"></button>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <section id="konten">
            @yield('konten')
        </section>
    </div>




    <!-- Pemanggilan script Livewire -->
    <script type="text/javascript">
        const closeBtnNav = document.querySelector('#closeNav');
        const openBtnNav = document.querySelector('#openNav');
        const navMenu = document.querySelector('#menuNav');


        document.addEventListener('livewire:init', (data) => {
            Livewire.on('showToastr', (data) => {
                showToastr(data.type, data.message);
            });
        });

        closeBtnNav.addEventListener('click', () => {
            navMenu.classList.add('hidden');
        });
        openBtnNav.addEventListener('click', () => {
            navMenu.classList.remove('hidden');
        });
    </script>

    <!-- Pemanggilan script JavaScript external -->
    <script type="module" src="{{ asset('js/script.js') }}"></script>

    <!-- Pemanggilan script Vite -->
    @vite('resources/js/app.js')

    <!-- Pemanggilan script Livewire -->
    @livewireScripts
</body>

</html>
