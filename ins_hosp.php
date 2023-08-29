<?php
require_once 'config.php';
$hosp_id=$_POST['hsp_id'];
$hosp_name=$_POST['hsp_name'];
$hosp_img=$_POST['hsp_img'];
if(isset($_FILES['img'])){
    $errors=array();
    $fn=rand(1203,3210).$_FILES['img'];
    $tmpname=$_FILES['img']['tmp_name'];
    $file_sz=$_FILES['img']['size'];
    $f_type=$_FILES['img']['type'];
    $extension=array('jpg','jpeg','png','jfif','avif');
    $file=explode('.',$fn);

    $file_ext=end($file);
    if(in_array($file_ext,$extension)===false){
        $errors[]='';
    }
    if($file_sz>3145728){
        $errors[]='';
    }
    if(empty($errors)==true){
        move_uploaded_file($tmpname,'/',$fn);
    }
    elseif(empty($errors)==false){
        echo "<script>alert('Please check the file format or image size')</script>";
    }
};
$ins_hosp="INSERT INTO hospitals(hospital_id,hospital_name,Hosp_img)VALUES('{$hosp_id}','{$hosp_name}','{$hosp_img}')";
$res_hosp=mysqli_query($con,$ins_hosp);
if($res_hosp){
    echo "<script>alert('Successfully registered')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_hosp.php'</script>";
}
?>