<?php

$showAlert = false;
$showError = false;
    // if (isset($_POST['g-recaptcha-response'])) {
    //     $secretkey= "6LcgpxcpAAAAADfFu41jVCX-8ubB7_3tltXsea_V";
    //     $ip = $_SERVER['REMOTE_ADDR'];
    //     $response = $_POST['g-recaptcha-response'];
    //     $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
        
    //     $fire = file_get_contents($url);
    //     $data = json_decode($fire);
    //     if($data->success==true) {
            
            // echo "Success";
            
    //     }  else {
    //         $showError = true;    
    //         // echo "Please fill reCaptcha";
            
    //     }
    // }  else {
    //     $showError = true;
    //     // echo "Error!";
    // }
    
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        include("partials/_dbconnect.php");
        
        $username = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $cat_id = $_POST['category'];
        $query = $_POST['query'];
        $username = str_replace("<", "&lt;"    ,$username);
        $username = str_replace(">", "&gt;"    ,$username);
        $email = str_replace("<", "&lt;"    ,$email);
        $email = str_replace(">", "&gt;"    ,$email);
        $mobile = str_replace("<", "&lt;"    ,$mobile);
        $mobile = str_replace(">", "&gt;"    ,$mobile);
        $query = str_replace("<", "&lt;"    ,$query);
        $query = str_replace(">", "&gt;"    ,$query);
        $date =  date('d-m-y');
        
        
        
        $sql = "INSERT INTO `contact` (`name`, `email`, `mobile`, `cat_id`, `query`) VALUE ('$username', '$email', '$mobile', '$cat_id', '$query')"; 
        
        $result = mysqli_query($conn, $sql);
        if($result) {
            $showAlert = true;
            header('/contact.php');
        } else {
            $showAlert = false;
        }
                    }
       
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A platform for all solutions relating to typing and design and website designing projects. We provide all services related designing and developing websites. We also provide Hindi typing.">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact Page - कुशल Workers</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8893177963617955"
     crossorigin="anonymous"></script>
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8893177963617955"
     crossorigin="anonymous"></script>
</head>

<body>

    <?php include("partials/_header.php"); ?>
        <?php 
                    if($showError) {
                        echo " <div class='danger' id = 'alert'> Your details are not saved. Please Verify the Captcha! <button type='button' class='close' data-dismiss='alert' aria-label='Close' onclick = 'closeLine()'><span aria-hidden='true'>&times;</span> </button> </div> ";
                    } elseif($showAlert) {
                        echo "<div class='success' id = 'alert'> Your details have been saved successfully. We will contact you soon. <button type='button' class='close' data-dismiss='alert' aria-label='Close' onclick = 'closeLine()'><span aria-hidden='true'>&times;</span> </button> </div>";
                    }
                ?>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="/contact.php" class="form-group" method="POST">
            <label for="name" class="text-title"> Enter Your Name</label>
            <input id="name" name="name" type="text" class="text-input" placeholder="Enter name">
            <label for="email" class="text-title"> Enter your email id</label>
            <input type="email" id="email" name="email" class="text-input" placeholder="Enter email" required>
            <label for="phone" class="text-title"> Enter Your Mobile Number</label>
            <input type="number" class="text-input" id="mobile" name="mobile" placeholder="Enter mobile number"
                maxlength="10" required>
            <label for="" class="text-title">Category</label>
            <select name="category" id="category" class="text-input">
                <option value="1">हिंदी टाइपिंग</option>
                <option value="2">English Typing</option>
                <option value="3">Graphics Design</option>
                <option value="4">Advanced Excel Problems</option>
                <option value="5">Web Development</option>
                <option value="6">Data Entry</option>
            </select>

            <label for="query" class="text-title"> Write Details About your project</label>
            <textarea class="text-input" name="query" id="query" cols="30" rows="10"
                placeholder="Enter details"></textarea>
                <br>
                
                <!-- <div class="g-recaptcha" data-sitekey="6LcgpxcpAAAAAHRQDYEpnAEwnjG80DaChkSEHhii" required></div> -->
                <br/>

            <button role="button" class="btn btn-contact">Submit</button>
        </form>
        <div class="mycont">
            <span>Contact email : </span> <i> rkeducationpoint20@gmail.com </i>
        </div>
    </div>


    <?php include("partials/_footer.php") ?>
    <script>
    function closeLine(){
        x = document.getElementById("alert");
        if(x.style.display = "block"){
            x.style.display = "none";
        }
      }
    </script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>