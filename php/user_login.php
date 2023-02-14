<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="user_login2.css">
</head>
 
<body>  
  
<section id="page_margin">
  
    <div class="header">
        seat : <?php echo $_SESSION['selected_seat'] ;?>
    </div>

    <form action="manipulate_login.php" method="post"> 
 
        <div>
            <img src="../image/login1.png" class="login_png">
        </div>

        <div class="container">
            <label for="uname" class="lebel"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

            <label for="psw" class="lebel"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" id="password" required><br>

            <button type="submit">Login</button><br>
        </div>

    </form>
</section>

</body>
</html>