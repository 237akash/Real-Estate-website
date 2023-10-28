<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
	$number = $_POST["number"];
	$gender = $_POST["gender"];
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    
    $sql = "INSERT INTO `users` (`username`,`email`,`number`,`gender`) VALUES ('$username','$email','$number','$gender')";
    $result = mysqli_query($conn, $sql);

if ($result) {
	// Data inserted successfully
	echo "Data inserted successfully.";
} else {
	// Error in inserting data
	echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
<link rel="stylesheet" href="form.css">
<section class="contact" id="contact">
    <div class="container">
       <div class="content">
           <div class="box form wow slideInLeft">
              <form action="https://formsubmit.co/abhishekharpale2@gmail.com" method="post">
                 <input type="text" placeholder="Enter Name" name="username">
                 <input type="Email" placeholder="Enter Email" name="Email">
                 <input type="number" placeholder="Enter Mobile" name=" Mobile No" >
                 <textarea placeholder="Enter Message" name="Enter Message"></textarea>
                 <button type="submit">Send Message</button>
              </form>
           </div>
       </div>
    </div>
</section>

</body>
</html>
