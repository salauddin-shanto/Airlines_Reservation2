<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" type="text/css" href="ticket.css" >
</head>

<body>
    
<?php 
    session_start();

    echo ' 
    <section id="ticket_margin">
        <section id="header_section">
            <div>
                <img  src="../image/logo4.png" class="logo">
            </div>
            <div class="gap">
                <h2>AirST</h2>                      
            </div>
            
            <div>
                <h2>Boarding pass</h2>

            </div>
            
            
        </section>

        <section>
            <div id="ticket">
                <div class="columns">

                    <div>
                        <h3>Flight </br>'.$_SESSION["plane_name"].'</br></h3>
                    </div>
                    <div>
                        <h3>Frome </br>'.$_SESSION["source"].'</br></h3>
                    </div>
                    <div>
                        <h3>To </br> '.$_SESSION["destination"].'</br></h3>
                    </div>
                                               
                </div>


                <div class="columns">
                    <div>
                        <h3>Date </br>'.$_SESSION["journey_date"].'</br></h3>
                    </div>

                    <div>
                        <h3>Class </br>'.$_SESSION["choose_class"].'</br></h3>
                    </div>

                    <div>
                        <h3>Ticket Fare </br>'.$_SESSION["ticket_price"].'</br></h3>
                    </div>
                </div>


                <div  class="columns">
                    <div>
                        <h3>Departure </br>'.$_SESSION["departure"].'</br></h3>
                    </div>

                    <div>
                        <h3>Arrival </br>'.$_SESSION["arrival"].'</br></h3>
                    </div>
                        

                    <div>
                        <h3>Boarding </br>'.$_SESSION["boarding"].'</br></h3>
                    </div>
                                     
                </div>

                <div  class="columns">
                
                <div>
                    <h3>User </br>'.$_SESSION["name"].'</br></h3>
                </div>

                <div>
                    <h3>Phone </br>'.$_SESSION["phone"].'</br></h3>
                </div>                   

                <div>
                    <h3>Ticket No </br>'.rand(1,200).'</br></h3>
                </div>
                                 
            </div>
                     

        </section>  
         
        <section id="footer_section">
            <h3>Happy Journey</h3>       
        </section>   

    </section>
    
    ';
  


?>

</body>
</html>
