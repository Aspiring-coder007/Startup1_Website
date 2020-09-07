<?php
require_once"include/header.php";
require_once"include/connection.php";

 ?>

<section id="about">
      <div class="container">
            
        <header class="section-header py-5">
          <h3>Apply Jobs</h3>
        </header>
        <?php

            extract($_POST);
            if(isset($submit))
            {
                $file_name = $_FILES['file']['name'];
                $file_type = $_FILES['file']['type'];
                $file_size = $_FILES['file']['size'];
                $file_temp_loc = $_FILES['file']['tmp_name'];

                $target_store = "uploads/".$file_name;

                if(move_uploaded_file($file_temp_loc, $target_store))

                    $query = "INSERT INTO apply(name,email,mobile,resume)
                    VALUES ('".$name."','".$email."','".$mobile."','".$file_name."')";
                    $rs = mysqli_query($conn, $query);
                    if($rs)
                    {
                        echo 'Successfully Apply';
                     }
                     else{
                         echo 'Try Again';
                     }

                    }
         ?>

        <div class="row">
              <div class="col-sm-12">
           <form method="post" enctype="multipart/form-data">
        
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control">
            <label for="">Email:</label>
            <input type="email" name="email" class="form-control">
            <label for="">Mobile:</label>
            <input type="number" name="mobile" class="form-control">
            <label for="">Resume:</label>
            <input type="file" name="file" class="form-control"><br>
            <button name="submit" class="btn btn-primary">Apply Now</button>
          </form>
           </div> 
        </div>
      </div>
      
</section>

<?php
require_once"include/footer.php";
?>
