<?php
include 'db.php';
if (isset($_POST['add_user'])) {
    $stmt = $pdo->query("
    INSERT INTO users
    (email, password)
    VALUES(
        '{$_POST['email']}',
        '{$_POST['password']}'
        )
    ");

    var_dump($stmt);

}

include 'header.php';
?>

<body>

<form action="" method="POST">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <label for="password">Password:</label>
    <input type="text" name="password" id="password">
    <button name="add_user">Add user</button>
</form>
</body>
</html>
