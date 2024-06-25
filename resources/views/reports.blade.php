<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Reporte</title>

    <!-- Stylesheet -->
    @vite('resources/css/app.css')
</head>
<body>
<div class="min-h-screen bg-custom-lightBeige py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-custom-lightGold rounded-full flex flex-shrink-0 justify-center items-center text-custom-gold text-2xl font-mono">R</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-custom-brown">
                        <h2 class="leading-relaxed">Crear Reporte de Extravío</h2>
                        <p class="text-sm text-custom-beige font-normal leading-relaxed">Completa los detalles del reporte.</p>
                    </div>
                </div>
                <form action="{{ route('reportes.store') }}" method="POST" enctype="multipart/form-data" class="divide-y divide-custom-beige">
                    @csrf
                    <div class="py-8 text-base leading-6 space-y-4 text-custom-brown sm:text-lg sm:leading-7">
                        <div class="flex flex-col">
                            <label class="leading-loose">Tipo de Mascota</label>
                            <input type="text" name="tipo_mascota" class="px-4 py-2 border focus:ring-custom-brown focus:border-custom-brown w-full sm:text-sm border-custom-beige rounded-md focus:outline-none text-custom-brown" placeholder="Perro, gato, ave, etc." required>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Foto de la Mascota</label>
                            <input type="file" name="foto_mascota" class="px-4 py-2 border focus:ring-custom-brown focus:border-custom-brown w-full sm:text-sm border-custom-beige rounded-md focus:outline-none text-custom-brown" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Descripción</label>
                            <textarea name="descripcion" class="px-4 py-2 border focus:ring-custom-brown focus:border-custom-brown w-full sm:text-sm border-custom-beige rounded-md focus:outline-none text-custom-brown" placeholder="Descripción breve" required></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Ubicación</label>
                            <input type="text" name="ubicacion" class="px-4 py-2 border focus:ring-custom-brown focus:border-custom-brown w-full sm:text-sm border-custom-beige rounded-md focus:outline-none text-custom-brown" placeholder="Ubicación" required>
                        </div>
                    </div>
                    <div class="pt-4 flex items-center space-x-4">
                        <a href="{{ route('welcome') }}" class="flex justify-center items-center w-full text-custom-brown px-4 py-3 rounded-md focus:outline-none">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Cancelar
                        </a>
                        <button type="submit" class="bg-custom-gold flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>




