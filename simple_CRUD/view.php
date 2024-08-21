<?php

require __DIR__.'/users.php';

$userId = $_GET['id'];

$user = getUserById($userId);

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
    <tbody>
        <tr>
            <th>Name:</th>
            <td><?php echo $user['name'] ?></td>
        </tr>
        <tr>
            <th>UserName:</th>
            <td><?php echo $user['username'] ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $user['email'] ?></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><?php echo $user['phone'] ?></td>
        </tr>
        <tr>
            <th>Website:</th>
            <td><?php echo $user['website'] ?></td>
        </tr>
    </tbody>
</table>
