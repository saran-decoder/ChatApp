<?php

    $login_page = true;

    //TODO: Redirect to a requested URL instead of base path on login_page
    if (isset($_POST['user']) and isset($_POST['password'])) {
        $user_login = $_POST['user'];
        $password = $_POST['password'];

        $result = UserSession::authenticate($user_login, $password);
        $login_page = false;
    }

    if (!$login_page) {
        if ($result) {
            $should_redirect = Session::get('_redirect');
            $redirect_to = getConfig('root_path');
            if (isset($should_redirect)) {
                $redirect_to = $should_redirect;
                Session::set('_redirect', false);
            }
?>

<script>
	window.location.href = "<?=$redirect_to?>"
</script>

<?php
    } else {
?>

<script>
	window.location.href = "/?error"
</script>

<?php
    }
    } else {
?>


<?php
	if(isset($_GET['error'])){
?>
    <div class="toast fade toast fade show me-2 mt-2 position-fixed end-0 show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <strong class="me-auto ms-2">Error</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-danger">Invalid Credentials.</div>
    </div>
<?php
	}
?>
<div class="login-container container">
    <span class="form-title">Login</span>
    <form action="" method="post" class="d-flex align-items-center flex-column">
        <label class="mb-3 w-100">
            <input type="text" name="user" class="form-data p-1 px-3 rounded-3 w-100" placeholder="Username or Email" required>
        </label>
        <label class="mb-3 w-100">
            <input type="password" name="password" class="form-data p-1 px-3 rounded-3 w-100" placeholder="Password" required>
        </label>
        <div class="form-btn-align">
            <a href="signup" class="mt-1">Signup</a>
            <input type="submit" class="form-submit p-1 px-3 rounded-5 mt-2" value="Login">
        </div>
    </form>
</div>

<?php
    }
?>