<?php
require_once 'config.php';
$cnic=$_GET['cnic'];
$date=$_GET['date'];
$ins_pt="INSERT INTO vac_appoint(cnic,vac_date)VALUES('{$cnic}','{$date}')";
$res_pt=mysqli_query($con,$ins_pt);
if($res_pt){
    echo "<script>alert('Your booking for vaccination is done')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/medic-care/index.php'</script>";
}
?>