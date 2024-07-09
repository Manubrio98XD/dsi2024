<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Solicitudes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <table class="min-w-full divide-y divide-gray-200 mt-6">
                        <thead class="bg-gray-50">
                            <tr>
                                <th>ID Solicitud</th>
                                <th>ID Postulante</th>
                                <th>Fecha de Presentación</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($solicitudes as $solicitud)
                            <tr>
                                <td>{{ $solicitud->id_solicitud }}</td>
                                <td>{{ $solicitud->id_postulante }}</td>
                                <td>{{ $solicitud->fecha_presentacion }}</td>
                                <td>{{ $solicitud->estado }}</td>
                                <td>
                                    <a href="{{ route('solicitudes.edit', $solicitud->id_solicitud) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
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
