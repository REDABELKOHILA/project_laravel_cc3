{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails de la séquence de préparation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 print:invisible">
            <!-- Masquez le bouton "Imprimer" lors de l'impression -->
            <style type="text/css" media="print">
                .print-visible { display: none; }
                .print-invisible { display: block !important; }
            </style>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        <p><strong>Préparation :</strong> {{ $preparationSequence->preparation }}</p>
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p><strong>Heure :</strong> {{ $preparationSequence->heure }}</p>
                        <p><strong>Type d'espace de formation :</strong> {{ $preparationSequence->type_espace_formation }}</p>
                        <p><strong>Objectif de la séquence :</strong> {{ $preparationSequence->objectif_sequence }}</p>
                        <!-- Ajoutez d'autres détails de la séquence de préparation ici -->

                        <!-- Parcourir et afficher toutes les autres colonnes de la séquence de préparation -->
                        @foreach ($preparationSequence->getAttributes() as $key => $value)
                            @if ($key != 'id' && $key != 'preparation' && $key != 'heure' && $key != 'type_espace_formation' && $key != 'objectif_sequence')
                                <p><strong>{{ ucfirst(str_replace('_', ' ', $key)) }} :</strong> {{ $value }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 print-visible" style="margin-top: 20px;">
            <!-- Bouton d'impression -->
            <button onclick="window.print()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                Imprimer
            </button>
        </div>
    </div>
</x-app-layout> --}}


<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Détails de la Préparation</h1>
            <button onclick="window.print()" class="bg-blue-500 text-white px-4 py-2 rounded">Imprimer</button>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Informations sur la Préparation</h3>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Préparation</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->preparation }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Heure</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->heure }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Entier</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->entier }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Type Espace Formation</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->type_espace_formation }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Objectif Séquence</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->objectif_sequence }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Contenu Rappel</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->contenu_rappel }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Durée Rappel (minutes)</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->duree_rappel }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Motivation</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->motivation }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Durée Motivation (minutes)</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $preparationSequence->duree_motiv }}</dd>
                    </div>
                    <!-- Continue for all other fields similarly -->
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
