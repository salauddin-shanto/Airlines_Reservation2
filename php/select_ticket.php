<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $(this).toggleClass("blue");

            });
        });
    </script>
 


    <style>
        .blue{
            background-color:green;
        }
        .pad{
            padding-left: 120px;
            padding-right: 120px;
        }
        .padx_sm{
            padding-right: 50px;
        }
        .pady{
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .pad_float{
            padding-top: 75px;
            padding-bottom: 75px;
        }
        .pad_sm{
            padding-top: 20px;
        }
        .bg_color1{
            background: rgb(215,215,205);
        }


        .sleeper-white {
            width: 25px;
            height: 20px;
            border-radius: 4px;
        }

        .sleeper-gray {
            width: 25px;
            height: 20px;          
            border-radius: 4px;
        }

        .sleeper-green {
            width: 25px;
            height: 20px;
            border-radius: 4px;
        }
        .align{
            justify-content:space-between;
        }
        .size{
            width:50px;
            height:40px;
        }
        .positioning{
            position:fixed;
            left: 750px;
        }
    </style>
</head>
<body>

<?php include "navbar.php"; ?>

<!-- PHP to fetch flight info-->
    <?php
        
        include "connection.php";
        $source=$_SESSION['source'];
        $destination=$_SESSION['destination'];
        $choose_class=$_SESSION['choose_class'];
        $journey_date=$_SESSION['journey_date'];

        $available_flights=rand(1,200);

        $plane_id=$_GET['plane_id'];
        

        $sql = " SELECT plane.plane_id,plane.plane_name,route.source,route.destination,route.departure, route.arrival, fare.class_name,fare.ticket_price,fare.available_seats
        FROM route INNER JOIN plane
            ON route.plane_id=plane.plane_id
            INNER JOIN fare
            ON plane.plane_id=fare.plane_id
        WHERE route.source='$source' AND route.destination='$destination' AND fare.class_name='$choose_class' AND plane.plane_id='$plane_id'" ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $val=$stmt->fetch();

        $plane_id=$val['plane_id']; 
        $plane_name=$val['plane_name'];    
        $departure=$val['departure'];
        $arrival=$val['arrival'];
        $ticket_price=$val['ticket_price'];
        $total_seats=$val['available_seats'];

        $boarding_h=intdiv((strtotime($departure)-strtotime('0:20:00')),3600);
        $boarding_m=intdiv(fmod((strtotime($departure)-strtotime('0:20:00')),3600),60) ;
        $boarding=$boarding_h.":".$boarding_m.":00";

        $_SESSION['plane_id']=$plane_id;
        $_SESSION['plane_name']=$plane_id;
        $_SESSION['departure']=$plane_id;
        $_SESSION['arrival']=$plane_id;
        $_SESSION['ticket_price']=$plane_id;
        $_SESSION['boarding']=$plane_id;
        
    ?>


<div class="pad" style="margin-top:70px;padding-top:20px"> <!-- Flight info (using bootstrap)-->
    <h3><?php echo "$val[plane_name] ($plane_id)" ?></h3>
</div>

<div class="d-flex justify-content-between pad" style="background: rgb(215,215,205);"> <!--Flex devides the div into two column -->
    <div class="d-flex py-2"> <!-- 1st Column under flex . Also a grid for inner columns-->
        <div >
            <div> From :</div>
            <h5><?php echo" $source" ?></h5> 
            <div> To :</div>
            <h5><?php echo" $destination" ?></h5>
        </div>  
    </div>

    <div class="d-flex py-2"> <!-- 2nd Column under flex . Also a grid for inner columns-->
        <div >
            <div> Date:</div>
            <h5><?php echo" $journey_date" ?></h5>
            <div> Available Flights:</div>
            <h5><?php echo" $available_flights" ?></h5>

        </div>  
    </div>

    <div class="d-flex py-2"> <!-- 3rd Column under flex -->
        <div >
            <div> Departure:</div>
            <h5><?php echo "$departure" ?></h5>
            <div> Arrival:</div>
            <h5><?php echo" $arrival" ?></h5>
        </div> 
    </div>

    <div class="d-flex py-2"> <!-- 4th Column under flex -->
        <div >
            <div> Class:</div>
            <h5><?php echo" $choose_class" ?></h5>
            <div> Ticket:</div>
            <h5><?php echo" $ticket_price" ?></h5>
        </div> 
    </div>

    <div class="pady">
        <a href="../index.php" class="btn btn-success btn-lg">Modify Search</a>
    </div>
</div>   <!-- Flight info ends here-->

<!-- Ticket selection starts here-->
<div class="container-fluid pad py-3">
    <div>
        <h5>Choose your desired seat</h5>
    </div>
</div>

<div class="row container-fluid pad ">
    <div class="col"> <!-- 1st column. #Ticket selection goes here-->
        <div class="row">  <!--coloring lists ---1st row in 1st column --> 
            <div class="col ">
                <ul class="list-inline ">
                    <li class="sleeper-white bg-secondary"></li>
                    <li class="legend-label">Available</li>
                </ul>
            </div>

            <div class="col ">
                <ul class="list-inline">
                    <li class="sleeper-gray bg-danger"></li>
                    <li class="legend-label">Booked</li>
                </ul>
            </div>

            <div class="col ">
                <ul class="list-inline ">
                    <li class="sleeper-green bg-success"></li>
                    <li class="legend-label">Selected</li>
                </ul>
            </div>       
            <hr>     
        </div>

        <div class="row " > <!--main div for seat selection ---2nd row in 1st column --> 
            <?php
                for($i=1;$i<=$total_seats;$i+=5){
                    ?>
                    <div class="row py-3"> 
                        <div class="col ">
                            <button type="button" class="btn btn-md btn-secondary size" value="<?php $_SESSION['seat_numeber']="$choose_class[0]".$i; ?>"> <?php echo "$choose_class[0]".$i ?> </button> 
                        </div>

                        <div class="col ">
                            <button type="button" class="btn btn-md btn-secondary size" value="<?php $_SESSION['seat_numeber']="$choose_class[0]".$i+1; ?>"> <?php echo "$choose_class[0]".$i+1 ?> </button>
                        </div> 

                        <div class="col ">
                            <button type="button" class="btn btn-md btn-secondary size" value="<?php $_SESSION['seat_numeber']="$choose_class[0]".$i+2; ?>"> <?php echo "$choose_class[0]".$i+2 ?> </button>
                        </div>

                        <div class="col ">
                            <button type="button" value="<?php echo $choose_class[0].$i+3; ?>" onclick="f1(this)" class="btn btn-md btn-secondary size" > <?php echo "$choose_class[0]".$i+3 ?> </button>
                        </div>

                        <div class="col ">
                            <form action="user_login.php" method="post">
                                <?php 
                                $seat_id=$choose_class[0].$i+4;
                                echo '
                            <a href="user_login.php?seat_id='.$seat_id.'" class="btn btn-md btn-secondary size">  '.$seat_id.' </a>
                            ';
                            ?>
                            </form>
                        </div>
                    </div>
                    <?php
                } 
               
                echo $selected = "<script>document.write(selected_in_js)</script>"; //I want above javascript variable 'a' value to be store here
                $_SESSION['selected']=$selected;
            ?>
        </div> 
    </div> <!-- 1st column ends here -->


    <div class="col" style="margin-left:50px"> <!-- 2nd column final selection will be added here -->
        <div class="card position-fixed "style="width:40%"> <!-- Selected seat is covered under card -->
            <div class="card-body">
                <div class="row" style="padding-bottom:30px">
                    <h4>Seat Details</h4>
                </div>

                <div class="row" style="padding-bottom:70px">
                    <div class="col">
                        <h6>Class</h6>
                        <h4><?php echo $choose_class ;?></h4>
                    </div>  

                    <div class="col">
                        <h6>Seat Number</h6>
                        <h4 id="func"> </h4>
                        
                    </div>

                    <div class="col">
                        <h6>Fare</h6>
                        <h4><?php echo $ticket_price ;?></h4>
                    </div>
                </div>

                <div class="row d-grid">
                    <a href="user_login.php" class="btn btn-lg btn-success btn-block">Continue Purchase</a>            
                </div>
            </div>
        </div>
    </div> <!-- 2nd column ends here-->
</div>

<!--Footer goes here-->
<?php include "footer.php"; ?>

</body>
</html>