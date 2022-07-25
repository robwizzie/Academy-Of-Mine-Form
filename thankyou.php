<html>
<body>

<?php
//get the user inputs
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$message = $_POST["message"];

//database connection
$conn = new mysqli('localhost', 'root','mypasswrd','academy_of_mine_form');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO form_information(firstName, lastName, email, message)
        values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$firstName, $lastName, $email, $message);
    $stmt->execute();
    echo "Registration Successful!";
    echo "<br>";
    echo "Your First Name is: ";
    echo $_POST["firstName"];
    echo "<br>";
    echo "Your Last Name is: ";
    echo $_POST["lastName"];
    echo "<br>";
    echo "Your Message is: ";
    echo $_POST["message"];
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>