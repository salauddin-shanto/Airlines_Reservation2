<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="payment.css">
</head>
 
<body>   

<section id="page_margin">
  
    <div class="header">
        Online Payment<br>
    </div>

    <form action="ticket.php" method="post">

        <div class="container">
            <label for="uname" class="lebel"><b>Bikash Number</b></label><br>
            <input type="text" placeholder="Bikash Number" name="bikash" id="bikash" required><br>

            <label for="psw" class="lebel"><b>Pin Code</b></label><br>
            <input type="password" placeholder="Pin Code" name="pin" id="pin" required><br>

            <button type="submit">Pay now</button><br>
        </div>

    </form>
</section>

</body>
</html>