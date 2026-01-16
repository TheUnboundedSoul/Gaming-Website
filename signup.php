<?php

    require("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $name = addslashes($_POST['name']);

        $query = "insert into user (name,email,password) values ('$name','$email','$password')";

        $result = mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <?php include "header.php";?>

    <main>
        <div style="margin: auto; max-width: 600px">
            <?php
                if(!empty($error)) {
                    echo "<div>".$error."</div>";
                }
            ?>
            <h2>Signup</h2>

            <form method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="password" placeholder="Password" required>

                <button>Signup</button>
            </form>
        </div>
    </main>

    <?php include "footer.php";?>
</body>
</html>