<?php

    require "functions.php";

    check_login();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        $query = "select * from user where email = '$email' && password = '$password' limit 1";

        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['info'] = $row;
            header("Location: profile.php");
            die;
        } else {
            $error = "wrong email or password";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <div class="content">
            <div class="content-left">
                <div class="profile">
                    <img src="default-avatar-icon-of-social-media-user-vector.jpg" alt="Profile Picture">
                    <h3><?php echo $_SESSION['info']['name'] ?></h3>
                </div>
            </div>
            <div class="content-right">
                <div class="top-games">
                    <div class="games-display">
                        <h2>Favorite Games</h2>
                        <center><img src="./games/ijant70onw4e1.png" alt=""></center>
                    </div>
                    <br>
                </div>
                <div class="current-games">
                    <h2>Current games</h2>
                </div>
            </div>
        </div>   
    </main>

    <?php include "footer.php"; ?>
</body>
</html>