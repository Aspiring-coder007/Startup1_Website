<?php
require_once"include/header.php";
require_once"include/connection.php";
?>

<section id="about">
    <div class="container">
        
        <header class="section-header py-5">
        <h3>Register Here</h3>
        </header>
        <?php 

            extract($_POST);
            if(isset($submit))
            {
                $query ="INSERT INTO register(name,email,mobile)
                VALUES('".$name."','".$email."','".$mobile."')";
                $res = mysqli_query($conn,$query);
                if($res)
                {
                    echo "Registration Successfully";
                }
                else
                {
                    echo "Please try Again";
                }


            }
        ?>

        <form method="post">

        <label>Enter Name:</label>
        <input type="text" name="name" class="form-control">
        <label>Enter Email:</label>
        <input type="email" name="email" class="form-control">
        <label>Enter Mobile:</label>
        <input type="number" name="mobile" class="form-control">
        <button name="submit" class="btn btn-success">Submit</button>
        
        
        </form>


    
    
    </div>

</section>
<?php
require_once"include/footer.php";
?>
