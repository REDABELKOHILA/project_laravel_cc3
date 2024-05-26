<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                {{ __('Modules') }}
            </h2>
        </x-slot>
    <div class="container mx-auto px-4 py-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Preparation') }}
            </h2>
        </x-slot>
        <a href="{{ route('preparation_sequences.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Ajouter
            Sequence</a>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Préparation</th>
                    <th class="py-2 px-4 border-b">Heure</th>
                    <th class="py-2 px-4 border-b">Type Espace Formation</th>
                    <th class="py-2 px-4 border-b">Objectif Séquence</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($preparationSequences as $preparationSequence)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $preparationSequence->preparation }}</td>
                        <td class="py-2 px-4 border-b">{{ $preparationSequence->heure }}</td>
                        <td class="py-2 px-4 border-b">{{ $preparationSequence->type_espace_formation }}</td>
                        <td class="py-2 px-4 border-b">{{ $preparationSequence->objectif_sequence }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('preparation_sequences.show', $preparationSequence->id) }}"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Afficher</a>
                            <a href="{{ route('preparation_sequences.edit', $preparationSequence->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Modifier</a>
                            <form action="{{ route('preparation_sequences.destroy', $preparationSequence->id) }}"
                                method="POST" class="inline">
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
</x-app-layout>
