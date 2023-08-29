<?php
require_once 'config.php';
$us_name=$_POST['r_name'];
$us_mail=$_POST['r_mail'];
$us_st=$_POST['r_st'];
$us_com=$_POST['commentfield'];

$ins_fdb="INSERT INTO feedbacks(Name,Email,Health_st,Message)VALUES('{$us_name}','{$us_mail}','{$us_st}','{$us_com}')";
$res_fdb=mysqli_query($con,$ins_fdb);

if($res_fdb){
    echo "<script>alert('Your review is submitted successflly')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/medic-care/index.php'</script>";
}
?>