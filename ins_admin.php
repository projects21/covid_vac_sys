<?php
require_once 'config.php';
$admin_nm=$_POST['ad_nm'];
$admin_mail=$_POST['ad_mail'];
$admin_pass=$_POST['ad_pass'];
$admin_img=$_POST['ad_img'];
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
$ins_admin="INSERT INTO admins(ad_name,ad_mail,ad_passcode,ad_img)VALUES('{$admin_nm}','{$admin_mail}','{$admin_pass}','{$admin_img}')";
$res_admin=mysqli_query($con,$ins_admin);
if($res_admin){
    echo "<script>alert('Successfully registered')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/dashboard.php'</script>";
}
?>