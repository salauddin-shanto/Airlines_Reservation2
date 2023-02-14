<?php
    $plane_id=791;
    $choose_class="Economic";
    $seat_number=1;
    $journey_date="2022-11-17";
    $journey_date=$journey_date[0].$journey_date[1].$journey_date[2].$journey_date[3].$journey_date[5].$journey_date[6].$journey_date[8].$journey_date[9];
    $user_id=32;
    $ticket_id=$plane_id.$choose_class[0].$seat_number.$journey_date.$user_id;

    echo "Ticket ID : " .$ticket_id;

    #current date in php
    $current_date=date("Y-m-d");
    echo "<br><br>Current date is " . $current_date . "<br>";

    #the next day of current date
    $day=date("d")+1;
    $month=date("m");
    $year=date("Y");
    $next=$year."-".$month."-".$day;

    echo "Next date is " . $next . "<br><br>";

    #check date is greater or not

    if($next==$current_date){
        echo "next date is equal to current date";
    }

    else if($next>$current_date){
        echo "next date is greater than current date";
    }

    #delete from database when current_date > journey_date

?>