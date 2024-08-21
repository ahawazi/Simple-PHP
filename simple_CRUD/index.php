<?php

require 'users.php';
$users = getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple php crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Website</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['phone'] ?></td>
        <td><?php echo $user['website'] ?></td>
        <td>
            <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info">View</a>
            <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-secondary">Update</a>
            <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>