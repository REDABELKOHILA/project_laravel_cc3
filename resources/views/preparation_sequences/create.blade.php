<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ajouter une Séquence de Préparation') }}
            </h2>
        </x-slot>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>Whoops!</strong> Il y a eu quelques problèmes avec votre entrée.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('preparation_sequences.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="preparation" class="block text-gray-700 text-sm font-bold mb-2">Préparation:</label>
                <input type="text" name="preparation" id="preparation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('preparation') }}">
            </div>

            <div class="mb-4">
                <label for="heure" class="block text-gray-700 text-sm font-bold mb-2">Heure:</label>
                <input type="time" name="heure" id="heure" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('heure') }}">
            </div>

            <div class="mb-4">
                <label for="entier" class="block text-gray-700 text-sm font-bold mb-2">Entier:</label>
                <input type="number" name="entier" id="entier" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('entier') }}">
            </div>

            <div class="mb-4">
                <label for="type_espace_formation" class="block text-gray-700 text-sm font-bold mb-2">Type Espace Formation:</label>
                <input type="text" name="type_espace_formation" id="type_espace_formation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('type_espace_formation') }}">
            </div>

            <div class="mb-4">
                <label for="objectif_sequence" class="block text-gray-700 text-sm font-bold mb-2">Objectif Sequence:</label>
                <input type="text" name="objectif_sequence" id="objectif_sequence" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('objectif_sequence') }}">
            </div>

            <div class="mb-4">
                <label for="contenu_rappel" class="block text-gray-700 text-sm font-bold mb-2">Contenu Rappel:</label>
                <textarea name="contenu_rappel" id="contenu_rappel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('contenu_rappel') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="duree_rappel" class="block text-gray-700 text-sm font-bold mb-2">Durée Rappel:</label>
                <input type="number" name="duree_rappel" id="duree_rappel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_rappel') }}">
            </div>

            <div class="mb-4">
                <label for="motivation" class="block text-gray-700 text-sm font-bold mb-2">Motivation:</label>
                <textarea name="motivation" id="motivation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('motivation') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="duree_motiv" class="block text-gray-700 text-sm font-bold mb-2">Durée Motivation:</label>
                <input type="number" name="duree_motiv" id="duree_motiv" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_motiv') }}">
            </div>

            <div class="mb-4">
                <label for="plan" class="block text-gray-700 text-sm font-bold mb-2">Plan:</label>
                <textarea name="plan" id="plan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('plan') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="duree_plan" class="block text-gray-700 text-sm font-bold mb-2">Durée Plan:</label>
                <input type="number" name="duree_plan" id="duree_plan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_plan') }}">
            </div>

            <div class="mb-4">
                <label for="developpement1" class="block text-gray-700 text-sm font-bold mb-2">Développement 1:</label>
                <textarea name="developpement1" id="developpement1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('developpement1') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="mthod_pedagog_dev1" class="block text-gray-700 text-sm font-bold mb-2">Méthode Pédagogique Dév. 1:</label>
                <input type="text" name="mthod_pedagog_dev1" id="mthod_pedagog_dev1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('mthod_pedagog_dev1') }}">
            </div>

            <div class="mb-4">
                <label for="duree_dev1" class="block text-gray-700 text-sm font-bold mb-2">Durée Dév. 1:</label>
                <input type="number" name="duree_dev1" id="duree_dev1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_dev1') }}">
            </div>

            <div class="mb-4">
                <label for="developpement2" class="block text-gray-700 text-sm font-bold mb-2">Développement 2:</label>
                <textarea name="developpement2" id="developpement2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('developpement2') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="mthod_pedagog_dev2" class="block text-gray-700 text-sm font-bold mb-2">Méthode Pédagogique Dév. 2:</label>
                <input type="text" name="mthod_pedagog_dev2" id="mthod_pedagog_dev2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('mthod_pedagog_dev2') }}">
            </div>

            <div class="mb-4">
                <label for="duree_dev2" class="block text-gray-700 text-sm font-bold mb-2">Durée Dév. 2:</label>
                <input type="number" name="duree_dev2" id="duree_dev2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_dev2') }}">
            </div>

            <div class="mb-4">
                <label for="developpement3" class="block text-gray-700 text-sm font-bold mb-2">Développement 3:</label>
                <textarea name="developpement3" id="developpement3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('developpement3') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="mthod_pedagog_dev3" class="block text-gray-700 text-sm font-bold mb-2">Méthode Pédagogique Dév. 3:</label>
                <input type="text" name="mthod_pedagog_dev3" id="mthod_pedagog_dev3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('mthod_pedagog_dev3') }}">
            </div>

            <div class="mb-4">
                <label for="duree_dev3" class="block text-gray-700 text-sm font-bold mb-2">Durée Dév. 3:</label>
                <input type="number" name="duree_dev3" id="duree_dev3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_dev3') }}">
            </div>

            <div class="mb-4">
                <label for="synthese" class="block text-gray-700 text-sm font-bold mb-2">Synthèse:</label>
                <textarea name="synthese" id="synthese" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('synthese') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="duree_synthese" class="block text-gray-700 text-sm font-bold mb-2">Durée Synthèse:</label>
                <input type="number" name="duree_synthese" id="duree_synthese" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_synthese') }}">
            </div>

            <div class="mb-4">
                <label for="evaluation" class="block text-gray-700 text-sm font-bold mb-2">Évaluation:</label>
                <textarea name="evaluation" id="evaluation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('evaluation') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="duree_evaluation" class="block text-gray-700 text-sm font-bold mb-2">Durée Évaluation:</label>
                <input type="number" name="duree_evaluation" id="duree_evaluation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('duree_evaluation') }}">
            </div>

            <div class="mb-4">
                <label for="connexion" class="block text-gray-700 text-sm font-bold mb-2">Connexion:</label>
                <textarea name="connexion" id="connexion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('connexion') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="module_id" class="block text-gray-700 text-sm font-bold mb-2">Module:</label>
                <select name="module_id" id="module_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->libelle_module }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">Utilisateur:</label>
                <select name="user_id" id="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
