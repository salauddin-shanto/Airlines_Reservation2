<?php

    include 'connection.php';
    
    $em=$_POST['email']; 
    $pass=$_POST['password'];

    $sql=" SELECT * from admin where email='$em' AND password='$pass' ";
    $stmt=$conn->prepare($sql);
    $stmt->execute();

    foreach($result=$stmt->fetchall() as $key=>$val){
        $email=$val['email'];    
        $password=$val['password'];

    } 


    if($email != "" and $password !="")
    {
        echo "Welcome Admin";                
        header("Location: admin.php");
        exit();
        
    }

    else{
        echo "<script>alert('Incorrect Email/Password')</script>";
        header("Location: admin_login.php?error=Incorect Username or Password");
        exit();
    }


    $conn=null;

?>
