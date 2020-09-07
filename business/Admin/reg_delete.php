<?php
    require_once"include/connection.php";


    $id = $_GET["id"];
    echo $id;

    
    $query= "DELETE FROM register where id = $id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        header("location:reg_view.php") ;

    }





?>

