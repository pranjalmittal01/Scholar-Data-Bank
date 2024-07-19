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
  <title>Update Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<div class="col-md-12">
<div class="card mt-12">
                        <div class="card-header text-center">
                        <h4>Update Student Details</h4>
                    </div>
    <div class="header">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" id="search" name="search" onkeyup="searchFunction()" placeholder="search here">
            <!-- <i class="glyphicon glyphicon-search"></i> -->
        </form>
    </div>

<div style="overflow-x:auto;">            
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>FullName</th>
        <th>Contact</th>
        <th>City</th>
        <th>Batch</th>
        <th>Photo</th>
        <th>View</th>
      </tr>
    </thead>
               
    <tbody>
        
                <?php
                while ($info = $result->fetch_assoc()) {
                ?>
      <tr>
        <td><?php echo "{$info['FullName']}" ?></td>
        <td><?php echo "{$info['StudentContact']}" ?></td>
        <td><?php echo "{$info['City']}" ?></td>
        <td><?php echo "{$info['AdmissionYear']}" ?></td>
        <td><img height="100px" width="100px" src="<?php echo "{$info['Photo']}" ?>">
        <td>
            <?php
            echo "
            <button class='btn btn-primary'>                          
            <a style='color: white;' class='action' href='dash_edit_page.php?ID={$info['ID']}'>Edit  
            </a>
            </button>";
            ?>
        </td>                        
        </tr>
                <?php
                }
                ?>
    </tbody>
  </table>
</div>
                    <!-- for print button -->
                        <center><input value='Print' type='button' onclick='handlePrint()' style="margin: 50px;"/></center>
                        <script type="text/javascript">
                            const handlePrint = () => {
                            var actContents = document.body.innerHTML;
                            document.body.innerHTML = actContents;
                            window.print();
                            }
                        </script>
</div>
<script src="search.js"></script>
</body>
</html>
