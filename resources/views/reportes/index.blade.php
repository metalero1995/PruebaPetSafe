<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-custom-brown leading-tight">
            {{ __('Lista de Reportes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-lightBeige overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-custom-lightGold">
                        <thead class="bg-custom-lightGold">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">Usuario</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">TIPO DE MASCOTA</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">FOTO</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">DESCRIPCIÓN</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">UBICACIÓN</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">ESTADO</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-custom-brown uppercase tracking-wider">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-custom-lightGold">
                            @foreach ($reportes as $reporte)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-custom-brown">{{ $reporte->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-custom-brown">{{ $reporte->usuario->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->tipo_mascota }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">
                                    <img src="{{ Storage::url($reporte->foto_mascota) }}" alt="Foto de {{ $reporte->tipo_mascota }}" class="w-20 h-20 object-cover">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->descripcion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">{{ $reporte->ubicacion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-custom-gold">
                                    <form action="{{ route('reportes.update', $reporte->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="estado" class="px-4 py-2 border focus:ring-custom-brown focus:border-custom-brown w-full sm:text-sm border-custom-beige rounded-md focus:outline-none text-custom-brown">
                                            <option value="en proceso" {{ $reporte->estado == 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                                            <option value="cerrado" {{ $reporte->estado == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                                        </select>
                                        
                                    </form>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div>
                                        <form action="{{ route('reportes.destroy', $reporte->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete({{ $reporte->id }})" class="mt-2 bg-custom-gold text-white px-4 py-2 rounded">ELIMINAR</button>
                                        </form>
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
