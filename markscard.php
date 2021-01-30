<?php 
$con=mysqli_connect("localhost","root","","result"); 
if(!$con) { die(" Connection Error "); } 
?>
<?php 

    require_once("markscard.php");
    $query = " select * from smarks ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
    
    
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                               
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $marks = $row['marks'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        
                                        <td><?php echo $marks ?></td>
                                        
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>