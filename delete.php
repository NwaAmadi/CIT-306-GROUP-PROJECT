<?php


function delete_record($id) {
    global $con; 

    
    $stmt = $con->prepare("DELETE FROM your_table_name WHERE Id = ?");
    $stmt->bind_param("i", $id);

    $stmt->execute();
    $stmt->close();
}
?>
