<?php
include 'partials\header.php';

require  __DIR__ . '/users.php';

if (!isset($_GET['id'])) {
    include 'partials\not_found.php';
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);

if (!isset($user)) {
    include 'partials/not_found.php';
    exit;
}
?>

<div class="">

</div>
<form method="post" enctype="multipart/form-data" action="#">
    <div class="form-group">
        <label>Name</label>
        <input type="name" value="<?php echo $user['name'] ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>UserName</label>
        <input name="username" value="<?php echo $user['username'] ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input name="email" value="<?php echo $user['email'] ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Website</label>
        <input name="website" value="<?php echo $user['website'] ?>" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Image</label>
        <input name="picture" type="image" class="form-control-file">
    </div>

    <button class="btn btn-success">Submit</button>

</form>