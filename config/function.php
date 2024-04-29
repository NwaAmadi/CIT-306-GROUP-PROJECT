<?php
    require_once('C:\wamp64\www\CIT-306-GROUP-PROJECT\config\db.php');

    function display_data(){
        global $con;
        $query = "select * from `user_details`";
        $result = mysqli_query($con, $query);
        return $result;
    }
?>