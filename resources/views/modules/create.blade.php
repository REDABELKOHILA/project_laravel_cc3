<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Créer un Module</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('modules.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="code_module" class="block text-gray-700 text-sm font-bold mb-2">code de module</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="code_module" name="code_module" value="{{ old('code_module') }}" required>
            </div>

            <div class="mb-4">
                <label for="libelle_module" class="block text-gray-700 text-sm font-bold mb-2">Libellé Module</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="libelle_module" name="libelle_module" value="{{ old('libelle_module') }}" required>
            </div>

            <div class="mb-4">
                <label for="masse_hor_presentielle" class="block text-gray-700 text-sm font-bold mb-2">Masse Horaire Présentielle</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="masse_hor_presentielle" name="masse_hor_presentielle" value="{{ old('masse_hor_presentielle') }}" required>
            </div>

            <div class="mb-4">
                <label for="masse_hor_distantielle" class="block text-gray-700 text-sm font-bold mb-2">Masse Horaire Distancielle</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="masse_hor_distantielle" name="masse_hor_distantielle" value="{{ old('masse_hor_distantielle') }}" required>
            </div>

            <div class="mb-4">
                <label for="bilan_compet_module" class="block text-gray-700 text-sm font-bold mb-2">Bilan Compétence Module</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bilan_compet_module" name="bilan_compet_module" value="{{ old('bilan_compet_module') }}" required>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Soumettre</button>
        </form>
    </div>
</x-app-layout>
