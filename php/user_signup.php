<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="user_signup.css">
</head>

<body>  
    <?php

        include "connection.php";

        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $nid=$_POST['nid'];
            $dob=$_POST['dob'];
            $address=$_POST['address'];
            $post_code=$_POST['post_code'];

            $sql="INSERT INTO users (name, phone, email, password, nid, dob, address, post_code)
            VALUES('$name','$phone','$email', md5('$password'),'$nid','$dob','$address','$post_code')";

            $conn->exec($sql);

        }

        $conn=null;

    ?>


    <section id="page_margin"> 

        <section id="header">
            <div> 
                <img  src="../image/logo4.png" class="logo">
            </div>
            <div>
                <ul class="navigate">
                    <li><a href="../index.php" > HOME </a></li>
                    <li><a class="active" href="user_signup.php" > Sign up </a></li>
                </ul>
            </div>
        </section>
        
        <section id="header_next">
            <div >
                <h1>Register your account</h1>
            </div>
        </section>
 
        <section id="background_form_section">
        <section id="user_input_box_shadow">
            <section id="user_input_margin">
                <form name="user_form" method="post" onsubmit="return validateForm(this)">
                    Name : <input type="text" name="name" id="name" required><br>
                     
                    <div class="user_input">                    
                    <div>
                        Phone : <input type="text" name="phone" id="phone" required><br> 
                        Password : <input type="password" name="password" id="password" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i> <br>

                        NID : <input type="text" name="nid" id="nid" required><br>
                        Address : <textarea name="address" id="address" required></textarea> <br>

                    </div>
                    
                    <div>
                        Email : <input type="text" name="email" id="email" required><br>
                        Confirm Password : <input type="password" name="confirm_password" id="confirm_password" required>
                        <i class="bi bi-eye-slash" id="togglePassword2"></i><br>

                        Date of Birth : <input type="date" name="dob" id="dob" required><br>
                        Post Code : <input type="text" name="post_code" id="post_code" required><br>

                    </div>
                    </div>                   
                    
                    <input type="submit" name="submit" value="Submit">  
                    <div id="done"></div>                    
                    <script src="password_manager.js"></script>


                    <script>
                        function validateForm(form) {
                            var p1 = form.password.value;
                            var p2 = form.confirm_password.value;

                            if(p1 != p2) {
                                alert("Password didn't match");
                                return false;
                            } 
                            else {
                                alert("Account created sucessfully");
                                return true;
                            }
                            }
                    </script>

                </form>
                
            </section>
        </section>
        </section>


        <section id="footer_section">
            <ul class="footer_class">                
                <li><h3><a href="#">Contact Us</a></h3></li>
                <li><h3><a href="#">officess and brances</a></h3></li>
                <li><h3><a href="#">Services</a></h3></li>
                <li><h3><a href="#">Privacy Policy</a></h3></li>
                <li><h3><a href="#">Terms and conditions</a></h3></li>
                <li><h3>All right reserved by @AirST</h3></li>
            </ul>   

        </section>
        
</section>


</body>
</html>