<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-custom-brown leading-tight">
            {{ __('ACTUALIZAR REPORTE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-lightBeige overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <form method="POST" action="{{ route('reportes.update', $reporte->id) }}">
                    @csrf
                    @method('PUT')
                
                    <div class="mb-4">
                        <label for="tipo_mascota" class="block text-custom-brown">Tipo de Mascota</label>
                        <input type="text" name="tipo_mascota" id="tipo_mascota" value="{{ old('tipo_mascota', $reporte->tipo_mascota)}}" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>
                
                    <div class="mb-4">
                        <label for="tipo_reporte" class="block text-custom-brown">Tipo de Reporte</label>
                        <input type="text" name="tipo_reporte" id="tipo_reporte" value="{{ old('tipo_reporte', $reporte->tipo_reporte)}}" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>
                
                    <div class="mb-4">
                        <label for="descripcion" class="block text-custom-brown">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $reporte->descripcion)}}" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>

                    <div class="mb-4">
                        <label for="ubicacion" class="block text-custom-brown">Ubicación</label>
                        <input type="text" name="ubicacion" id="ubicacion" value="{{ old('ubicacion', $reporte->ubicacion) }}" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                    </div>
                
                    <div class="mb-4">
                        <label for="estado" class="block text-custom-brown">Estado</label>
                        <select name="estado" id="estado" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                            <option value="abierto" {{ old('estado', $reporte->estado) == 'abierto' ? 'selected' : '' }}>Abierto</option>
                            <option value="en_proceso" {{ old('estado', $reporte->estado) == 'en_proceso' ? 'selected' : '' }}>En Proceso</option>
                            <option value="cerrado" {{ old('estado', $reporte->estado) == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                        </select>
                    </div>
                
                    <div class="mb-4">
                        <label for="prioridad" class="block text-custom-brown">Prioridad</label>
                        <select name="prioridad" id="prioridad" class="mt-1 block w-full border-custom-brown bg-custom-lightBeige text-custom-brown">
                            <option value="alta" {{ old('prioridad', $reporte->prioridad) == 'alta' ? 'selected' : '' }}>Alta</option>
                            <option value="media" {{ old('prioridad', $reporte->prioridad) == 'media' ? 'selected' : '' }}>Media</option>
                            <option value="baja" {{ old('prioridad', $reporte->prioridad) == 'baja' ? 'selected' : '' }}>Baja</option>
                        </select>
                    </div>
                
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-custom-gold hover:bg-custom-lightGold text-white font-bold py-2 px-4 rounded">
                            GUARDAR CAMBIOS
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

