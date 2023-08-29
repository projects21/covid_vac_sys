<?php
require_once 'config.php';
$doc=$_GET['del'];
$doc="DELETE FROM doctors WHERE doc_id='{$doc}'";
$res_code=mysqli_query($con,$doc);

if($res_code){
    echo "<script>alert('Deleted successfully')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_doc.php'</script>";
}
?>