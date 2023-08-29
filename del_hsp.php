<?php
require_once 'config.php';
$hsp_id=$_GET['del'];
$h_del="DELETE FROM hospitals WHERE hospital_id='{$hsp_id}'";
$res_code=mysqli_query($con,$h_del);

if($res_code){
    echo "<script>alert('Deleted successfully')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_hosp.php'</script>";
}
?>