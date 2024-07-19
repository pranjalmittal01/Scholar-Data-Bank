<?php

error_reporting(0);
 
$msg = "";
 
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "admin";

$data=mysqli_connect($host, $user, $password, $db);

if($data === false)
{
    die("connection error");
}

if(isset($_POST['submit']))
{
    // echo "submitted";
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
    $remarks = $_POST['remark'];

    $filename = $_FILES["10th"]["name"];
    $folder = "./10thMarksheet/" . $filename;
    $folder_db = "10thMarksheet/" . $filename;
    move_uploaded_file($_FILES["10th"]["tmp_name"], $folder);

    $filename1 = $_FILES["12th"]["name"];
    $folder1 = "./12thMarksheet/" . $filename1;
    $folder_db1 = "12thMarksheet/" . $filename1;
    move_uploaded_file($_FILES["12th"]["tmp_name"], $folder1);

    $filename2 = $_FILES["Aadhar"]["name"];
    $folder2 = "./AadharCard/" . $filename2;
    $folder_db2 = "AadharCard/" . $filename2;
    move_uploaded_file($_FILES["Aadhar"]["tmp_name"], $folder2);

    $filename3 = $_FILES["Pan"]["name"];
    $folder3 = "./PanCard/" . $filename3;
    $folder_db3 = "PanCard/" . $filename3;
    move_uploaded_file($_FILES["Pan"]["tmp_name"], $folder3);

    $filename4 = $_FILES["Caste"]["name"];
    $folder4 = "./Caste/" . $filename4;
    $folder_db4 = "Caste/" . $filename4;
    move_uploaded_file($_FILES["Caste"]["tmp_name"], $folder4);

    $filename5 = $_FILES["Income"]["name"];
    $folder5 = "./Income/" . $filename5;
    $folder_db5 = "Income/" . $filename5;
    move_uploaded_file($_FILES["Income"]["tmp_name"], $folder5);

    $filename6 = $_FILES["Tc"]["name"];
    $folder6 = "./TC/" . $filename6;
    $folder_db6 = "TC/" . $filename6;
    move_uploaded_file($_FILES["Tc"]["tmp_name"], $folder6);

    $filename7 = $_FILES["Migration"]["name"];
    $folder7 = "./Migration/" . $filename7;
    $folder_db7 = "Migration/" . $filename7;
    move_uploaded_file($_FILES["Migration"]["tmp_name"], $folder7);

    

    $filename8 = $_FILES["Photo"]["name"];
    // $tempname8 = $_FILES["Photo"]["tmp_name"];
    $folder8 = "./Photo/" . $filename8;
    $folder_db8 = "Photo/" . $filename8;
    move_uploaded_file($_FILES["Photo"]["tmp_name"], $folder8);

    

        // Get all the submitted data from the form
        $sql="INSERT INTO student_data (FullName, City, StudentContact, AlternateNumber, School, Gender, DOB, Email, Course, Branch, Category, State, FatherName, FatherEmail, FatherContact, FatherOccu, MotherName, MotherContact, LocalAdd, PermanentAdd, AdmissionYear, AdmissionDate, AdmissionCategory, TotalFee, BusFee, 10THMarksheet, 12THMarksheet, AadharCard, PanCard, CasteCertificate, IncomeCertificate, TC, Migration, Photo, Remarks) VALUES ('$data_fname', '$data_city','$data_stcontact', '$data_alternate', '$data_school','$data_gender','$data_birth','$data_email', '$data_course', '$data_branch', '$selectCat','$data_state','$data_fathern','$data_fathere','$data_fatherc','$data_fathero','$data_mothern','$data_motherc','$data_laddress','$data_paddress','$data_ayear','$data_adate','$data_acategory','$data_tfee','$data_bfee','$folder_db','$folder_db1','$folder_db2','$folder_db3','$folder_db4','$folder_db5','$folder_db6','$folder_db7','$folder_db8', '$remarks')";
 
        $result=mysqli_query($data, $sql);

        if($result)
        {
            header('location:dash_student_detail.php');
        }

}

?>
