<?php
require("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- google icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- css link -->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="media.css">
    <title>Login Page</title>
  </head>
  <body>
       
        <!-- navabar --> 
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">  
            <div class="col-2">
              <img class="logo" src="logo.png">
            </div> 

            <div class="col-5">
              <h5><b>IPS GROUP OF COLLEGES<br>SHIVPURI LINK ROAD,GWALIOR</b></h5>
            </div>  
                
             <div class="col-5">
                <p> <b>An Institute of IPS Group of Colleges
                  <br>P.O.:IPS College ,Shivpuri Link Road,Gwalior
                  <br>Ph:+919285052400,+919285032400</b>
                </p>
             </div>
          
          </div>
        </nav>


    <section class="vh-80" style="width: 60%;">
      <div class="container" style="margin-left: 24%; margin-top: 16%; box-shadow: 0 50px 50px -50px darkslategray;">
        <div class="card" class="container py-5 h-100" class="row d-flex justify-content-center align-items-center"style="border-radius: 1rem;  justify-content-center; h-0">
          <div class="row g-0" style="align-items:center;">
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h2 fw-bold mb-0" >ADMIN LOGIN</span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" placeholder="Admin Name" class="form-control form-control-lg"  name="AdminName"/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password"  placeholder="Password" class="form-control form-control-lg" name="AdminPass"/>
                      <span><i class="material-icons" aria-hidden="true" id="eye">visibility_off</i></span>
                    </div>
                  
                    <div class="pt-1 mb-4">
                      <button type="submit" class="btn btn-dark btn-lg btn-block login" name="Login">Login</button>
                    </div>
                </form>

              </div>
            </div>  
            <!-- img section -->
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://assets.ltkcontent.com/images/22814/2951.TechWriting_27c5571306.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 1rem 1rem 1rem;  max-width: 96%;" />
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
    function input_filter($data)
    {
        $data = trim($data);    //for removing extra whitespaces and store data variable
        $data = stripslashes($data);    //remove backward slashes and store data variable
        $data = htmlspecialchars($data);    //remove html special chars and store data variable
        return $data;
    }

    if(isset($_POST['Login'])) 
    {

        // filtering user input
        $AdminName = input_filter($_POST['AdminName']);
        $AdminPass = input_filter($_POST['AdminPass']);

        // escaping special symbols used in sql statement
        $AdminName = mysqli_real_escape_string($con, $AdminName);
        $AdminPass = mysqli_real_escape_string($con, $AdminPass);

        // query template
        $query = "SELECT * FROM `admin_login` WHERE Admin_Name=? AND Admin_Password=?";

        // prepared statement
        if($stmt = mysqli_prepare($con, $query))
        {
            // binding value to template
            mysqli_stmt_bind_param($stmt, "ss", $AdminName, $AdminPass);

            // executing prepared statement
            mysqli_stmt_execute($stmt);

            // transferring the result of esecution in $stmt variable
            mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt)==1)
                {
                    session_start();
                    $_SESSION['AdminLoginId'] = $AdminName;
                    header('location:dashboard.php');
                }            
                else 
                {                   
                    echo "<script>alert('Invalid Admin Name or Password!');</script>";
                }

            mysqli_stmt_close($stmt);
        } 
        else
        {
            echo "<script>alert('SQL query cannot be prepared');</script>";
        } 
    }
?>


    <script src="eye.js"></script>
  </body>
</html>