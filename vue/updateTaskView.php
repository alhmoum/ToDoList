<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <header>

    </header>
    <main>
        <form method="POST" action = "" >
            <div class="mb-3">
                <label for="id" class="form-label">id</label>
                <input type="text" class="form-control" id="id" name = "id">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name = "name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name = "description">
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Due date </label>
                <input type="date" class="form-control" id="due_date" name = "due_date">
            </div>
            <div class="mb-3">
                <label for="id_task_giver" class="form-label">Task Giver</label>
                <input type="text" class="form-control" id="id_task_giver" name = "id_task_giver">
            </div>
            <div class="mb-3">
                <label for="id_assigned_to" class="form-label">Assigned to</label>
                <input type="text" class="form-control" id="id_assigned_to" name="id_assigned_to">
            </div>
            <div class="mb-3">
                <label for="id_status" class="form-label">Stauts</label>
                <input type="text" class="form-control" id="id_status" name="id_status">
            </div>
            
            <button type="submit" class="btn btn-primary" name = "update_task">Submit</button>
        </form>

    </main>
    <footer>

    </footer>

</body>

</html>