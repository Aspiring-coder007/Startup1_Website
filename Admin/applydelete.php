<?php
    require_once"include/connection.php";


    $id = $_GET["id"];
    echo $id;

    
    $query= "DELETE FROM apply where id = $id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        header("location:applyview.php") ;

    }





?>

