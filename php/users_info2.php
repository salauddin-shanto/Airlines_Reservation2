<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" type="text/css" href="user_info.css" >
</head>

<body>
<section>
    
    <?php

        include "connection.php";
  

        $sql = " SELECT * from users " ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
		
    <div class="table-responsive">          
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>NID</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Post Code</th>
            </tr>
            </thead>
            <tbody>

            <?php

                foreach($result as $key=>$value)
                {
                    ?>
                    <tr>
                        <td><?php echo $value['id'];?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['phone'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['nid'];?></td>
                        <td><?php echo $value['dob'];?></td>
                        <td><?php echo $value['address'];?></td>
                        <td><?php echo $value['post_code'];?></td>
                    </tr>
                            
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.min.js"></script>

</section>
</body>
</html>
