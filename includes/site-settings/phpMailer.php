<?php 


require 'phpMailer/phpmailer/PHPMailerAutoload.php';
require 'phpMailer/smtp/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$status=0;
if(isset($_POST['submit'])){


 
     //mail.domain.com
     $mail_server="secure248.servconfig.com";

     // autoreply#domain.com
     $autoreply_email="autoreply@sukhi222.org";
     $autoreply_password="kGl1[kJGH[eF";
 
     // info#domain.com
     $info_email="info@sukhi222.org";
     
     // CV#domain.com
     $cv_email="cv@sukhi222.org";
    





    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


    if($subject=="CV"){
        $receiving_email=$cv_email;
    }else{
        $receiving_email=$info_email;
    }
            

    $mail = new PHPMailer;
    //  $mail1= new PHPMailer;
        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMT
        $mail->Host = $mail_server;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $autoreply_email;                 // SMTP username
        $mail->Password = $autoreply_password;                                // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->From = $autoreply_email;
        $mail->FromName = "Admin";
                     // $mail->addAddress($admin_email,$admin_name);


        if($mail->addAddress($receiving_email,"Admin"))
        {// $mail->WordWrap = 2050;

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject." from ".$country;
            $mail->Body    = "<h2>Message:</h2>";
            $mail->Body    .="Name: ".$name."<br>";
            $mail->Body    .="Email: ".$email."<br>";
            $mail->Body    .="Country: ".$country."<br>";
            $mail->Body    .="Subject: ".$subject."<br>";
            $mail->Body    .="Message: ".$message."<br>";

            if(file_exists($_FILES["file"]["tmp_name"])){

                    $file_name=$_FILES['file']['name'];
                    $file_tmp=$_FILES['file']['tmp_name'];
                    $path="attachments/".$file_name;
                    move_uploaded_file($file_tmp=$_FILES["file"]["tmp_name"],$path);
                    $mail->addAttachment($path);
            }

            $mail->send();

        }
                                      
        $status=1;

}


 ?>