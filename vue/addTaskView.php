<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tâche</title>
    <!-- Inclure Tailwind CSS depuis un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Ajouter une tâche</h1>
        <form action="controller/addTaskController.php" method="post" class="space-y-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Titre :</label>
                <input type="text" id="title" name="title" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description :</label>
                <input type="text" id="description" name="description" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="started_time" class="block text-sm font-medium text-gray-700">Date de début :</label>
                <input type="datetime-local" id="started_time" name="started_time" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="due_date" class="block text-sm font-medium text-gray-700">Date d'échéance :</label>
                <input type="datetime-local" id="due_date" name="due_date" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="id_task_giver" class="block text-sm font-medium text-gray-700">ID du donneur de tâche :</label>
                <input type="number" id="id_task_giver" name="id_task_giver" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="id_assigned_to" class="block text-sm font-medium text-gray-700">ID de l'assigné :</label>
                <input type="number" id="id_assigned_to" name="id_assigned_to" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="id_status" class="block text-sm font-medium text-gray-700">ID du statut :</label>
                <input type="number" id="id_status" name="id_status" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-bold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Ajouter la tâche
                </button>
            </div>
        </form>
    </div>

</body>
</html>
