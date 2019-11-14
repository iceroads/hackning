<?php
include 'db.php';


$stmt = $pdo->query("SELECT * FROM users");


include 'header.php';
?>
<body>

    <a href="http://127.0.0.1/lektion/hackning/add_user.php" class="button">Add user</a>

    <table class=table>
        <tr>
            <th>
                Email
            </th>
        </tr>
    <?php
    while ($user_row = $stmt->fetchObject()): ?>
        <tr>
            <td>
                <?php echo $user_row->email; ?>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>

