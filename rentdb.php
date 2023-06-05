<?php
    session_start();
    include('connect.php');
    if(isset($_POST['submit_rent'])){
        $flname = mysqli_real_escape_string($conn,$_POST['flname']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $tel = mysqli_real_escape_string($conn,$_POST['tel']);
        $uscard = mysqli_real_escape_string($conn,$_POST['uscard']);
        $province = mysqli_real_escape_string($conn,$_POST['province']);
        $goout = mysqli_real_escape_string($conn,$_POST['goout']);
        $goback = mysqli_real_escape_string($conn,$_POST['goback']);

        

        if(count($errors) == 0) {
            $sql = "INSERT INTO  rent (cus_name,cus_address,cus_tel,cus_nID,province,date_go,date_back) VALUES ('$flname','$address','$tel','$uscard','$uscard','$province','$goout','$goback')";
            mysqli_query($conn,$sql);

            header('location: rent.php');
        }
    }

?>