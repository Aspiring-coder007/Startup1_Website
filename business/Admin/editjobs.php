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

            
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
              

                $query = "SELECT id,title,location1,skill,position,last_date,des1 FROM career  WHERE id = $id";

                $result = mysqli_query($conn, $query);

                if(mysqli_affected_rows($conn) == 1 )
                {
                    $row = mysqli_fetch_object($result);

                }
            }
            extract($_POST);
            if(isset($submit))
            {

                $id = $_GET['id'];

                $query = " UPDATE career SET title='$title',location1='$location1',skill='$skill',position='$position',last_date='$last_date',des1='$des1',
                id=$id";

                $result = mysqli_query($conn, $query);
                header('location:viewjobs.php');



            }
    ?>
    <form method="POST">
        <label for="">Enter Job Title:</label>
        <input type="text" name="title" class="form-control" value="<?php echo $row->title;?>">
        <label for="">Enter Job Location:</label>
        <input type="text" name="location1" class="form-control"value="<?php echo $row->location1;?>">
        <label for="">Enter Required Skill:</label>
        <input type="text" name="skill" class="form-control"value="<?php echo $row->skill;?>">
        <label for="">Select Job Positions</label>
        <input type="text" name="position" class="form-control"value="<?php echo $row->position;?>">
        
        
       <label for="">Date</label>
       <input type="text" name="last_date" class="form-control" value="<?php echo $row->last_date;?>">
       <label for="">Job Description</label>
       <input type="text" name="des1" class="form-control" value="<?php echo $row->des1;?>"></input>
       <button type="submit" name="submit" class="btn btn-primary">Add Job Details</button>

    </form>

  </div>


<?php
      require_once"include/footer.php";
    ?>
