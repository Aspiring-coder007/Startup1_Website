<?php
require_once"include/sidebar.php";
require_once"include/connection.php";

?>

<?php
  require_once"include/header.php";
  ?>

  <div class="container">
    <h1 class="h3 mb-2 text-black-50-gray-800 text-center">Add Job Vacancy</h1>
    <hr>
    <?php 

            extract($_POST);
            if(isset($submit))
            {
              
                $query ="INSERT INTO career(title,location1,skill,position,last_date,des1) 
                VALUES('".$title."', '".$location1."', '".$skill."', '".$position."', '".$last_date."', '".$des1."')";
                $result = mysqli_query($conn, $query);
               
                if($result)
                {
                    echo '<div class="alert alert-success text-center"><strong>Succesfully</strong>Updated Job Details</div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"><strong>Please!</strong>Try Again!</div>';
                }


            }
    ?>
    <form method="POST">
        <label for="">Enter Job Title:</label>
        <input type="text" name="title" class="form-control">
        <label for="">Enter Job Location:</label>
        <input type="text" name="location1" class="form-control">
        <label for="">Enter Required Skill:</label>
        <input type="text" name="skill" class="form-control">
        <label for="">Select Job Positions:</label>
        <select name="position" class="form-control" required>
                <option value="">Designer</option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
                <option value="1"></option>
       </select>

       <label for="">Date</label>
       <input type="date" name="last_date" class="form-control">
       <label for="">Job Description</label>
       <textarea name="des1" class="form-control"></textarea>
       <button type="submit" name="submit" class="btn btn-primary">Add Job Details</button>

    </form>

  </div>

<?php
      require_once"include/footer.php";
    ?>
