<?php
$inserted = false;
$notInserted = false;
if (isset($_POST['NAME'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if (!$con){
    die("Could not connect to server" .mysqli_connect_error());

}
 
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$SUBJECT = $_POST['SUBJECT'];

$sql= "INSERT INTO `php_project`.`normal_form` (`NAME`, `EMAIL`, `SUBJECT`, `TIME`) VALUES  ('$NAME', '$EMAIL', '$SUBJECT', CURRENT_TIMESTAMP);";

if ($con->query($sql)== true){
$inserted=true;
}
else{
    $notInserted = true;
}
$con->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill out the form!</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <div class="cta-form">
        <?php 
            if($inserted == false){
               echo" <h2>Fill out the form!</h2>";
                if ($notInserted == true){
                   echo "<p>Error!!</p>";
                }
            }
            else if($inserted == true){
echo "<h2 class='inserted'>Success!</h2>";
            }

?>
       
        </div>
        <form action="index.php" method="POST" class="form">

            <input type="text" placeholder="Name" class="form__input" name="NAME" id="name" />
            <label for="name" class="form__label">Name</label>

            <input type="email" placeholder="Email" class="form__input" name="EMAIL" id="email" />
            <label for="email" class="form__label">Email</label>

            <input type="text" placeholder="Subject" class="form__input" name="SUBJECT" id="subject" />
            <label for="subject" class="form__label">Subject</label>
            <input type="submit" value="Submit" class="form__submit" />


        </form>
    </div>

</body>

</html>