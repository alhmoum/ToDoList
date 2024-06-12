<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tâche</title>
    <!-- Inclure Tailwind CSS depuis un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">Modifier une tâche</h1>
        </div>
    </header>
    <main class="mt-10 max-w-3xl mx-auto">
        <form method="POST" action="" class="bg-white p-6 rounded-lg shadow-lg space-y-6">
            <div class="mb-3">
                <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="id" name="id">
            </div>
            <div class="mb-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="title" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="due_date" class="block text-sm font-medium text-gray-700">Date d'échéance</label>
                <input class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="due_date" name="due_date" type="datetime-local">
            </div>
            <div class="mb-3">
                <label for="id_task_giver" class="block text-sm font-medium text-gray-700">Donneur de tâche</label>
                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="id_task_giver" name="id_task_giver">
            </div>
            <div class="mb-3">
                <label for="id_assigned_to" class="block text-sm font-medium text-gray-700">Assigné à</label>
                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="id_assigned_to" name="id_assigned_to">
            </div>
            <div class="mb-3">
                <label for="id_status" class="block text-sm font-medium text-gray-700">Statut</label>
                <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="id_status" name="id_status">
            </div>
            <div class="mb-3">
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-bold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="update_task">
                    Soumettre
                </button>
            </div>
        </form>
        <a href="loginController.php">Vers la page de connexion</a>
    </main>
    <footer class="bg-white shadow mt-10">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 text-sm">© 2024 Votre Entreprise. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>
