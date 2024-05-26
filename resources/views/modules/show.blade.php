{{-- <x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Détails du Module</h1>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Informations sur le Module</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Détails du module sélectionné.</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">code_module</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->code_module }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Libellé Module</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->libelle_module }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Masse Horaire Présentielle</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->masse_hor_presentielle }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Masse Horaire Distancielle</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->masse_hor_distantielle }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Bilan Compétence Module</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->bilan_compet_module }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!-- resources/views/modules/show.blade.php -->
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Détails du Module</h1>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Informations sur le Module</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Détails du module sélectionné.</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Code Module</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->code_module }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Libellé Module</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->libelle_module }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Masse Horaire Présentielle</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->masse_hor_presentielle }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Masse Horaire Distancielle</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->masse_hor_distantielle }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Bilan Compétence Module</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $module->bilan_compet_module }}</dd>
                    </div>
                </dl>
            </div>
            <div class="px-4 py-5 sm:px-6">
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="loadPreparations({{ $module->id }})">Afficher les Preparations</button>
            </div>
            <div id="preparations" class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Preparations</h3>
                <ul id="preparations-list" class="list-group mt-4">
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
                },
                error: function() {
                    $('#preparations-list').append('<li class="list-group-item">Error loading preparations.</li>');
                }
            });
        }
    </script>
</x-app-layout>

