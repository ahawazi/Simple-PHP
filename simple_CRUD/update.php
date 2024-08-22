<?php
include 'partials\header.php';

require  __DIR__. '/users.php';

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

echo '<pre>';
var_dump($user);
echo '</pre>';
?>

<form method="post" enctype="multipart/form-data" action="#">
    <div class="form-group">
        <label />
    </div>
</form>
