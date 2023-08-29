<?php
require_once 'config.php';
$pat=$_GET['del'];
$p_del="DELETE FROM patients WHERE p_id='{$pat}'";
$res_code=mysqli_query($con,$p_del);

if($res_code){
    echo "<script>alert('Deleted successfully')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_pt.php'</script>";
}
?>