<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraton form</title>
    <link rel="stylesheet" href="css/register.css">
    <style>
    .card-container {
    width: 400px;
    height: 340px;
    background-color: white; 
    position: absolute;
    top: 50%; 
    left: 50%;
    transform: translate(-50%,-50%);
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
}
img{
   width: 300px;
   height: auto;
   padding-left: 50px;

}
p{
    font-weight: bold;
    font-size:  large;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgba(36, 36, 36, 0.699);
}
    </style>
</head>
<body>
    <div>
        <?php

        if(!isset($_GET['register'])) {

            ?>
        <div class="container">
        <div class="form-box">
            <h1>Register</h1>
            <form action="backend/connect.php" method="POST" id="registration-form">
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" placeholder="First Name" name="fname" required autofocus>

                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Last Name" name="lname" required autofocus>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="example@domain.com" name="email" required autofocus>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Country" name="country" required autofocus>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="City" name="city" required autofocus>
                    </div>
                    <div class="input-field">
                        <input type="tel" placeholder="+234XXXXXXXXXX" name="number" required autofocus>
                    </div>
                    <div class="gender">
                        <select name="gender" id="gender" aria-placeholder="Gender">
                            <option value="select" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">etc.</option>
                        </select>
                
                    </div>
                    <p>Want to make enquiries, <a href="#">click here!</a></p>

                </div>
                    <button type="submit" value="Submit">Go!</button>
            </form>
        </div>
    </div>
<?php 
        } else {

            echo ' <div class="card-container">
        <img src="assets/output-onlinegiftools.gif" alt="" id="loadGif"/>
        <p>Registration Successful..!</p>
        <script>
            setTimeout(()=>{
            window.location="index.html"
            },2000);
        </script>
    </div>';
        
        }

        ?>
    
    </div>
 
    
</body>
</html>