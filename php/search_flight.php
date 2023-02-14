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
    <link rel="stylesheet" type="text/css" href="search_flight3.css">
    <style>    
        .padx{
            padding-left: 120px; padding-right:120px;

        }
    </style>
</head>
 
<body>    

<?php include "navbar.php"; ?>

<div class="pad" style="margin-top:70px; padding-top:30px;padding-bottom:30px;text-align:center; background: rgb(215,215,205);"> 
    <h4>Select Your Flight</h4>
</div>

<section id="page_margin">  
    <?php

    if($_SESSION['rows']==0){
        ?>
        <div class="alert alert-warning alert-dismissible">
            <!--<button type="button" class="btn-close" data-bs-dismiss="alert"></button>-->
            <h4 style="text-align:center"><strong>No Flight Available </strong>for this route. <a href="../index.php" class="btn btn-warning btn-lg">Click</a> to Go back to previous page for searching again.</h4>
        </div>
    <?php

    }
    
    else{

        include "connection.php";

        $source=$_SESSION['source'];
        $destination=$_SESSION['destination'];
        $choose_class=$_SESSION['choose_class'];
        $journey_date=$_SESSION['journey_date'];

        $sql = " SELECT plane.plane_id,plane.plane_name,route.source,route.destination,route.departure, route.arrival, fare.class_name,fare.ticket_price
        FROM route INNER JOIN plane
            ON route.plane_id=plane.plane_id
            INNER JOIN fare
            ON plane.plane_id=fare.plane_id
        WHERE route.source='$source' AND route.destination='$destination' AND fare.class_name='$choose_class' " ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        

        // LOOP UNTILL THE END OF THE DATA
        foreach($result=$stmt->fetchall() as $key=>$val){

            $plane_id=$val['plane_id']; 
            $plane_name=$val['plane_name'];    
            $departure=$val['departure'];
            $arrival=$val['arrival'];
            $ticket_price=$val['ticket_price'];
            $boarding_h=intdiv((strtotime($departure)-strtotime('0:20:00')),3600);
            $boarding_m=intdiv(fmod((strtotime($departure)-strtotime('0:20:00')),3600),60) ;
            $boarding=$boarding_h.":".$boarding_m.":00";

            echo '
            <section id="flight_margin">
        
                <section id="ticket_section">
                        <div class="columns">
                            <div>
                                <h6>Flight</h6> <h3> '.$plane_name.'</h3>
                            </div>

                            <div>
                                <h6>From</h6> <h3>'.$source.'</h3>
                            </div>       
                            <div>
                                <h6>To</h6> <h3> '.$destination.'</h3>
                            </div>
                                                        
                        </div>
        
        
                        <div class="columns">
                            <div>
                                <h6>Plane Code </h6> <h3>'.$plane_id.'</h3>
                            </div> 
                            <div>
                                <h6>Departure </h6> <h3>'.$departure.'</h3>
                            </div>
        
                            <div>
                                <h6>Arrival </h6> <h3>'.$arrival.'</h3>
                            </div>  

                        </div>
        
        
                        <div  class="columns">      
                            <div>
                                <h6><br></h6> <h3><br></h3>
                            </div>                       
        
                            <div>
                                <h6>Journey Date </h6> <h3>'.$journey_date.'</br></h3>
                            </div>    
                            <div>
                                <h6>Available flights </h6> <h3>165</br></h3>
                            </div>                   
            
                        </div>

                        <div  class="columns">
                            <div>
                                <h6><br></h6> <h3><br></h3>
                            </div>  
                            <div> 
                                <h6>Class </h6> <h3>'.$choose_class.'</br></h3>
                            </div>

                            <div>
                                <h6>Ticket Fare </h6> <h3>'.$ticket_price.'</br></h3>      
                            </div>             
                        </div>            

                </section>  
                
                <section>
                    <div class="d-grid">                  
                        <a href="select_ticket.php?plane_id='.$plane_id.'" class="btn btn-success btn-lg btn-block" >Select this Flight<a>          
                    </div>  
                </section>

            </section>
            
            ';
        }
    }

    ?>

</section>

<?php include "footer.php"; ?>

</body>
</html>