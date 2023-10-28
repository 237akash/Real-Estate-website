<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
	$number = $_POST["number"];
	$adhar = $_POST["adhar"];
    $add = $_POST["add"];
    $home = $_POST["home"];
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    
    $sql = "INSERT INTO `register` (`username`,`email`,`number`,`adhar`,`add`,`home`) VALUES ('$username','$email','$number','$adhar','$add','$home')";
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
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="rej.css">
     
    <!----===== Iconscout CSS ===== -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->

   <title>Responsive Regisration Form </title>
</head>
<body >
    <div class="container">
        <header>Registration</header>

        <form action="" method="post"  id="rejistration">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input  id="name" type="text" placeholder="Enter your name" name="username" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input  id="email" type="text" placeholder="Enter your email" name="email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input id="number"  type="number" placeholder="Enter mobile number" name="number" required>
                        </div>

                        <div class="input-field">
                            <label>Adharcard number</label>
                            <input id="adhar"  type="number" placeholder="0000-0000-0000" name="adhar" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input id="add"  type="text" placeholder="Addresss" name="add" required>
                        </div>

                        <div class="input-field">
                            <label>Your Requirement for Bunglows or Flats</label>
                            <input id="text"  type="text" placeholder="sq.feet / BHK" name="home" required>
                        </div>

                       

                        <button id="btn">Submit</button> 
                        
                    </div>
                </div>

              
               
            </div>
           

        </form>
    </div>



    <script>

        document.getElementById("btn").addEventListener("click", generatePDF);

        function generatePDF() {
            var name = document.getElementById("name").value
            var email = document.getElementById("email").value
            var number = document.getElementById("number").value
            var adhar = document.getElementById("adhar").value
            var add = document.getElementById("add").value
            var income = document.getElementById("income").value


            // Create the PDF
            const pdf = new jsPDF();

            

            pdf.text(`Name: ${name}\n\nNumber: ${number}\n\nEmail: ${email}\n\nAdhar: ${adhar}\n\nadd: ${add}\n\nincome: ${income} `, 10, 10);

            // Download the PDF
            pdf.save('homeverse'+'.pdf');
        }

    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase
<script src="./rej.js"> </script>    



</body>
</html>