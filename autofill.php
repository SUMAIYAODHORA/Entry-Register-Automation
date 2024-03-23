<?php
    include('includes/pdoconfig.php');
    if(!empty($_POST["apartmentid"])) {	
    $id=$_POST['apartmentid'];
    $stmt = $DB_con->prepare("SELECT * FROM room WHERE Room_number = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
    ?>
    <?php echo htmlentities($row['Room_number']); ?>
    <?php
    }
}


?>