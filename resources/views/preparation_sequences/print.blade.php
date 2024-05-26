<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Séquences de Préparation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Liste des Séquences de Préparation</h1>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Préparation</th>
                    <th class="border border-gray-300 px-4 py-2">Heure</th>
                    <th class="border border-gray-300 px-4 py-2">Entier</th>
                    <th class="border border-gray-300 px-4 py-2">Type Espace Formation</th>
                    <th class="border border-gray-300 px-4 py-2">Objectif Séquence</th>
                    <th class="border border-gray-300 px-4 py-2">Contenu Rappel</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Rappel</th>
                    <th class="border border-gray-300 px-4 py-2">Motivation</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Motivation</th>
                    <th class="border border-gray-300 px-4 py-2">Plan</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Plan</th>
                    <th class="border border-gray-300 px-4 py-2">Développement 1</th>
                    <th class="border border-gray-300 px-4 py-2">Méthode Pédagogique 1</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Développement 1</th>
                    <th class="border border-gray-300 px-4 py-2">Développement 2</th>
                    <th class="border border-gray-300 px-4 py-2">Méthode Pédagogique 2</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Développement 2</th>
                    <th class="border border-gray-300 px-4 py-2">Développement 3</th>
                    <th class="border border-gray-300 px-4 py-2">Méthode Pédagogique 3</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Développement 3</th>
                    <th class="border border-gray-300 px-4 py-2">Synthèse</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Synthèse</th>
                    <th class="border border-gray-300 px-4 py-2">Évaluation</th>
                    <th class="border border-gray-300 px-4 py-2">Durée Évaluation</th>
                    <th class="border border-gray-300 px-4 py-2">Connexion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($preparationSequences as $sequence)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->preparation }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->heure }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->entier }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->type_espace_formation }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->objectif_sequence }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->contenu_rappel }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_rappel }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->motivation }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_motiv }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->plan }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_plan }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->developpement1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->mthod_pedagog_dev1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_dev1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->developpement2 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->mthod_pedagog_dev2 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_dev2 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->developpement3 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->mthod_pedagog_dev3 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_dev3 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->synthese }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_synthese }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->evaluation }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->duree_evaluation }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sequence->connexion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            <button onclick="window.print()" class="no-print bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Imprimer
            </button>
        </div>
    </div>
</body>
</html>
