<?php
require_once 'config.php';
$vac_id=$_POST['vacid'];
$vac_nm=$_POST['vac_name'];
$vac_st=$_POST['vac_status'];

$ins_cat="INSERT INTO vaccine_detail(vac_code,vac_name,Vac_status) VALUES('{$vac_id}','{$vac_nm}','{$vac_st}')";
$res_cat=mysqli_query($con,$ins_cat);

if($res_cat){
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_vac.php';</script>";
}
?>