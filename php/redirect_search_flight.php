<?php
 session_start();  
 include "connection.php";

 $source=$_POST['source'];
 $destination=$_POST['destination'];
 $choose_class=$_POST['choose_class'];
 $journey_date=$_POST['journey_date'];

 $_SESSION['source']= $source;
 $_SESSION['destination']=$destination;
 $_SESSION['choose_class']=$choose_class; 
 $_SESSION['journey_date']=$journey_date;

 $sql = " SELECT plane.plane_id,plane.plane_name,route.source,route.destination,route.departure, route.arrival, fare.class_name,fare.ticket_price
 FROM route INNER JOIN plane
     ON route.plane_id=plane.plane_id
     INNER JOIN fare
     ON plane.plane_id=fare.plane_id
 WHERE route.source='$source' AND route.destination='$destination' AND fare.class_name='$choose_class' " ;
 $stmt = $conn->prepare($sql);
 $stmt->execute();

 $rows=$stmt->rowCount();
     if($rows == 0){  
        $_SESSION['rows']=0;
        header("Location:search_flight.php");
        exit(0); 
     }
     else{
        $_SESSION['rows']=1;
        header("Location:search_flight.php");
        exit(0); 
      
     }
 
?>
