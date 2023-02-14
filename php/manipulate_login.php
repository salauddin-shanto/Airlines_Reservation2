<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
<?php

    include 'connection.php';
    
    $email=$_POST['email']; 
    $pass=$_POST['password'];
    $pass=md5($pass);

    $sql=" SELECT * from users where email='$email' AND password='$pass' ";
    $stmt=$conn->prepare($sql);
    $stmt->execute();

    foreach($result=$stmt->fetchall() as $key=>$val){
        $name=$val['name'];
        $phone=$val['phone'];
        $email=$val['email'];    
        $password=$val['password'];
        $nid=$val['nid'];
        $dob=$val['dob'];
        $address=$val['address'];
        $post_code=$val['post_code'];

    } 


    if($email != "" AND $password !="")
    {

        session_start();
        $_SESSION["name"] = "$name";
        $_SESSION["phone"] = "$phone";
        $_SESSION["email"] = "$email";
        $_SESSION["password"] = "$password"; 
        $_SESSION["nid"] = "$nid";
        $_SESSION["dob"] = "$dob";
        $_SESSION["address"] = "$address";
        $_SESSION["post_code"] = "$post_code";

        header("Location:payment.php");
        exit(0); 
        
    }

    else{      
    ?>  
    <div class="alert alert-warning alert-dismissible">
        <!--<button type="button" class="btn-close" data-bs-dismiss="alert"></button>-->
        <h4 style="text-align:center"><strong>Incorrect Email/Password. </strong>Try Again</h4>
    </div>
    <?php
        
        include "user_login.php";
    }
 

    $conn=null;

?>
</body>
</html>