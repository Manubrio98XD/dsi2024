<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Postulantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <table class="min-w-full divide-y divide-gray-200 mt-6">
                        <thead class="bg-gray-50">
                            <tr>
                                <th>DNI</th>
                                <th>Nombres</th>
                                <th>Apellido Materno</th>
                                <th>Apellido Paterno</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Región</th>
                                <th>Distrito</th>
                                <th>Sexo</th>
                                <th>Dirección</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Colegio Egresado</th>
                                <th>Año de Egreso</th>
                                <th>Carrera</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($postulantes as $postulante)
                            <tr>
                                <td>{{ $postulante->dni }}</td>
                                <td>{{ $postulante->nombres }}</td>
                                <td>{{ $postulante->apellido_materno }}</td>
                                <td>{{ $postulante->apellido_paterno }}</td>
                                <td>{{ $postulante->fecha_nac }}</td>
                                <td>{{ $postulante->provincia }}</td>
                                <td>{{ $postulante->distrito }}</td>
                                <td>{{ $postulante->sexo }}</td>
                                <td>{{ $postulante->direccion }}</td>
                                <td>{{ $postulante->email }}</td>
                                <td>{{ $postulante->celular }}</td>
                                <td>{{ $postulante->colegio_egresado }}</td>
                                <td>{{ $postulante->año_egreso }}</td>
                                <td>{{ $postulante->carrera }}</td>
                                <td>
                                    <form action="{{ route('postulantes.destroy', $postulante->id_postulante) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                    </form>
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
