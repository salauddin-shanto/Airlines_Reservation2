<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <style></style>
</head> 

<body>   
 
<section id="page_margin">

        <section id="header">
            <div>
                <h1>Welcome to the Admin Panel</h1>
            </div>
        </section>  

        <section id="header_next">
            <div>
                <ul class="navigate">
                    <li><a class="active" href="admin.php" > Admin </a></li>
                    <li><a href="users_info.php" > Users </a></li>
                    <li><a href="add_plane.php" > Add Flight </a></li>
                    <!--
                    <li><a href="Login_info.php"> Route </a></li>
                    <li><a href="Ticket_info.php"> Ticket Info </a></li>
                    -->
                    <li><a href="../index.php">Users Panel </a></li>
                </ul>
            </div> 
        </section>

        <section id="main_body">
            <div class="dash"> 
                Your Info            
            </div>

            <div>
                <?php include "about_admin.php" ?>
            </div>
 
        </section>

        <section id="howto_section">
                <h2>How to manage admin Panel ?</h2>
                <ol class="howto_class">
                    <h3>
                    <li>Click Users to customize users </li>
                    <li>Click Flights to add flights</li>
                    <li>Click Update to update your Info</li>
                    </h3>
                </ol>            
        </section>

 
        
</section>


</body>
</html>