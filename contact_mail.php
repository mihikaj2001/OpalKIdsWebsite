<?php
//$toEmail = "ksmbasha@instaivy.com";
$toEmail = $_POST["email"];
$subject= 'Contact Request Submitted';
$htmlContent = '


Dear '.$_POST["name"].'
    Thank you for contacting Opalkids.

    We will contact you soon with regard to your required service: '.$_POST["service"].'
    For any queries, feel free to contact us on our mentioned phone number 9949497935 or reply to this mail.

    Hope to see you and your tiny tot '.$_POST["cname"].' with us soon.


Warm regards,
Manjari Matanhelia.
Director at Opalkids Playschool.
Email: manjarijain_2000@yahoo.com




        ';
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $subject, $htmlContent, $mailHeaders)) {
echo "Contact Mail Sent.";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>
