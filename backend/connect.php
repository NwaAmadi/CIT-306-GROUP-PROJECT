<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cit-306-group-project";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];

    $conn = new mysqli($servername, $username, $password,$dbname);

    $sql = "INSERT INTO user_details (`First Name`, `Last Name`, Email, Country, City, `Phone`, Gender)
     VALUES ('$fname','$lname','$email','$country','$city','$number','$gender')";
    $stmt = $conn->query($sql);

    if ($stmt) {
        echo "Form Submission sucessful!.......";
    }
    else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
    header('Location: ../register.php?register=success');
    exit();
?>