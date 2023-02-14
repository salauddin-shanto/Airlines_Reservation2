<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" type="text/css" href="users_info.css" >
</head>

<body> 
<section id="page_margin">

        <section id="header">
            <div>
                <ul class="navigate">
                    <li><a href="admin.php" > Admin </a></li>
                    <li><a class="active" href="users_info.php" > Users </a></li>
                    <li><a href="add_plane.php" > Add Flight </a></li>
                    <li><a href="../index.php"> Users Panel </a></li>
                </ul>
            </div>
        </section>

        <section id="header_next">
            <div>
                <h1>All registered user informations</h1>
            </div>
        </section> 

        
    

        <section class="users_table">   
            <table class="table_class" >
                <tr>
                    <th style="width:5%">ID</th>
                    <th style="width:15%">Name</th>
                    <th style="width:15%">Phone</th>
                    <th style="width:20%">Email</th>
                    <th style="width: 10%">NID</th>
                    <th style="width:10%">Date of Birth</th>
                    <th style="width:20%">Address</th>
                    <th style="width:5%">Post Code</th>
                </tr>
            </table>

            <?php

                include "connection.php";
        

                $sql = " SELECT * from users " ;
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                function show($id,$name,$phone,$email,$nid,$dob,$address,$post_code){
                    ?>
                
                        <table style="width:100%" >
                        <tr>
                            <td style="width:5%"><?php echo $id ?></td>
                            <td style="width:15%"><?php echo $name ?></td>
                            <td style="width:15%"><?php echo $phone ?></td>
                            <td style="width:20%"><?php echo $email ?></td>
                            <td style="width:10%"><?php echo $nid ?></td>
                            <td style="width:10%"><?php echo $dob ?></td>
                            <td style="width:20%"><?php echo $address ?></td>
                            <td style="width:5%"><?php echo $post_code ?></td>        
                        
                        </tr>
                        </table>
                    
                

                <?php } 
            
                // LOOP TILL END OF DATA
                foreach($result=$stmt->fetchall() as $key=>$val){
                    $id=$val['id'];
                    $name=$val['name'];
                    $phone=$val['phone'];
                    $email=$val['email'];
                    $password=$val['password'];
                    $nid=$val['nid'];
                    $dob=$val['dob'];
                    $address=$val['address'];
                    $post_code=$val['post_code'];
                    
                    show($id,$name,$phone,$email,$nid,$dob,$address,$post_code);
                    
                }


                $conn=null;
                ?>

        </section>

</section>
</body>
</html>
