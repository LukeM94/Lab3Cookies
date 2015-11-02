<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <div class="login">
        <h1>Login</h1>
        <form method="post" action="">
            <p><input type="text" name="login" value="" placeholder="Username"></p>
            <p><input type="password" name="password" value="" placeholder="Password"></p>
            <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
    </div>

<p>
    <?PHP

    $login = $_POST['login'];
    print ($login);

    ?>
</p>
</body>
</html>