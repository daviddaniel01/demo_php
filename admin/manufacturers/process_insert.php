<?php


if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo']) ){
    header('location:form_insert.php?error= Phai dien day du thong tin');
}
$name = addslashes($_POST['name']);
$address = addslashes($_POST['address']);
$phone = $_POST['phone'];
$photo = $_POST['photo'];

require '../connect.php';

$sql = "insert into manufacturers (name,address,phone,photo)
values('$name','$address','$phone','$photo')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?succes=Them thanh cong');

