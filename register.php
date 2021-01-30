<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
    .nav-item{
        background-color:#00008B;
    }
    .nav-link{
        color: white;
    }
    .btn btn-success{
        margin-left: 100%;
        align-items: center;
    }
      </style>
    <title>REGISTER</title>
  </head>
  <body>
      
      
     
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/**sql to create table
$sql = "CREATE TABLE user (
stud_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";**/
      
      $sql = "INSERT INTO user (fname, lname, email ,stud_id)
      
VALUES ('Sandya', 'maam', 'sneha@gmail.com' , '99999')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

/**$sql = "DELETE FROM user WHERE stud_id=984450";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}**/

      
      
      
     
      
$conn->close();
?>
      
      
 
      
      <form method="POST" action="loginn.php"></form>
      
    <ul class="nav nav-tabs">
  <li class="nav-item">
   
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">COURSES</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">HTML</a></li>
      <li><a class="dropdown-item" href="#">PYTHON</a></li>
      <li><a class="dropdown-item" href="#">JAVA</a></li>
        <li><a class="dropdown-item" href="#">UNIX</a></li>
      
      
    </ul>
  </li>
        
  <li class="nav-item">
    
      <a class="nav-link active" aria-current="page" href="#">ENQUIRY ?</a>
  </li>
        
   
</ul>
      
      <br><br>
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname">
  </div>
</div>
      <br><br>
      
      <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
  <label for="floatingInput">Email address</label>
</div><br>
      
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="STUDENT_ID" name="stud_id">
  <label for="floatingPassword">stud_id</label>
</div><br>
      <br>
    
</div>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <a href="http://127.0.0.1/mycap/loginn.php">  
  <button type="button" class="btn btn-success" name="submit">SUBMIT</button></a>
          </form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>