<?php
require_once 'config.php';
$vc=$_GET['del'];
$v_code="DELETE FROM vaccine_detail WHERE vac_code='{$vc}'";
$res_code=mysqli_query($con,$v_code);

if($res_code){
    echo "<script>alert('Deleted successfully')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_vac.php'</script>";
}
?>