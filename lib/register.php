<?php
    include_once('DB.php');

// 1. receive data from index.php(view file)
    $firstName= $_POST['firstname'];
    $lastName= $_POST['lastname'];
    $email= $_POST['email'];
    $password = $_POST['pwd'];

    $db = new DB();
    $result = $db->insertData($firstName, $lastName, $email, $password);

    if($result == false){
       die('error adding data into DB');
    }

$msg = 'information is successfully added into Database';
header('LOCATION: ../index.php?userAdded=1&msg='.$msg);


//header('LOCATION:../display.php?userAdded=1&msg='.$msg);