<?php

    if(isset($_POST['submit'])){

        include ('../databaseconn/databaseconn.php');
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        
            $sql = "INSERT INTO `message` (`id`,`fullname`, `email`,`date`, `subject`, `message`) VALUES (NULL,'$fullname', '$email', current_timestamp(), '$subject', '$message');";

            $result = mysqli_query($conn,$sql);

        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" >
        <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
        <title>Contact Us</title>
    </head>
    
    <body>
        <!-- <script type=module src=try.js></script>
        <my-header></my-header> -->

        <style>
            body{
                background-image: url(image/contactus.jpg);
                background-repeat: no-repeat;
                background-size: 1700px 600px;
                background-origin: content-box;
                background-position: 0px 0px;
                background-attachment: fixed;
            }
        </style>
        <?php 
            include("nav.php");
        ?>

        <div class="contactcontainer">
        <label class="contacthead"><b>Contact Us</b></label>
        </div>
        <div>
        <div class="info">
            <div class="contactinfo">
                <label class="contacttitle"><b>Address</b></label><br>
                <label class="contactbody">Red Cross Marga, Kalimati</label><br><br>
                <label class="contacttitle"><b>Email</b></label><br>
                <label class="contactbody">nrcs@nrcs.org.info@nrcs.org</label><br><br>
                <label class="contacttitle"><b>Phone</b></label><br>
                <label class="contactbody">+977-1-5370650, +977-1-537 2761</label><br><br>
                <label class="contacttitle"><b>Post Box</b></label><br>
                <label class="contactbody">Post Box No.217</label><br><br>
                <label class="contacttitle"><b>Fax</b></label><br>
                <label class="contactbody">+977-4271915, 4273285</label><br>
            </div>

        
        <div>
            <form class="Cform" method="post">
                <label class="formhead"><b>FULL NAME</b></label>
                <label class="labelright"><b>EMAIL</b></label><br>
                <input type="text" id="fullname" name="fullname" placeholder="Your full name" class="moneyinput">
                
                <input type="text" name="email" id="email" placeholder="Your email" class="moneyinput"><br><br>
                <label class="formhead"><b>Subject</b></label>
                <input type="text" name="subject" id="Subject" placeholder="Subject" class="subject"><br><br>
                <label class="formhead"><b>Messege</b></label><br>
                <textarea class="messege" name="message" id="messege" cols="0" rows="5" placeholder="Your messege"></textarea>
                <button type="submit" name="submit" class="Contact-form-submit"><b>SEND</b></button>
            </form>
        </div>
    </div>

    </div>
    <?php 
        include("footer.php");
    ?>
    </body>


</html>