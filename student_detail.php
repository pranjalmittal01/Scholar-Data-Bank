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

    // session_destroy();
    if($_SESSION['message'])
    {
        $message = $_SESSION['message'];

        echo "<script type='text/javaScript'> 
            alert('$message');
        </script>";
    }
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- CSS FILE LINK -->
    <link rel="stylesheet" type="text/css" href="student.css">
    <title>Sholar Data Bank</title>
</head>


<body>   
    <div class="col-md-12">        
        <!-- form starts here -->
                    <div class="card mt-12">
                        <div class="card-header text-center">
                        <h4>Add Student Details</h4>
                    </div>
        
        <form action="student_connection.php" method="POST" enctype="multipart/form-data" name="myForm">
        
        <div class="basic col-md-12">PERSONAL DETAILS:</div>

            <div class="row g-3">
                <div class="col">
                    <div id="label">Enter Your Full Name <span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Full name"
                        name="fullname" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your City<span class="required">*</span></div>
                    <input type="text" class="form-control" aria-label="City" name="city" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll"> Your Contact No.<span class="required">*</span></div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="st_contact" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your Alternate No.</div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="alt_contact"><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll">School Name<span class="required">*</span></div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="schoolname" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                <div id="label" class="enroll">Gender<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="gender" required><b><span class="formerror"> </span></b>
                        <option selected disabled>--Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll">Your Birth Date<span class="required">*</span></div>
                    <input type="date" class="form-control" aria-label="Date of Birth" name="DOB" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll">Your E-mail <span class="required">*</span></div>
                    <input type="email" class="form-control" placeholder="ex: abc@gamil.com" aria-label="Your Mail ID" name="email" required><b><span class="formerror"> </span></b>                    
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                <div id="label" class="enroll">Course<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectcourse" required><b><span class="formerror"> </span></b>
                        <option selected disabled>--Select Course--</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="B.Pharma">B.Pharma</option>
                        <option value="MBA">MBA</option>
                        <!-- <option value="St">ST</option> -->
                    </select>
                </div>

                <div class="col">
                <div id="label" class="enroll">Branch<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectbranch" required><b><span class="formerror"> </span></b>
                        <option selected disabled>--Select Branch--</option>
                        <option value="CSE">CSE</option>
                        <option value="ME">ME</option>
                        <option value="EE">EE</option>
                        <option value="CE">CE</option>
                        <option value="EC">EC</option>
                        <option value="No Branch">None</option>
                    </select>
                </div>
            </div> 

            <div class="row g-3">
                <div class="col">
                <div id="label" class="enroll">Category<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectCat" required><b><span class="formerror"> </span></b>
                        <option selected disabled>--Select Category--</option>
                        <option value="General">GENERAL</option>
                        <option value="Obc">OBC</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                    </select>
                </div>

                <div class="col">
                <div id="label" class="enroll">State<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectState" required><b><span class="formerror"> </span></b>
                        <option selected disabled>--Select State--</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CH">Chandigarh</option>
                        <option value="CT">Chhattisgarh</option>
                        <option value="DN">Dadra and Nagar Haveli</option>
                        <option value="DD">Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="LA">Ladakh</option>
                        <option value="LD">Lakshadweep</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH">Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OR">Odisha</option>
                        <option value="PY">Puducherry</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UT">Uttarakhand</option>
                        <option value="WB">West Bengal</option>
                    </select>
                </div>
            </div> 

            <!-- FATHER's INFORMATION -->
            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Father's Name<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Mr. ABC" name="Fname" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Father's Email<span class="required">*</span></div>
                    <input type="email" class="form-control" placeholder="ex: abc@gamil.com" name="Femail" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Father's Contact No.(Whatsapp No:)<span class="required">*</span></div>
                    <input type="phone" class="form-control" name="Fcontact" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Father's Occupation<span class="required">*</span></div>
                    <input type="text" class="form-control" name="Foccupation" required><b><span class="formerror"> </span></b>
                </div>
            </div>

                <!-- MOTHER's INFORMATTION -->
            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Mother's Name<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Mrs. ABC" name="Mname" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Mother's Mobile No.<span class="required">*</span></div>
                    <input type="phone" class="form-control" name="Mcontact" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Local Address<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Laddress" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Permanent Address<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor" name="Paddress" required><b><span class="formerror"> </span></b>
                </div>
            </div>

                <!-- ADMISSION INFORMATION -->
                <div class="basic col-md-12">ADMISSION DETAILS:</div>
            <div class="row g-3">
                <div class="col-md-4">
                <div id="label" class="enroll">Admission Year<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress" placeholder="YYYY" name="Ayear" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-4">
                <div id="label" class="enroll">Admission Date<span class="required">*</span></div>
                    <input type="date" class="form-control" aria-label="Date of Birth" name="Adate" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-4">
                <div id="label" class="enroll">Admission Category<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="Acategory" required><b><span class="formerror"> </span></b>
                        <option selected disabled>--Select Category--</option>
                        <option>TFW</option>
                        <option>EWS</option>
                        <option>REGULAR</option>
                        <option>NON-ATTENDEE</option>
                    </select>
                </div>
            </div>

                <!-- FEE DETAILS -->
                <div class="col-md-12 basic">FEE DETAILS:</div>
            <div class="row g-3"> 
                <div class="col-md-6">
                    <div id="label" class="ed">Total Fee<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Rs. " name="Tfee" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                    <div id="label" class="ed">Bus Fee<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Rs. " name="Bfee" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <!-- DOCUMENTS UPLOADABLE -->
            <div class="basic col-md-12">DOCUMENTS UPLOADABLE:</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="enroll">10th marksheet (PDF only)<span class="required">*</span></div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file1" name="10th" required onchange="return fileValidation1()">
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="label" class="enroll">12th marksheet (PDF only)<span class="required">*</span></div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file2" name="12th" required onchange="return fileValidation2()">
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="enroll">Aadhar Card (PDF only)<span class="required">*</span></div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file3" name="Aadhar" required onchange="return fileValidation3()">
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="label" class="enroll">Pan Card (PDF only) <span class="required">*</span></div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file4" name="Pan" required onchange="return fileValidation4()">
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="enroll">Caste Certificate(if applicable PDF only)</div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file5" name="Caste" onchange="return fileValidation5()">
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="label" class="enroll">Income Certificate(if applicable PDF only)</div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file6" name="Income" onchange="return fileValidation6()">
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="enroll">TC (PDF only)<span class="required">*</span></div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file7" name="Tc" required onchange="return fileValidation7()">
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="label" class="enroll">Migration (PDF only)<span class="required">*</span></div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file8" name="Migration" required onchange="return fileValidation8()">
                        <!-- <label class="input-group-text" for="inputGroupFile02" id="upload">Upload</label> -->
                    </div>
                </div>   
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="enroll">Your Photo<span class="required">*</span> </div>
                    <div class="input-group mb-3" class="col">
                        <input type="file" class="form-control" id="file9" name="Photo" required onchange="return fileValidation9()">
                    </div>
                </div>
            </div>

                <div class="col-12">
                    <div id="label" class="enroll">Remarks</div>
                    <div class="input-group mb-3" class="col">
                        <textarea cols="40" rows="3" type="text" class="form-control" name="remark" placeholder="Write Something Here..."></textarea>            
                    </div>
                </div>
             

            <div class="col-12"></br>
                <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
            </div>  
        </form>
    </div>
    <script src="validation.js"></script>
</body>
</html>




<!-- file validation for file type -->