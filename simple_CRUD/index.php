<?php

require 'users/users.php';
$users = getUsers();

include 'partials/header.php';
?>

<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create new user</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>Image</th>
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
                <td>
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="<?php echo $user['name']?>">
                    <?php endif; ?>
                </td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a target="_blank" href="http://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>
                <td>
                    <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-secondary">Update</a>
                    <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>