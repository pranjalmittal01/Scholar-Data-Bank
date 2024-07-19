<?php
    error_reporting(0);
    session_start();

    include_once 'connection.php';
    // $sql = "SELECT * FROM student_data";
    // $result = mysqli_query($con, $sql);

    if($_GET['ID']){
        $edit = $_GET['ID'];
        $sql3="SELECT * FROM student_data WHERE ID='$edit' ";
        $result=mysqli_query($con, $sql3);
        $info = $result->fetch_assoc();

        $folder_db = $info['10THMarksheet'];
        $folder_db1 = $info['12THMarksheet'];
        $folder_db2 = $info['AadharCard'];
        $folder_db3 = $info['PanCard'];
        $folder_db4 = $info['CasteCertificate'];
        $folder_db5 = $info['IncomeCertificate'];
        $folder_db6 = $info['TC'];
        $folder_db7 = $info['Migration'];
    }

    if(isset($_POST['update']))
    {
    $id = $_POST['id'];   
    $data_fname = $_POST['fullname']; 
    $data_city = $_POST['city'];
    $data_stcontact = $_POST['st_contact'];
    $data_alternate = $_POST['alt_contact'];
    $data_school = $_POST['schoolname'];
    $data_gender = $_POST['gender'];
    $data_birth = $_POST['DOB'];
    $data_email = $_POST['email'];
    $data_course = $_POST['selectcourse'];
    $data_branch = $_POST['selectbranch'];
    $selectCat = $_POST['selectCat'];
    $data_state = $_POST['selectState'];
    $data_fathern = $_POST['Fname'];
    $data_fathere = $_POST['Femail'];
    $data_fatherc = $_POST['Fcontact'];
    $data_fathero = $_POST['Foccupation'];
    $data_mothern = $_POST['Mname'];
    $data_motherc = $_POST['Mcontact'];
    $data_laddress = $_POST['Laddress'];
    $data_paddress = $_POST['Paddress'];
    $data_ayear = $_POST['Ayear'];
    $data_adate = $_POST['Adate'];
    $data_acategory = $_POST['Acategory'];
    $data_tfee = $_POST['Tfee'];
    $data_bfee = $_POST['Bfee'];
    // $remarks = $_POST['remark'];

    // $filename = $_FILES["10th"]["name"];
    // // $tempname1 = $_FILES["12th"]["tmp_name"];
    // $folder = "./10thMarksheet/" . $filename;
    // $folder_db = "10thMarksheet/" . $filename;
    // move_uploaded_file($_FILES["10th"]["tmp_name"], $folder);



    // $filename1 = $_FILES["12th"]["name"];
    // // $tempname1 = $_FILES["12th"]["tmp_name"];
    // $folder1 = "./12thMarksheet/" . $filename1;
    // $folder_db1 = "12thMarksheet/" . $filename1;
    // move_uploaded_file($_FILES["12th"]["tmp_name"], $folder1);


    // $filename2 = $_FILES["Aadhar"]["name"];
    // // $tempname2 = $_FILES["Aadhar"]["tmp_name"];
    // $folder2 = "./AadharCard/" . $filename2;
    // $folder_db2 = "AadharCard/" . $filename2;
    // move_uploaded_file($_FILES["Aadhar"]["tmp_name"], $folder2);


    // $filename3 = $_FILES["Pan"]["name"];
    // // $tempname3 = $_FILES["Pan"]["tmp_name"];
    // $folder3 = "./PanCard/" . $filename3;
    // $folder_db3 = "PanCard/" . $filename3;
    // move_uploaded_file($_FILES["Pan"]["tmp_name"], $folder3);


    // $filename4 = $_FILES["Caste"]["name"];
    // // $tempname4 = $_FILES["Caste"]["tmp_name"];
    // $folder4 = "./Caste/" . $filename4; 
    // $folder_db4 = "Caste/" . $filename4; 
    // move_uploaded_file($_FILES["Caste"]["tmp_name"], $folder4);

    // $filename5 = $_FILES["Income"]["name"];
    // // $tempname4 = $_FILES["Caste"]["tmp_name"];
    // $folder5 = "./Income/" . $filename5; 
    // $folder_db5 = "Income/" . $filename5; 
    // move_uploaded_file($_FILES["Income"]["tmp_name"], $folder5);


    // $filename6 = $_FILES["Tc"]["name"];
    // // $tempname6 = $_FILES["Tc"]["tmp_name"];
    // $folder6 = "./TC/" . $filename6;
    // $folder_db6 = "TC/" . $filename6;
    // move_uploaded_file($_FILES["Tc"]["tmp_name"], $folder6);


    // $filename7 = $_FILES["Migration"]["name"];
    // // $tempname7 = $_FILES["Migration"]["tmp_name"];
    // $folder7 = "./Migration/" . $filename7;
    // $folder_db7 = "Migration/" . $filename7;
    // move_uploaded_file($_FILES["Migration"]["tmp_name"], $folder7);

    
    $filename8 = $_FILES["Photo"]["name"];
    // $tempname8 = $_FILES["Photo"]["tmp_name"];
    $folder8 = "./Photo/" . $filename8;
    $folder_db8 = "Photo/" . $filename8;
    move_uploaded_file($_FILES["Photo"]["tmp_name"], $folder8);

    if($filename8){
        
    $sql2="UPDATE `student_data` SET `FullName`='$data_fname',`City`='$data_city',`StudentContact`='$data_stcontact',`AlternateNumber`='$data_altcontact',`School`='$data_school',`Gender`='$data_gender',`DOB`='$data_birth',`Email`='$data_email',`Course`='$data_course',`Branch`='$data_branch',`Category`='$selectCat',`State`='$data_state',`FatherName`='$data_fathern',`FatherEmail`='$data_fathere',`FatherContact`='$data_fatherc',`FatherOccu`='$data_fathero',`MotherName`='$data_mothern',`MotherContact`='$data_motherc',`LocalAdd`='$data_laddress',`PermanentAdd`='$data_paddress',`AdmissionYear`='$data_ayear',`AdmissionDate`='$data_adate',`AdmissionCategory`='$data_acategory',`TotalFee`='$data_tfee',`BusFee`='$data_bfee',`Photo`='$folder_db8' WHERE id = '$id' ";
    }

    else{    
    $sql2="UPDATE `student_data` SET `FullName`='$data_fname',`City`='$data_city',`StudentContact`='$data_stcontact',`AlternateNumber`='$data_altcontact',`School`='$data_school',`Gender`='$data_gender',`DOB`='$data_birth',`Email`='$data_email',`Course`='$data_course',`Branch`='$data_branch',`Category`='$selectCat',`State`='$data_state',`FatherName`='$data_fathern',`FatherEmail`='$data_fathere',`FatherContact`='$data_fatherc',`FatherOccu`='$data_fathero',`MotherName`='$data_mothern',`MotherContact`='$data_motherc',`LocalAdd`='$data_laddress',`PermanentAdd`='$data_paddress',`AdmissionYear`='$data_ayear',`AdmissionDate`='$data_adate',`AdmissionCategory`='$data_acategory',`TotalFee`='$data_tfee',`BusFee`='$data_bfee' WHERE id = '$id' ";
    }

    $result2=mysqli_query($con, $sql2);
    if($result2){
        // echo "<script>alert('Updated Successfully');</script>";
        header('location:dash_update_panel.php');
    }
    
    }
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
    
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS FILE LINK -->
    <link rel="stylesheet" type="text/css" href="student.css">
    <title>Update Student Details</title>
