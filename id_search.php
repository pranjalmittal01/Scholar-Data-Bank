<?php
session_start();
error_reporting(0);
// echo $_SESSION['AdminLoginId'];
session_regenerate_id(true);
if(!isset($_SESSION['AdminLoginId']))
{
    header('location:login.php');
//     // echo "Welcomee!";
}
?>

<?php
include_once 'connection.php';
$sql = "SELECT * FROM student_data";
$result = mysqli_query($con, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search by ID</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></head>

<body>

  <div class="col-md-12">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">

          <div class="card mt-12">
            <div class="card-header text-center">
              <h4>Search Student Data by Student ID</h4>
            </div>
            <div class="card-body">

              <form action="" method="GET">
                <div class="row">
                  <div class="col-md-8">
                    <input type="text" name="stud_id" value="<?php if (isset($_GET['stud_id'])) {
                    echo $_GET['stud_id']; } ?>" class="form-control" placeholder="Search Student by ID...">
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </div>
              </form>

              <div class="row">
                <div class="col-md-12">
                  <hr>
                  <?php

                  if (isset($_GET['stud_id'])) {
                    $stud_id = $_GET['stud_id'];

                    $query = "SELECT * FROM student_data WHERE ID='$stud_id' ";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $row) {
                  ?>
                        <table class="table table-hover">
                          <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>City</th>
                            <th>AdmissionYear</th>
                            <th>Photo</th>
                            <th>View</th>
                            <th>Actions</th>
                          </tr>

                          <tr>
                            <td><?php echo "{$row['FullName']}" ?></td>
                            <td><?php echo "{$row['StudentContact']}" ?></td>
                            <td><?php echo "{$row['City']}" ?></td>
                            <td><?php echo "{$row['AdmissionYear']}" ?></td>
                            <td><img height="100px" width="100px" src="<?php echo "{$row['Photo']}" ?>"></td>
                            <td>
                              <?php
                              echo "
                                <a href='dash_view_page.php?ID={$row['ID']}'> View more</a>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo "
                                                            <button class='btn btn-primary'>                             
                                                            <a style='color: white;' class='action' href='dash_edit_page.php?ID={$row['ID']}'>Edit  
                                                            </a>
                                                            </button>

                                                            <button class='delete btn btn-danger'>                                
                                                            <a style='color: white;' onClick=\"javascript:return confirm('Are you sure to delete this?');\" class='action' href='dash_delete_panel.php?ID={$row['ID']}'>Delete   
                                                            </a>
                                                            </button>";
                              ?>
                            </td>
                          </tr>
                        </table>


                  <?php
                      }
                    } else {
                      echo "No Record Found";
                    }
                  }

                  ?>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  
</body>

</html>