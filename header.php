<style>
        * {
            padding: 0px;
            margin: 0px;
        }
        a {
            text-decoration: none;
        }
        body {
            background-color: #eee;
            font-family: tahoma;
            display: grid;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            display: grid;
            grid-template-rows: auto 1fr auto;
        }
        main {
            flex:1;
        }
        header {
            overflow: hidden;
            background-color: #3f50a4ff;
            padding: 20px 10px;
        }
        header a {
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
            color: white;
            float: left;
        }
        .header-right {
            float: right;
        }
        header img {
            height: 50px;
            width: auto;
            padding: 0px;
            margin: 0 auto;
            left: 50%;
            display: inline-flex;
            position: absolute;
        }
        footer {
            padding: 20px;
            text-align: center;
            background-color: #e6e5ebff;
            min-height: 50px;
            max-height: 50px;
        }
        input {
            margin: 4px;
            padding: 8px;
            width: 100%;
        }
        textarea {
            margin: 4px;
            padding: 8px;
            width: 70px;
        }
        button {
            padding: 10px;
        }
        h2 {
            text-align: center; 
            margin: auto; 
            padding: 20px;
        }
</style>
<header>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="profile.php">Profile</a>
    <center><img src="logo_IPMA_mini.png" alt="logo.png"></center>
    <div class="header-right">
        <?php if(empty($_SESSION['info'])):?>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        <?php else:?>
            <a href="edit_profile.php">Edit Profile</a>
            <a href="logout.php">Logout</a>
        <?php endif;?>
    </div>
</header>