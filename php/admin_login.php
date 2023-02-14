<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="admin_login.css">
</head>

<body>  
 
<section id="page_margin">

    <div class="header">
        Admin Login<br>
    </div>

    <form action="goto_admin.php" method="post">  

        <div>
            <img src="../image/hacker.jpg" class="login_png">
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