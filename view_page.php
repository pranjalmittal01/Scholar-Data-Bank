<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS FILE LINK -->
    <link rel="stylesheet" type="text/css" href="student.css">
    <title>View Student Details</title>
</head>


<body>
<?php
    session_start();
    error_reporting(0);
    include_once 'connection.php';
    $sql = "SELECT * FROM student_data";
    $result = mysqli_query($con, $sql);

    if($_GET['ID']){
    $id2 = $_GET['ID'];

    // echo $id2;
    // $_SESSION['ID']=$id2;
    $sql2 = "SELECT * FROM `student_data` WHERE ID = $id2";
    $result = mysqli_query($con, $sql2);
    $row = mysqli_fetch_assoc($result);
    }

    $fullname = $row['FullName'];
    $city = $row['City'];
    $stcontact = $row['StudentContact'];
    $altcontact = $row['AlternateNumber'];
    $school = $row['School'];
    $gender = $row['Gender'];
    $birth = $row['DOB'];
    $email = $row['Email'];
    $course = $row['Course'];
    $branch = $row['Branch'];
    $category = $row['Category'];
    $state = $row['State'];
    $fathern = $row['FatherName'];
    $fathere = $row['FatherEmail'];
    $fatherc = $row['FatherContact'];
    $fathero = $row['FatherOccu'];
    $mothern = $row['MotherName'];
    $motherc = $row['MotherContact'];
    $laddress = $row['LocalAdd'];
    $paddress = $row['PermanentAdd'];
    $ayear = $row['AdmissionYear'];
    $adate = $row['AdmissionDate'];
    $acategory = $row['AdmissionCategory'];
    $tfee = $row['TotalFee'];
    $bfee = $row['BusFee'];
    // $remarks = $row['Remarks'];
    $folder_db = $row['10THMarksheet'];
    $folder_db1 = $row['12THMarksheet'];
    $folder_db2 = $row['AadharCard'];
    $folder_db3 = $row['PanCard'];
    $folder_db4 = $row['CasteCertificate'];
    $folder_db5 = $row['IncomeCertificate'];
    $folder_db6 = $row['TC'];
    $folder_db7 = $row['Migration'];
    $folder_db8 = $row['Photo'];

    // print_r($row);
   
