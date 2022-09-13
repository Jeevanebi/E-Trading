<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con){  echo 'Not Connected To Server';}
if(!mysqli_select_db($con,'sih')){ echo 'Database Not Selected';}

$Fname = $_POST['Fname'];
$Farmer_id = $_POST['Farmer_id'];
$Issue_Date = $_POST['Issue_Date'];
$Mortgage_Status = $_POST['Mortgage_Status'];
$Property_Type = $_POST['Property_Type'];
$Community_Address = $_POST['Community_Address'];
$Plot_no = $_POST['Plot_no'];
$Survey_no = $_POST['Survey_no'];
$Property_no = $_POST['Property_no'];
$Documents = $_POST['Documents'];

$sql = " INSERT INTO landrecords (Fname, Farmer_id, Issue_Date, Mortgage_Status, Property_Type, Community_Address, Plot_no, Survey_no, Property_no, Documents)
         VALUES ('$Fname', '$Farmer_id', '$Issue_Date', '$Mortgage_Status', '$Property_Type', '$Community_Address', '$Plot_no', '$Survey_no', '$Property_no', '$Documents')";







if(!mysqli_query($con,$sql))
{
    echo " Confidential   //       Demo Datas are available for complete understading";
}
else{
    echo " Registered ";
}

header("refresh:2; url=user.html");

?>