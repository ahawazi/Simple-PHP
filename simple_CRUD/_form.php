<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update User <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                    Create new user
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="post" enctype="multipart/form-data"
                  action="#">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>" class="form-control">
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

        </div>
    </div>
</div>