<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="add_plane.css">
</head>

<body>  
    <?php

        include "connection.php";

        if(isset($_POST['submit'])){
            $plane_id=$_POST['plane_id'];
            $plane_name=$_POST['plane_name'];
            $source=$_POST['source'];
            $destination=$_POST['destination'];
            $departure=$_POST['departure'];
            $arrival=$_POST['arrival'];
            $class_name=$_POST['class_name'];
            $ticket_price=$_POST['ticket_price'];
            $available_seats=$_POST['available_seats'];

            $sql="INSERT INTO plane (plane_id,plane_name)
                              VALUES('$plane_id','$plane_name')";

            $conn->exec($sql);
 
            $sql="INSERT INTO route (plane_id, source, destination, departure, arrival)
                             VALUES('$plane_id','$source','$destination','$departure','$arrival')";

            $conn->exec($sql);

            $sql="INSERT INTO fare (plane_id, class_name, ticket_price, available_seats)
                             VALUES('$plane_id','$class_name','$ticket_price','$available_seats')";

            $conn->exec($sql);

        }

        $conn=null;

    ?>


    <section id="page_margin">

        <section id="header">
            <div>
                <img  src="../image/logo4.png" class="logo">
            </div>
            <div >
                <h1>Add a new flight </h1>
            </div>
            <div>
                <ul class="navigate">
                    <li><a href="admin.php" > Admin </a></li>
                    <li><a href="../index.php" > Users Panel </a></li>
                </ul>
            </div>
        </section>
        

 
        <section id="background_form_section">
            <section id="user_input_margin">
                <form name="user_form" method="post" >
                    
                     
                    <div class="user_input">                    
                    <div>
                        Plane ID <br> <input type="text" name="plane_id" id="plane_id" placeholder="Plane ID" required><br>
                        Source <br><input type="text" name="source" id="source" placeholder="Source Station" required><br> 
                        Departure <br> <input type="text" name="departure" id="departure" placeholder="21:30:00" required><br>
                        Class Name <br> <input type="text" name="class_name" id="class_name" placeholder="Class Name" required><br>
                        Available Seats <br> <input type="text" name="available_seats" id="available_seats" placeholder="Available Seats" required><br>

                    </div>
                    
                    <div>
                        Plane Name <br> <input type="text" name="plane_name" id="plane_name" placeholder="Plane Name" required><br>
                        Destination <br> <input type="text" name="destination" id="destination" placeholder="Destination Station" required><br>
                        Arrival <br> <input type="text" name="arrival" id="arrival" placeholder="21:30:00" required><br>
                        Ticket Price <br> <input type="text" name="ticket_price" id="ticket_price" placeholder="Ticket Price" required><br>
                        <input type="submit" name="submit" value="Submit">
                      

                    </div>
                    </div>                   
                    
                      
                  

                </form>
            </section>
        </section>

        
</section>


</body>
</html>