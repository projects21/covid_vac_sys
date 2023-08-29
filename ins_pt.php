<?php
require_once 'config.php';
$p_id=$_GET['p_id'];
$p_nm=$_GET['p_nm'];
$p_mail=$_GET['p_mail'];
$p_pass=$_GET['p_pass'];
$p_ph=$_GET['p_ph'];
$p_dob=$_GET['dob'];
$p_age=$_GET['p_age'];
$p_gen=$_GET['p_gen'];
$p_img=$_GET['p_img'];
if(isset($_FILES['img'])){
    $errors=array();
    $fn=rand(1203,3210).$_FILES['img'];
    $tmpname=$_FILES['img']['tmp_name'];
    $file_sz=$_FILES['img']['size'];
    $f_type=$_FILES['img']['type'];
    $extension=array('jpg','jpeg','png','jfif');
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

$ins_pat="INSERT INTO patients(p_id,p_name,phone_num,p_mail,p_pass,p_img	,Age,p_gender,p_DOB) VALUES('{$p_id}','{$p_nm}','{$p_ph}','{$p_mail}','{$p_pass}','{$p_img}','{$p_age}','{$p_gen}','{$p_dob}')";

$res_pat=mysqli_query($con,$ins_pat);
if($res_pat){
    echo "<script>alert('Successfully registered')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_pt.php'</script>";
}
?>