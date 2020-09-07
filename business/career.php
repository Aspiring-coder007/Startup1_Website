<?php

require_once"include/header.php";
require_once"include/connection.php";

 ?>

<section id="about">
      <div class="container">
            <div class="row">
              <div class="col-sm-12">
        <header class="section-header py-5">
          <h3>Career</h3>
          
        </header>
        <?php
                    $i=1;
                    $query="SELECT * FROM career";
                    $result= mysqli_query($conn, $query);
                    while($row = mysqli_fetch_object($result))
                    {
                      ?>

            <h3 class="font-weight-bold">Title:<?php echo $row->title;?></h3>
            <p>Job Location:<?php echo $row->location1;?></p>
            <p>Required Skill:<?php echo $row->skill;?></p>
            <p>Number of Position:<?php echo $row->position;?></p>
            <p>Apply Last Date:<?php echo $row->last_date;?></p>
            <p>Description:<?php echo $row->des1;?></p>
            <a href="apply.php" class="btn btn-primary">Apply Now</a>
            
            <?php
            }
            ?>
           </div> 
        </div>
      </div>
      
</section>
<?php
require_once"include/footer.php";
?>