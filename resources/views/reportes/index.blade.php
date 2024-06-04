<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-custom-brown leading-tight">
            {{ __('Lista de Reportes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-lightBeige overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-4">
                    <a href="{{ route('reportes.create') }}" class="bg-custom-gold text-white px-4 py-2 rounded">Crear Nuevo Reporte</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-custom-lightGold">
                        <thead class="bg-custom-lightGold">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">TIPO DE MASCOTA</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">TIPO DE REPORTE</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">DESCRIPCIÓN DEL REPORTE</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">UBICACIÓN</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">ESTADO</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">PRIORIDAD</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-custom-lightGold">
                            @foreach ($reportes as $reporte)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-custom-brown">{{ $reporte->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->tipo_mascota }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->tipo_reporte }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->descripcion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->ubicacion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->estado }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->prioridad }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div>
                                        <a href="{{ route('reportes.edit', $reporte->id) }}" class="text-custom-gold">EDITAR</a>
                                        <button type="button" onclick="confirmDelete('{{ $reporte->id }}')" class="text-custom-gold">ELIMINAR</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- Script para manejar el botón de eliminación con Alertify --}}
<script>
    function confirmDelete(id) {
        alertify.confirm(
            "¿Estás seguro de que quieres eliminarlo?",
            function () {
                // Usuario hizo clic en "OK"
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/reportes/${id}`;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
                alertify.success('Ok');
            },
            function () {
                // Usuario hizo clic en "Cancelar"
                alertify.error('Cancel');
            }
        );
    }
</script>
