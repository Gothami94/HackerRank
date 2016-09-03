<?php
include('../config/connect.php');
$pdo = connect();
$isValidUser = false;

$adId = $_POST['adminId'];
$passwd = $_POST['passwd'];

try{
    //check is user role = employee
    $sql = "SELECT * FROM admin WHERE admin.adminId=:adId and admin.passwd=:passwd";
    $query = $pdo->prepare($sql);
    $query->execute(array('adId'=>$adId, 'passwd'=>$passwd ));
    $rowCount = $query->rowCount();
    $results  = $query->fetchAll();

    if($rowCount==1){
        $isValidUser = true;

        foreach($results as $rs){
            $adId = $rs['adminId'];
            $adName = $rs['adminName'];
        }

        ini_set('session.cookie_httponly',true);

        session_start();
        $_SESSION['adminName'] =$adName;
        $_SESSION['adminId'] = $adId;
        session_write_close();

        header("Location:../view/first.php");
    }

    if( $isValidUser == false){
        header("Location:../index.php");
    }


}catch(PDOException $e){
    echo $e;
    //header("Location:../view/layouts/error.php");
}
