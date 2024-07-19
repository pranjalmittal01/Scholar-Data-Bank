<?php
session_start();
error_reporting(0);
// echo $_SESSION['AdminLoginId'];
session_regenerate_id(true);
if(!isset($_SESSION['AdminLoginId']))
{
    header('location:login.php');
    // echo "Welcomee!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
	<link rel="stylesheet" href="dash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
</head>

<body>
    <!-- header -->
        <div class="container-fluid header">
        <div class="content-row row">
            <div class="col-md-2">
                <img class="logo" src="logo.png"  alt="issue with the image" height="100px">
            </div>

            <div class="col-md-10" style="margin-top: 28px; font-family: 'Times New Roman', Times, serif; ">
                <h1 style="font-size: 50px;">IPS STUDENT INFORMATION SYSTEM<h1>
            </div>
        </div>
    </div>
    <!-- end header -->

    <div class="container-fluid">
        <div class="content row">
			<div class="col-md-3 sidebar"><hr>
            <a href="dashboard.php" class="side_items">Admin Dashboard</a><hr>
                <a href="dash_student_detail.php" class="side_items" target="_self">Add New Student</a>
                <hr>
                <a href="dash_view_panel.php" class="side_items" target="_self">View All Students</a>
                <hr>
                <a href="dash_delete_panel.php" class="side_items" target="_self">Delete Student Details</a>
                <hr>
                <a href="dash_update_panel.php" class="side_items" target="_self">Update Student Details</a>
                <hr>
                <a href="dash_search_student.php" class="side_items" target="_self">Search Student Details</a>
                <hr>
                <center><button type="submit" class="button"><a href="logout.php" style="text-decoration: none; color: black;">LOGOUT</a></button></center><hr>
            </div>

			<div class="col-md-9">
                <h1 style="text-align: center; background-color: #3f818a"><span>Welcome Admin: </span>
                    <?php echo $_SESSION['AdminLoginId']?>                
                </h1>
                <div style="background-color:cadetblue"></div>
            </div>
        </div>
    </div>
</body>
</html>