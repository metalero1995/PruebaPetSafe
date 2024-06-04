<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Stylesheet -->
  @vite('resources/css/app.css')

</head>
<body>
<main class="bg-custom-lightBeige relative overflow-hidden h-screen">
    <header class="h-24 sm:h-32 flex items-center z-30 w-full">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <div class="flex items-center uppercase text-custom-brown font-black text-3xl">
                <!--<span>PET SAFE</span>-->
                <img src="{{ asset('images/logo2.png') }}" class="h-50 w-20 ml-3" alt="Logo"/>
            </div>
            <div class="flex items-center">
                <nav class="font-sen text-custom-brown uppercase text-lg lg:flex items-center hidden">
                    <a href="#" class="py-2 px-6 flex">
                        Inicio
                    </a>
                    <a href="{{ route('about') }}" class="py-2 px-6 flex">
                        Nosotros
                    </a>
                    <a href="#" class="py-2 px-6 flex">
                        Contactanos
                    </a>
                    <a href="{{ route('login') }}" class="py-2 px-6 flex">
                        Iniciar Seccion
                    </a>
                    <a href="{{ route('register') }}" class="py-2 px-6 flex">
                        Registrarse
                    </a>
                </nav>
                <button class="lg:hidden flex flex-col ml-4">
                    <span class="w-6 h-1 bg-custom-brown mb-1"></span>
                    <span class="w-6 h-1 bg-custom-brown mb-1"></span>
                    <span class="w-6 h-1 bg-custom-brown mb-1"></span>
                </button>
            </div>
        </div>
    </header>
    <div class="bg-custom-lightBeige flex relative z-20 items-center overflow-hidden">
        <div class="container mx-auto px-6 flex relative py-16">
            <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                <span class="w-20 h-2 bg-custom-brown mb-12"></span>
                <h1 class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none text-custom-brown">
                    NOSOTROS SOMOS
                    <span class="text-5xl sm:text-7xl text-custom-gold">PET SAFE</span>
                </h1>
                <p class="text-sm sm:text-base text-custom-beige">
                    Nos complace darte la bienvenida a nuestra plataforma dedicada a mejorar la situacion de los animales abandonados y las mascotas en el municipio de Othón P. Blanco, Quintana Roo, Mexico.
                </p>
                <div class="flex mt-8">
                    <a href="#" class="uppercase py-2 px-4 rounded-lg bg-custom-lightGold border-2 border-transparent text-white text-md mr-4 hover:bg-custom-gold">
                        Get started
                    </a>
                    <a href="#" class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-custom-lightGold text-custom-lightGold hover:bg-custom-lightGold hover:text-white text-md">
                        Read more
                    </a>
                </div>
            </div>
            <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
                <img src="{{ asset('images/mascotas.webp') }}" class="w-full h-auto max-w-xs md:max-w-sm mx-auto"/>
            </div>
            
        </div>
    </div>
</main>

</body>
</html>