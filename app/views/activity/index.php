<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividades</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Lista de Actividades</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activities as $activity): ?>
                    <tr>
                        <td><?= $activity['title'] ?></td>
                        <td><?= $activity['description'] ?></td>
                        <td><?= $activity['status'] ?></td>
                        <td>
                            <a href="/activity/edit/<?= $activity['id'] ?>" class="btn btn-warning">Editar</a>
                            <a href="/activity/delete/<?= $activity['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/activity/create" class="btn btn-success">Nueva Actividad</a>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
