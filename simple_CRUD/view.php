<?php

require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);

if (!isset($user)) {
    include "partials/not_found.php";
    exit;
}

include 'partials/header.php'
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                View user: <b><?php echo $user['name']?></b>
            </h3>
        </div>
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
                <td>
                    <a target="_blank" href="http://<?php echo $user['website']?>">
                        <?php echo $user['website']?>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?>