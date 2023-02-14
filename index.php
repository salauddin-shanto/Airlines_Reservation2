<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="php/index.css">
    <style>    
        .padx{
            padding-left: 120px; padding-right:120px;

        }
    </style>
</head> 
 
<body>       

<nav class="navbar navbar-expand-sm bg-light position-fixed padx" style="top:0 ;width:100%;"> <!-- Navbar using bootstrap-->
    <div class="container">
        <div>
            <a href="index.php" class="navbar-brand"><img src="image/logo4.png" alt="" height="70px">AirTravels</a>
        </div>

        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Check In</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Flight Info</a></li>
                <li class="nav-item"><a href="php\user_signup.php" class="nav-link">Sign Up</a></li>
                <li class="nav-item"><a href="#" class="nav-link">contact Us</a></li>
            </ul>
        </div>
    </div>
</nav> <!-- Navbar Ends here-->


<div class="pad" style="margin-top:70px; padding-top:30px;padding-bottom:30px;text-align:center; background: rgb(215,215,205);"> 
    <h3>Book your flight now</h3>
</div>

<section id="page_margin"> 


        <section id="background_form_section">
            <div class="form_div">
                <form action="php/redirect_search_flight.php" method="post">
                    From : <input type="text" name="source" id="source" required><br>
                    To : <input type="text" name="destination" id="destination" required><br> 
                    Journey Date : <input type="date" name="journey_date" id="journey_date" required><br>

                    Choose Class :
                    <select name="choose_class" class="choose_class">
                        <option value="Economic">Economic</option>
                        <option value="Business">Business</option>
                        <option value="First">First</option>
                    </select>

                    <input type="submit" name="submit" value="Search Flights">  
                </form>
            </div>


            <div class="pic"></div>
        </section>

        <section id="why_section">
            <h2>Why AirST?</h2>
            <ul class="why_class">
                <li><h3>Easy to navigate<h3></li>
                <li><h3>Customer friendly prices.<br>(Cheap and discount upto 50%)</h3></li>
                <li><h3>Secure transaction<br>(Online payment much easier)</h3></li>
                <li><h3>Safe Journey</h3></li>
            </ul>
        </section>
 
        <section id="howto_section">
                <h2>How to book your flight?</h2>
                <ol class="howto_class">
                    <h3>
                    <li>Search Flight</li>
                    <li>Select the best suited flight</li>
                    <li>Complete the transaction</li>
                    <li>Collect and print your ticket</li>
                    </h3>
                </ol>            
        </section>
        
</section>

<?php include "php/footer.php" ?>
</body>
</html>