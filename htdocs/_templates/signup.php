<?php

$signup = false;
if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_FILES['user_avatar'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $avatar = $_FILES['user_avatar']['tmp_name'];
    // die(var_dump($user));
    $error = User::signup($user, $email, $pass, $avatar);
    $signup = true;
}

if ($signup)
{
    if (!$error)
    {
        ?>
        <script>alert("Error: " . <?=$error?>);</script>
        <?php
    } else {
        ?>
        <script>window.location.href = '/';</script>
        <?php
    }
} else {

?>

<div class="login-container container">
    <span class="form-title">Signup</span>
    <form action="" method="post" class="d-flex align-items-center flex-column" enctype="multipart/form-data">
        <label class="mb-3 w-100">
            <input type="text" name="username" class="form-data p-1 px-3 rounded-3 w-100" placeholder="Username" required>
        </label>
        <label class="mb-3 w-100">
            <input type="email" name="email" class="form-data p-1 px-3 rounded-3 w-100" placeholder="Email" required>
        </label>
        <label class="mb-3 w-100">
            <input type="password" name="password" class="form-data p-1 px-3 rounded-3 w-100" placeholder="Password" required>
        </label>
        <label class="mb-3 w-100">
            <input type="file" name="user_avatar" style="text-overflow: ellipsis; width: inherit;" required>
        </label>
        <div class="form-btn-align">
            <a href="/" class="mt-1">Login</a>
            <input type="submit" class="form-submit p-1 px-3 rounded-5 mt-2" value="Sign Up">
        </div>
    </form>
</div>

<?php } ?>