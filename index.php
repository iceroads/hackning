<?php
session_start();
// Database connection
include 'db.php';

if (isset($_POST["login_submit"])) {

    $stmt = $pdo->query("
    SELECT * FROM 
        users 
    WHERE 
        email = '{$_POST['email']}'
    AND
        password = '{$_POST['password']}'
    ");

    if ($stmt) {
        $user = $stmt->fetchObject();
        if ($user) {
            $_SESSION["user"] = true;
            include ('users.php');
            die();
        }
    }

}

include 'header.php';
?>
<body>
<section class="hero is-primary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    <form action="" method="POST" class="box">
                        <div class="field">
                            <label for="" class="label">Email</label>
                            <div class="control has-icons-left">
                                <input type="email" name="email" placeholder="e.g. bobsmith@gmail.com" class="input" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control has-icons-left">
                                <input type="password" name="password" placeholder="*******" class="input" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <button class="button is-success" name="login_submit">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>