<?php
include('../config/connect.php');
include('../controller/siteController.php');
$pdo = connect();

//leave post request
$name = $_POST['leave_type'];
$address = $_POST['leave_priority'];
$email = $_POST['start_date'];
$tele = $_POST['end_date'];


try{


//            insert data to apply leave table
    $sql1 = "INSERT INTO student (name,address,email,tele) VALUES (:name,:address,:email,:tele)";
    $query1 = $pdo->prepare($sql1);
    $query1->execute(array('name'=>$name,'address'=>$address,'email'=>$email,'tele'=>$tele));


    header("Location:../view/first.php");


}catch (PDOException $e){
    echo $e;
}