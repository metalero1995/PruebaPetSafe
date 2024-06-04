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
    <main class="bg-custom-lightBeige relative h-screen">
        <section class="w-full mx-auto py-10 bg-gray-50">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo2.png') }}" class="h-50 w-20 ml-3" alt="Logo"/>
            </a>
    
            <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-4">
                <div class="lg:w-[50%] xs:w-full">
                    <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxob21lfGVufDB8MHx8fDE3MTA0OTAwNjl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="billboard image" />
                </div>
                <div class="lg:w-[50%] sm:w-full xs:w-full bg-lightBeige md:p-4 xs:p-0 rounded-md">
                    <h2 class="text-3xl font-semibold text-custom-brown">¿Quienes Somos?</h2>
                    <p class="text-sm sm:text-base text-custom-beige">El proyecto “Pet Safe” es una iniciativa que busca mejorar la situación de las mascotas y los animales abandonados en el municipio de Othón P. Blanco, en el estado de Quintana Roo. </p>
                </div>
            </div>
            <!-- col-2 -->
            <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-6">
                <!--  -->
                <div class="md:hidden sm:block xs:block xs:w-full">
                    <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8aG9tZXxlbnwwfDB8fHwxNzEwNDkwMDcwfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="billboard image" />
                </div>
                <!--  -->
                <div class="lg:w-[50%] xs:w-full bg-lightBeige md:p-4 xs:p-0 rounded-md">
                    <h2 class="text-3xl font-semibold text-custom-brown">Equipo de Trabajo</h2>
    
                    <p class="text-sm sm:text-base text-custom-beige">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore placeat assumenda nam
                        veritatis, magni doloremque pariatur quos fugit ipsa id voluptatibus deleniti officiis cum ratione eligendi
                        sed necessitatibus aliquam error laborum delectus quaerat. Delectus hic error eligendi sed repellat natus fuga
                        nobis tempora possimus ullam!</p>
                </div>
                <!--  -->
                <div class="md:block sm:hidden xs:hidden lg:w-[50%] xs:w-full">
                    <img class="lg:rounded-t-lg xs:rounded-sm" src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8aG9tZXxlbnwwfDB8fHwxNzEwNDkwMDcwfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="billboard image" />
                </div>
            </div>
    
        </section>
    </main>
       
</body>
</html>
