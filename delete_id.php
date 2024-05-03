<?php


function delete_record($id) {
    global $con; 

    
    $stmt = $con->prepare("DELETE FROM user_details WHERE ID = ?");
    $stmt->bind_param("i", $id);

    $stmt->execute();
    $stmt->close();
}
?>
