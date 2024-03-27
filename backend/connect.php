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

    $sql = "INSERT INTO details (`First Name`, `Last Name`, Email, Country, City, Phone, Gender) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssis", $fname, $lname, $email, $country, $city, $number, $gender);
    if ($stmt->execute()) {
        echo "Form Submission sucessful!.......";
    }
    else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $stmt->close();
    $conn->close();
?>