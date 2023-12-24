<?php 
    if(isset($_POST['g-recaptcha-response'])){
        $secretkey = "6LcgpxcpAAAAADfFu41jVCX-8ubB7_3tltXsea_V";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response = $_POST['g-recaptcha-response'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
        $fire = file_get_contents($url);
        // $data = json_decode($fire);
        // if($data->success==true) {
        //     header("contact.php");
        // }  else {
        //     echo "Please fill reCaptcha";
        // }

    } else {
        echo "reCaptcha Error!";
    }

?>