?>

    <div class="col-md-12">
        <div class="card mt-12">
            <div class="card-header text-center">
                <h4>View Student Details</h4>
            </div>

        <!-- form starts here -->
        <form action="student_connection.php" method="POST" enctype="multipart/form-data" name="myForm" style="padding-bottom: 10px;">     
                <center>
                    <div class="col-md-4">
                        <div id="label" class="enroll rounded-circle">Your Photo<span class="required">*</span> </div>
                            <img height="100px" width="100px" src="<?php echo $folder_db8 ?>">
                    </div>     
                </center>

            <div class="row g-3">
                <div class="col">
                    <div id="label">Enter Your Full Name <span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Full name"
                        name="fullname" disabled value="<?php echo $fullname;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your City<span class="required">*</span></div>
                    <input type="text" class="form-control" aria-label="City" name="city" disabled value="<?php echo $city;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll"> Your Contact No.<span class="required">*</span></div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="st_contact" disabled value="<?php echo $stcontact;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your Alternate No.</div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="alt_contact" disabled value="<?php echo $altcontact;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>


            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll">School Name<span class="required">*</span></div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="schoolname" disabled value="<?php echo $school;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                <div id="label" class="enroll">Gender<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="gender" disabled><b><span class="formerror"> </span></b>
                        <!-- <option disabled selected>--Select Gender--</option> -->
                        <option value="Female" <?php if($row["Gender"] == 'Female') { echo "selected"; } ?>>Female</option>
                        <option value="Male" <?php if($row["Gender"] == 'Male') { echo "selected"; } ?>
                        >Male</option>
                        <option value="Others" <?php if($row["Gender"] == 'Others') { echo "selected"; } ?>
                        >Others</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll"> Your Birth date<span class="required">*</span></div>
                    <input type="date" class="form-control" aria-label="Date of Birth" name="DOB" disabled value="<?php echo $birth;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your E-mail <span class="required">*</span></div>
                    <input type="email" class="form-control" placeholder="ex: abc@gamil.com" aria-label="Your Mail ID" name="email" disabled value="<?php echo $email;?>"><b><span class="formerror"> </span></b>                    
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                <div id="label" class="enroll">Course<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectcourse" disabled><b><span class="formerror"> </span></b>
                        <!-- <option selected disabled>--Select Course--</option> -->
                        <option value="B.Tech" <?php if($row["Course"] == 'B.Tech') { echo "selected"; } ?>>B.Tech</option>
                        <option value="B.Pharma" <?php if($row["Course"] == 'B.Pharma') { echo "selected"; } ?>
                        >B.Pharma</option>
                        <option value="MBA" <?php if($row["Course"] == 'MBA') { echo "selected"; } ?>
                        >MBA</option>
                    </select>
                </div>

                <div class="col">
                <div id="label" class="enroll">Branch<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectbranch" disabled><b><span class="formerror"> </span></b>
                        <!-- <option selected disabled>--Select Branch--</option> -->
                        <option value="CSE" <?php if($row["Branch"] == 'CSE') { echo "selected"; } ?>>CSE</option>
                        <option value="ME" <?php if($row["Branch"] == 'ME') { echo "selected"; } ?>>ME</option>
                        <option value="EE" <?php if($row["Branch"] == 'EE') { echo "selected"; } ?>>EE</option>
                        <option value="CE" <?php if($row["Branch"] == 'CE') { echo "selected"; } ?>>CE</option>
                        <option value="EC" <?php if($row["Branch"] == 'EC') { echo "selected"; } ?>>EC</option>
                        <option value="None" <?php if($info["Branch"] == 'None') { echo "selected"; } ?>>No Branch</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                <div id="label" class="enroll">Category<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectCat" disabled><b><span class="formerror"> </span></b>
                        <option value="General" <?php if($row["Category"] == 'General') { echo "selected"; } ?>>General</option>
                        <option value="OBC" <?php if($row["Category"] == 'OBC') { echo "selected"; } ?>
                        >OBC</option>
                        <option value="SC" <?php if($row["Category"] == 'SC') { echo "selected"; } ?>>SC</option>
                        <option value="ST" <?php if($row["Category"] == 'ST') { echo "selected"; } ?>>ST</option>
                    </select>
                </div>

                <div class="col">
                <div id="label" class="enroll">State<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectState" disabled><b><span class="formerror"> </span></b>
                        <!-- <option>--Select State--</option> -->
                        <option value="AN" <?php if($row["State"] == 'AN') { echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                        <option value="AP" <?php if($row["State"] == 'AP') { echo "selected"; } ?>
                        >Andhra Pradesh</option>
                        <option value="AR" <?php if($row["State"]== 'AR') { echo "selected"; } ?>>Arunachal Pradesh</option>
                        <option value="AS" <?php if($row["State"] == 'AS') { echo "selected"; } ?>>Assam</option>
                        <option value="BR" <?php if($row["State"] == 'BR') { echo "selected"; } ?>>Bihar</option>
                        <option value="CH" <?php if($row["State"] == 'CH') { echo "selected"; } ?>
                        >Chandigarh</option>
                        <option value="CT" <?php if($row["State"] == 'CT') { echo "selected"; } ?>>Chhattisgarh</option>
                        <option value="DN" <?php if($row["State"] == 'DN') { echo "selected"; } ?>>Dadra and Nagar Haveli</option>
                        <option value="DD" <?php if($row["State"] == 'DD') { echo "selected"; } ?>>Daman and Diu</option>
                        <option value="DL" <?php if($row["State"] == 'DL') { echo "selected"; } ?>>Delhi</option>
                        <option value="GA" <?php if($row["State"] == 'GA') { echo "selected"; } ?>>Goa</option>
                        <option value="GJ" <?php if($row["State"] == 'GJ') { echo "selected"; } ?>>Gujarat</option>
                        <option value="HR" <?php if($row["State"] == 'HR') { echo "selected"; } ?>>Haryana</option>
                        <option value="HP" <?php if($row["State"] == 'HP') { echo "selected"; } ?>>Himachal Pradesh</option>
                        <option value="JK" <?php if($row["State"] == 'JK') { echo "selected"; } ?>>Jammu and Kashmir</option>
                        <option value="JH" <?php if($row["State"] == 'JH') { echo "selected"; } ?>>Jharkhand</option>
                        <option value="KA" <?php if($row["State"] == 'KA') { echo "selected"; } ?>>Karnataka</option>
                        <option value="KL" <?php if($row["State"] == 'KL') { echo "selected"; } ?>>Kerala</option>
                        <option value="LA" <?php if($row["State"] == 'LA') { echo "selected"; } ?>>Ladakh</option>
                        <option value="LD" <?php if($row["State"] == 'LD') { echo "selected"; } ?>>Lakshadweep</option>
                        <option value="MP" <?php if($row["State"] == 'MP') { echo "selected"; } ?>>Madhya Pradesh</option>
                        <option value="MH" <?php if($row["State"] == 'MH') { echo "selected"; } ?>>Maharashtra</option>
                        <option value="MN" <?php if($row["State"] == 'MN') { echo "selected"; } ?>>Manipur</option>
                        <option value="ML" <?php if($row["State"] == 'ML') { echo "selected"; } ?>>Meghalaya</option>
                        <option value="MZ" <?php if($row["State"] == 'MZ') { echo "selected"; } ?>>Mizoram</option>
                        <option value="NL" <?php if($row["State"] == 'NL') { echo "selected"; } ?>>Nagaland</option>
                        <option value="OR" <?php if($row["State"] == 'OR') { echo "selected"; } ?>>Odisha</option>
                        <option value="PY" <?php if($row["State"] == 'PY') { echo "selected"; } ?>>Puducherry</option>
                        <option value="PB" <?php if($row["State"] == 'PB') { echo "selected"; } ?>>Punjab</option>
                        <option value="RJ" <?php if($row["State"] == 'RJ') { echo "selected"; } ?>>Rajasthan</option>
                        <option value="SK" <?php if($row["State"] == 'SK') { echo "selected"; } ?>>Sikkim</option>
                        <option value="TN" <?php if($row["State"] == 'TN') { echo "selected"; } ?>>Tamil Nadu</option>
                        <option value="TG" <?php if($row["State"] == 'TG') { echo "selected"; } ?>>Telangana</option>
                        <option value="TR" <?php if($row["State"] == 'TR') { echo "selected"; } ?>>Tripura</option>
                        <option value="UP" <?php if($row["State"] == 'UP') { echo "selected"; } ?>>Uttar Pradesh</option>
                        <option value="UT" <?php if($row["State"] == 'UT') { echo "selected"; } ?>>Uttarakhand</option>
                        <option value="WB" <?php if($row["State"] == 'WB') { echo "selected"; } ?>>West Bengal</option>
                    </select>
                </div> 
            </div>

            <!-- FATHER's INFORMATION -->
            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Father's Name<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Mr. ABC" name="Fname" disabled value="<?php echo $fathern;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Father's Email<span class="required">*</span></div>
                    <input type="email" class="form-control" placeholder="ex: abc@gamil.com" name="Femail" disabled value="<?php echo $fathere;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Father's Contact no.(Whatsapp no:)<span class="required">*</span></div>
                    <input type="phone" class="form-control" name="Fcontact" disabled value="<?php echo $fatherc;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Father's Occupation<span class="required">*</span></div>
                    <input type="text" class="form-control" name="Foccupation" disabled value="<?php echo $fathero;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>

                <!-- MOTHER's INFORMATTION -->
            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Mother's Name<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Mrs. ABC" name="Mname" disabled value="<?php echo $mothern;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Mother's Mobile no.<span class="required">*</span></div>
                    <input type="phone" class="form-control" name="Mcontact" disabled value="<?php echo $motherc;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Local Address<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Laddress" disabled value="<?php echo $laddress;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Permanent Address<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor" name="Paddress" disabled value="<?php echo $paddress;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>

                <!-- ADMISSION INFORMATION -->
            <div class="basic">ADMISSION DETAILS:</div>
                <div class="row g-3">
                <div class="col-md-4">
                <div id="label" class="enroll">Admission Year<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress" placeholder="YYYY" name="Ayear" disabled value="<?php echo $ayear;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-4">
                <div id="label" class="enroll">Admission Date<span class="required">*</span></div>
                    <input type="date" class="form-control" aria-label="Date of Birth" name="Adate" disabled value="<?php echo $adate;?>"><b><span class="formerror"> </span></b>
                </div>
            
                <div class="col-md-4">
                <div id="label" class="enroll">Admission Category<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="Acategory" disabled><b><span class="formerror"> </span></b>
                        <option value="TFW" <?php if($row["AdmissionCategory"] == 'TFW') { echo "selected"; } ?>>TFW</option>
                        <option value="EWS" <?php if($row["AdmissionCategory"] == 'EWS') { echo "selected"; } ?>>EWS</option>
                        <option value="REGULAR" <?php if($row["AdmissionCategory"] == 'REGULAR') { echo "selected"; } ?>>REGULAR</option>
                        <option value="Non-Attendee" <?php if($row["AdmissionCategory"] == 'Non-Attendee') { echo "selected"; } ?>>Non-Attendee</option>
                    </select>
                </div>
            </div>

                <!-- FEE DETAILS -->
                <div class="basic">FEE DETAILS:</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="ed">Total Fee<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Rs. " name="Tfee" disabled value="<?php echo $tfee;?>"><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                    <div id="label" class="ed">Bus Fee<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Rs. " name="Bfee" disabled value="<?php echo $bfee;?>"><b><span class="formerror"> </span></b>
                </div>
            </div>

            <!-- DOCUMENTS UPLOADABLE -->
            <div class="basic" class="upload">DOCUMENTS UPLOADABLE:</div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div id="label" class="enroll">10th Marksheet<span class="required">*</span></div>
                    <a href="<?php echo $folder_db ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db ?>
                </div>

                <div class="col-md-4">
                    <div id="label" class="enroll">12th Marksheet<span class="required">*</span></div>
                    <a href="<?php echo $folder_db1 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db1 ?>
                </div>
            
                <div class="col-md-4">
                    <div id="label" class="enroll">Aadhar Card <span class="required">*</span></div>
                    <a href="<?php echo $folder_db2 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db2 ?>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div id="label" class="enroll">Pan Card <span class="required">*</span></div>
                    <a href="<?php echo $folder_db3 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db3 ?>
                </div>
            
                <div class="col-md-4">
                    <div id="label" class="enroll">Caste Certificate(if applicable)</div>
                    <a href="<?php echo $folder_db4 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db4 ?>
                </div>

                <div class="col-md-4">
                    <div id="label" class="enroll">Income Certificate(if applicable)</div>
                    <a href="<?php echo $folder_db5 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db5 ?>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div id="label" class="enroll">TC <span class="required">*</span></div>
                    <a href="<?php echo $folder_db6 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db6 ?>
                </div>

                <div class="col-md-4">
                    <div id="label" class="enroll">Migration <span class="required">*</span></div>
                    <a href="<?php echo $folder_db7 ?>"><i class="fa-solid fa-file-pdf" aria-hidden="true">  </i></a><?php echo $folder_db7 ?>
                </div>
            </div> 
            
            <!-- <div class="col-12">
                <div id="label" class="enroll">Remarks</div>
                    <div class="input-group mb-3" class="col">
                        <textarea cols="40" rows="3" type="text" class="form-control" name="remark" disabled value="
                        <?php 
                        // echo $remarks;
                        ?>
                        "></textarea>            
                </div>
            </div> -->
            
        </form>
</div>        
</body>
</html>