<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" type="text/css" href="about_admin.css" >
</head>

<body> 

    <?php

        include "connection.php";
  
        $sql = " SELECT * FROM admin";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

       
		// LOOP TILL END OF DATA
		foreach($result=$stmt->fetchall() as $key=>$val){
            $id=$val['id'];
            $name=$val['name'];    
            $phone=$val['phone'];
            $email=$val['email'];
            $nid=$val['nid'];
            $dob=$val['dob'];
            $address=$val['address'];
            $post_code=$val['post_code'];
            
            
            
  		}

            echo '
            
                <section>
                    <div id="rows">
                       <div class="columns">
                            <div>
                                <img src="../image/login1.png" class="photo"">
                            </div>                                                       
                        </div>

                        <div class="columns">
                            <div>
                                <h3>Admin ID</br>'.$id.'</br></h3>
                            </div>
                            <div>
                                <h3>Name</br>'.$name.'</br></h3>
                            </div>                                                       
                        </div>

                        <div class="columns">
                            <div>
                                <h3>Phone </br>'.$phone.'</br></h3>
                            </div>
                            <div>
                                <h3>Email </br> '.$email.'</br></h3>
                            </div>                       
                        </div>

                        <div class="columns">
                            <div>
                                <h3>NID </br>'.$nid.'</br></h3>
                            </div>

                            <div>
                                <h3>Date of birth </br>'.$dob.'</br></h3>
                            </div>                        
                        </div>
                
                        <div class="columns">       
                            <div>
                                <h3>Address </br> '.$address.'</br></h3>
                            </div>

                            <div>
                                <h3>Post code </br> '.$post_code.'</br></h3>
                            </div>
                        </div>
        
                </section>  
                        
      
            ';
        
        

        $conn=null;
		?>

        <section>
            <form action="update_info.php" method="POST" class="submit">
                    <button type="submit">Update Info</button>                
            </form>
            
        </section>
</body>

</html>
