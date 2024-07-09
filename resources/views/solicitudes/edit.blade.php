<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Solicitud') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('solicitudes.update', $solicitude->id_solicitud) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                            <select name="estado" id="estado" class="form-control block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                <option value="pendiente" {{ $solicitude->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="rechazado" {{ $solicitude->estado == 'rechazado' ? 'selected' : '' }}>Rechazado</option>
                                <option value="aceptado" {{ $solicitude->estado == 'aceptado' ? 'selected' : '' }}>Aceptado</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