</head>

    <div class="col-md-12">
                    <div class="card mt-12">
                        <div class="card-header text-center">
                        <h4>Update Student Details</h4>
                    </div>
<form action="edit_page.php" method="POST" enctype="multipart/form-data">

            <input type="text" name="id" value="<?php echo "{$info['ID']}" ?>" hidden>
            <div class="basic">PERMISSION DETAILS:</div>
            <div class="row g-3">
                <div class="col">
                    <div id="label">Enter Your Full Name <span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Full name"
                        name="fullname" value="<?php echo "{$info['FullName']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your City<span class="required">*</span></div>
                    <input type="text" class="form-control" aria-label="City" name="city" value="<?php echo "{$info['City']}" ?>" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll"> Your Contact No.<span class="required">*</span></div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="st_contact" value="<?php echo "{$info['StudentContact']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your Alternate No.</div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="alt_contact" value="<?php echo "{$info['AlternateNumber']}" ?>" required><b><span class="formerror"> </span></b>
                </div>
            </div>


            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll">School Name<span class="required">*</span></div>
                    <input type="phone" class="form-control" aria-label="Date of Birth" name="schoolname" value="<?php echo "{$info['School']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll">Gender<span class="required">*</span></div>
                    <select  id="inputState" class="form-select" name="gender" required><b><span class="formerror"></span></b>
                        <option value="Female" <?php if($info["Gender"] == 'Female') { echo "selected"; } ?>>Female</option>
                        <option value="Male" <?php if($info["Gender"] == 'Male') { echo "selected"; } ?>
                        >Male</option>
                        <option value="Others" <?php if($info["Gender"] == 'Others') { echo "selected"; } ?>
                        >Others</option>
                    </select>            
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <div id="label" class="enroll"> Your Birth date<span class="required">*</span></div>
                    <input type="date" class="form-control" aria-label="Date of Birth" name="DOB" value="<?php echo "{$info['DOB']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col">
                    <div id="label" class="enroll"> Your E-mail <span class="required">*</span></div>
                    <input type="email" class="form-control" placeholder="ex: abc@gamil.com" aria-label="Your Mail ID" name="email" value="<?php echo "{$info['Email']}" ?>" required><b><span class="formerror"> </span></b>                    
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                <div id="label" class="enroll">Course<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectcourse" required><b><span class="formerror"> </span></b>
                        <!-- <option selected disabled>--Select Course--</option> -->
                        <option value="B.Tech" <?php if($info["Course"] == 'B.Tech') { echo "selected"; } ?>>B.Tech</option>
                        <option value="B.Pharma" <?php if($info["Course"] == 'B.Pharma') { echo "selected"; } ?>
                        >B.Pharma</option>
                        <option value="MBA" <?php if($info["Course"] == 'MBA') { echo "selected"; } ?>
                        >MBA</option>
                    </select>
                </div>

                <div class="col">
                <div id="label" class="enroll">Branch<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectbranch" required><b><span class="formerror"> </span></b>
                        <!-- <option selected disabled>--Select Branch--</option> -->
                        <option value="CSE" <?php if($info["Branch"] == 'CSE') { echo "selected"; } ?>>CSE</option>
                        <option value="ME" <?php if($info["Branch"] == 'ME') { echo "selected"; } ?>>ME</option>
                        <option value="EE" <?php if($info["Branch"] == 'EE') { echo "selected"; } ?>>EE</option>
                        <option value="CE" <?php if($info["Branch"] == 'CE') { echo "selected"; } ?>>CE</option>
                        <option value="EC" <?php if($info["Branch"] == 'EC') { echo "selected"; } ?>>EC</option>
                        <option value="None" <?php if($info["Branch"] == 'None') { echo "selected"; } ?>>No Branch</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                <div id="label" class="enroll">Category<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectCat" required><b><span class="formerror"> </span></b>
                        <option value="General" <?php if($info["Category"] == 'General') { echo "selected"; } ?>>General</option>
                        <option value="OBC" <?php if($info["Category"] == 'OBC') { echo "selected"; } ?>
                        >OBC</option>
                        <option value="SC" <?php if($info["Category"] == 'SC') { echo "selected"; } ?>>SC</option>
                        <option value="ST" <?php if($info["Category"] == 'ST') { echo "selected"; } ?>>ST</option>
                    </select>
                </div>

                <div class="col">
                <div id="label" class="enroll">State<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="selectState" required><b><span class="formerror"> </span></b>
                        <!-- <option>--Select State--</option> -->
                        <option value="AN" <?php if($info["State"] == 'AN') { echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                        <option value="AP" <?php if($info["State"] == 'AP') { echo "selected"; } ?>
                        >Andhra Pradesh</option>
                        <option value="AR" <?php if($info["State"]== 'AR') { echo "selected"; } ?>>Arunachal Pradesh</option>
                        <option value="AS" <?php if($info["State"] == 'AS') { echo "selected"; } ?>>Assam</option>
                        <option value="BR" <?php if($info["State"] == 'BR') { echo "selected"; } ?>>Bihar</option>
                        <option value="CH" <?php if($info["State"] == 'CH') { echo "selected"; } ?>
                        >Chandigarh</option>
                        <option value="CT" <?php if($info["State"] == 'CT') { echo "selected"; } ?>>Chhattisgarh</option>
                        <option value="DN" <?php if($info["State"] == 'DN') { echo "selected"; } ?>>Dadra and Nagar Haveli</option>
                        <option value="DD" <?php if($info["State"] == 'DD') { echo "selected"; } ?>>Daman and Diu</option>
                        <option value="DL" <?php if($info["State"] == 'DL') { echo "selected"; } ?>>Delhi</option>
                        <option value="GA" <?php if($info["State"] == 'GA') { echo "selected"; } ?>>Goa</option>
                        <option value="GJ" <?php if($info["State"] == 'GJ') { echo "selected"; } ?>>Gujarat</option>
                        <option value="HR" <?php if($info["State"] == 'HR') { echo "selected"; } ?>>Haryana</option>
                        <option value="HP" <?php if($info["State"] == 'HP') { echo "selected"; } ?>>Himachal Pradesh</option>
                        <option value="JK" <?php if($info["State"] == 'JK') { echo "selected"; } ?>>Jammu and Kashmir</option>
                        <option value="JH" <?php if($info["State"] == 'JH') { echo "selected"; } ?>>Jharkhand</option>
                        <option value="KA" <?php if($info["State"] == 'KA') { echo "selected"; } ?>>Karnataka</option>
                        <option value="KL" <?php if($info["State"] == 'KL') { echo "selected"; } ?>>Kerala</option>
                        <option value="LA" <?php if($info["State"] == 'LA') { echo "selected"; } ?>>Ladakh</option>
                        <option value="LD" <?php if($info["State"] == 'LD') { echo "selected"; } ?>>Lakshadweep</option>
                        <option value="MP" <?php if($info["State"] == 'MP') { echo "selected"; } ?>>Madhya Pradesh</option>
                        <option value="MH" <?php if($info["State"] == 'MH') { echo "selected"; } ?>>Maharashtra</option>
                        <option value="MN" <?php if($info["State"] == 'MN') { echo "selected"; } ?>>Manipur</option>
                        <option value="ML" <?php if($info["State"] == 'ML') { echo "selected"; } ?>>Meghalaya</option>
                        <option value="MZ" <?php if($info["State"] == 'MZ') { echo "selected"; } ?>>Mizoram</option>
                        <option value="NL" <?php if($info["State"] == 'NL') { echo "selected"; } ?>>Nagaland</option>
                        <option value="OR" <?php if($info["State"] == 'OR') { echo "selected"; } ?>>Odisha</option>
                        <option value="PY" <?php if($info["State"] == 'PY') { echo "selected"; } ?>>Puducherry</option>
                        <option value="PB" <?php if($info["State"] == 'PB') { echo "selected"; } ?>>Punjab</option>
                        <option value="RJ" <?php if($info["State"] == 'RJ') { echo "selected"; } ?>>Rajasthan</option>
                        <option value="SK" <?php if($info["State"] == 'SK') { echo "selected"; } ?>>Sikkim</option>
                        <option value="TN" <?php if($info["State"] == 'TN') { echo "selected"; } ?>>Tamil Nadu</option>
                        <option value="TG" <?php if($info["State"] == 'TG') { echo "selected"; } ?>>Telangana</option>
                        <option value="TR" <?php if($info["State"] == 'TR') { echo "selected"; } ?>>Tripura</option>
                        <option value="UP" <?php if($info["State"] == 'UP') { echo "selected"; } ?>>Uttar Pradesh</option>
                        <option value="UT" <?php if($info["State"] == 'UT') { echo "selected"; } ?>>Uttarakhand</option>
                        <option value="WB" <?php if($info["State"] == 'WB') { echo "selected"; } ?>>West Bengal</option>
                    </select>
                </div>
            </div> 

            <!-- FATHER's INFORMATION -->
            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Father's Name<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Mr. ABC" name="Fname" value="<?php echo "{$info['FatherName']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Father's Email<span class="required">*</span></div>
                    <input type="email" class="form-control" placeholder="ex: abc@gamil.com" name="Femail" value="<?php echo "{$info['FatherEmail']}" ?>" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Father's Contact no.(Whatsapp no:)<span class="required">*</span></div>
                    <input type="phone" class="form-control" name="Fcontact" value="<?php echo "{$info['FatherContact']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                    
                <div id="label" class="enroll">Father's Occupation<span class="required">*</span></div>
                    <input type="text" class="form-control" name="Foccupation" value="<?php echo "{$info['FatherOccu']}" ?>" required><b><span class="formerror"> </span></b>
                </div>
            </div>

                <!-- MOTHER's INFORMATTION -->
            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Mother's Name<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Mrs. ABC" name="Mname" value="<?php echo "{$info['MotherName']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Mother's Mobile no.<span class="required">*</span></div>
                    <input type="phone" class="form-control" name="Mcontact" value="<?php echo "{$info['MotherContact']}" ?>" required><b><span class="formerror"> </span></b>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                <div id="label" class="enroll">Local Address<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Laddress" value="<?php echo "{$info['LocalAdd']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                <div id="label" class="enroll">Permanent Address<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor" name="Paddress" value="<?php echo "{$info['PermanentAdd']}" ?>" required><b><span class="formerror"> </span></b>
                </div>
            </div>

                <!-- ADMISSION INFORMATION -->
                <div class="basic">ADMISSION DETAILS:</div>
            <div class="row g-3">
                <div class="col-md-4">
                <div id="label" class="enroll">Admission Year<span class="required">*</span></div>
                    <input type="text" class="form-control" id="inputAddress" placeholder="YYYY" name="Ayear" value="<?php echo "{$info['AdmissionYear']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-4">
                <div id="label" class="enroll">Admission Date<span class="required">*</span></div>
                    <input type="date" class="form-control" aria-label="Date of Birth" name="Adate" value="<?php echo "{$info['AdmissionDate']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-4">
                <div id="label" class="enroll">Admission Category<span class="required">*</span></div>
                    <select id="inputState" class="form-select" name="Acategory" required><b><span class="formerror"> </span></b>
                        <option value="TFW" <?php if($info["AdmissionCategory"] == 'TFW') { echo "selected"; } ?>>TFW</option>
                        <option value="EWS" <?php if($info["AdmissionCategory"] == 'EWS') { echo "selected"; } ?>>EWS</option>
                        <option value="REGULAR" <?php if($info["AdmissionCategory"] == 'REGULAR') { echo "selected"; } ?>>REGULAR</option>
                        <option value="Non-Attendee" <?php if($info["AdmissionCategory"] == 'Non-Attendee') { echo "selected"; } ?>>Non-Attendee</option>
                    </select>
                </div>
            </div>

                <!-- FEE DETAILS -->
                <div class="basic">FEE DETAILS:</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="ed">Total Fee<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Rs. " name="Tfee" value="<?php echo "{$info['TotalFee']}" ?>" required><b><span class="formerror"> </span></b>
                </div>

                <div class="col-md-6">
                    <div id="label" class="ed">Bus Fee<span class="required">*</span></div>
                    <input type="text" class="form-control" placeholder="Rs. " name="Bfee" value="<?php echo "{$info['BusFee']}" ?>" required><b><span class="formerror"> </span></b>
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

            <div class="row g-3">
                <div class="col-md-6">
                    <div id="label" class="enroll">Your Photo<span class="required" >*</span> </div>
                    <div class="input-group mb-3" class="col">
                        <img height="100px" width="100px" src="<?php echo "{$info['Photo']}" ?>">
                            <input type="file" class="form-control" id="inputGroupFile02" id="file9" name="Photo" onchange="return fileValidation9()">
                    </div>
                </div>
            </div>

            <!-- <div class="row g-3">
                <div class="col-12">
                    <div id="label" class="enroll">Remarks</div>
                        <div class="input-group mb-3" class="col">
                            <textarea cols="40" rows="3" type="text" class="form-control" name="remark" value="
                            <?php 
                            // echo "{$info['Remarks']}" 
                            ?>
                            ">Write Something Here...</textarea>            
                    </div>
                </div>
            </div> -->

            <div class="col-12">
                <center><button type="submit" class="btn btn-primary" name="update">Update</button></center>
            </div>       
        
        </form>
</div>       

<script src="validation.js"></script>
</body>
</html>




