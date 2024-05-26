<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modules') }}
            </h2>
        </x-slot>
         <a href="{{ route('modules.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Ajouter Module
        </a>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">code module</th>
                    <th class="py-2 px-4 border-b">Libellé Module</th>
                    <th class="py-2 px-4 border-b"> Horaire Présentielle</th>
                    <th class="py-2 px-4 border-b"> Horaire Distancielle</th>
                    <th class="py-2 px-4 border-b">Bilan Compétence Module</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $module)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $module->code_module }}</td>
                        <td class="py-2 px-4 border-b">{{ $module->libelle_module }}</td>
                        <td class="py-2 px-4 border-b">{{ $module->masse_hor_presentielle }}</td>
                        <td class="py-2 px-4 border-b">{{ $module->masse_hor_distantielle }}</td>
                        <td class="py-2 px-4 border-b">{{ $module->bilan_compet_module }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('modules.show', $module->id) }}"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Afficher</a>
                            <a href="{{ route('modules.edit', $module->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Modifier</a>
                            <form action="{{ route('modules.destroy', $module->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4 ">
        {{ $modules->links() }}
    </div>
</x-app-layout>

<!-- resources/views/modules/index.blade.php -->
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modules') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mt-5">
            <h1 class="mb-4">Modules</h1>
            <div class="row">
                @foreach ($modules as $module)
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary btn-block" onclick="loadPreparations({{ $module->id }})">{{ $module->libelle_module }}</button>
                    </div>
                @endforeach
            </div>
            <div id="preparations" class="mt-5">
                <h2>Preparations</h2>
                <ul id="preparations-list" class="list-group">
                    <!-- List of preparations will be appended here -->
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        function loadPreparations(moduleId) {
            $.ajax({
                url: `/preparations/${moduleId}`,
                method: 'GET',
                success: function(data) {
                    $('#preparations-list').empty();
                    if (data.length > 0) {
                        data.forEach(preparation => {
                            $('#preparations-list').append(`<li class="list-group-item">${preparation.preparation}</li>`);
                        });
                    } else {
                        $('#preparations-list').append('<li class="list-group-item">No preparations found.</li>');
                    }
                }
            });
        }
    </script>
</x-app-layout> --}}
