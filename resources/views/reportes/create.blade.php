<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-custom-brown leading-tight">
            {{ __('CREAR REPORTE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-lightBeige overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <form method="POST" action="{{ route('reportes.store') }}">
                    @csrf
                
                    <div class="mb-4">
                        <label for="tipo_mascota" class="block text-custom-brown">Tipo de Mascota</label>
                        <input type="text" name="tipo_mascota" id="tipo_mascota" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>
                
                    <div class="mb-4">
                        <label for="tipo_reporte" class="block text-custom-brown">Tipo de Reporte</label>
                        <input type="text" name="tipo_reporte" id="tipo_reporte" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>
                
                    <div class="mb-4">
                        <label for="descripcion" class="block text-custom-brown">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>

                    <div class="mb-4">
                        <label for="ubicacion" class="block text-custom-brown">Ubicación</label>
                        <input type="text" name="ubicacion" id="ubicacion" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>
                
                    <div class="mb-4">
                        <label for="estado" class="block text-custom-brown">Estado</label>
                        <select name="estado" id="estado" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                            <option value="abierto">Abierto</option>
                            <option value="en_proceso">En Proceso</option>
                            <option value="cerrado">Cerrado</option>
                        </select>
                    </div>
                
                    <div class="mb-4">
                        <label for="prioridad" class="block text-custom-brown">Prioridad</label>
                        <select name="prioridad" id="prioridad" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                            <option value="alta">Alta</option>
                            <option value="media">Media</option>
                            <option value="baja">Baja</option>
                        </select>
                    </div>
                
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-custom-gold hover:bg-custom-lightGold text-white font-bold py-2 px-4 rounded">
                            GUARDAR DATOS
                        </button>
                        <a href="{{ route('reportes.index') }}" class="inline-block align-baseline font-bold text-sm text-custom-gold hover:text-custom-lightGold">
                            CANCELAR
                        </a>
                    </div>
                </form>                

            </div>
        </div>
    </div>
</x-app-layout>

