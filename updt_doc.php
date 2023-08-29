<?php
require_once 'config.php';
$doc_id=$_GET['doc_id'];
$doc_nm=$_GET['doc_nm'];
$doc_mail=$_GET['doc_mail'];
$doc_pass=$_GET['doc_pass'];
$doc_ph=$_GET['doc_ph'];
$doc_qual=$_GET['doc_qual'];
$doc_img=$_GET['doc_img'];
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

$ut_doc="UPDATE doctors SET doc_name='{$doc_nm}',doc_email='{$doc_mail}',doc_passcode='{$doc_pass}',doc_phone='{$doc_ph}',doc_qualification='{$doc_qual}'  WHERE doc_id='{$doc_id}'";

$res_doc=mysqli_query($con,$ut_doc);
if($res_doc){
    echo "<script>alert('Successfully updated')</script>";
    echo "<script>window.location.href='http://localhost/covid_vac_sys/admin/view_doc.php'</script>";
}
?>