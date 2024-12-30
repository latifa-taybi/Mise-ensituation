<?php
include 'config.php';
include 'user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">save</button>
    </form>

    <?php
    if(isset($_POST["submit"])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($name) || empty($email) || empty($password)){
            echo("remplir tous les champs");
        }else{

            $save = new user($name, $email, $password);
            $save->insert($pdo);


        }
    }
    
    ?>
</body>
</html>