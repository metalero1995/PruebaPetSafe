<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-custom-brown leading-tight">
            {{ __('Publicaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-lightBeige overflow-hidden shadow-xl sm:rounded-lg p-6">
                @foreach ($reportes as $reporte)
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 mb-6">
                    @if($reporte->foto_mascota)
                    <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ Storage::url($reporte->foto_mascota) }}" alt="Foto de {{ $reporte->tipo_mascota }}">
                    @else
                    <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/placeholder.png') }}" alt="No se ha proporcionado una foto">
                    @endif
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-custom-brown">Reporte de Mascota</h5>
                        <p class="mb-3 font-normal text-custom-gold">
                            Reporte generado por: {{ $reporte->usuario->name }}
                        </p>
                        <div>
                            <h2 class="text-xl font-semibold text-custom-brown">
                                Detalles del Reporte
                            </h2>
                            <p class="mt-2 text-custom-brown text-sm leading-relaxed">
                                <strong>Tipo de Mascota:</strong> {{ $reporte->tipo_mascota }}
                            </p>
                            <p class="mt-2 text-custom-brown text-sm leading-relaxed">
                                <strong>Descripción:</strong> {{ $reporte->descripcion }}
                            </p>
                            <p class="mt-2 text-custom-brown text-sm leading-relaxed">
                                <strong>Ubicación:</strong> {{ $reporte->ubicacion }}
                            </p>
                            <p class="mt-2 text-custom-brown text-sm leading-relaxed">
                                <strong>Estado:</strong> {{ $reporte->estado }}
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>


