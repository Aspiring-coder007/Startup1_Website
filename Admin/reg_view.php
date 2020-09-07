
  <?php
  require_once"include/sidebar.php";
  require_once"include/connection.php";

  ?>

  <?php
  require_once"include/header.php";
  ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Registered User</h1>
          <p class="mb-4">User Registered on Website</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registered User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php
                    $i=1;
                    $query="SELECT * FROM register";
                    $getrecord= mysqli_query($conn, $query);
                    while($row = mysqli_fetch_object($getrecord))
                    {
                      ?>

                      <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row->name;?></td>
                      <td><?php echo $row->email;?></td>
                      <td><?php echo $row->mobile;?></td>
                      <td><a href="reg_delete.php?id=<?php echo $row->id?>"><i class="fa fa-trash text-danger"></i></a></td>
                      
                    </tr>
                  </tbody>
                  
                  <?php
                  $i++;
                    }
                    ?>   
                    </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
      require_once"include/footer.php";
    ?>
