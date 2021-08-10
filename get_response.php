
<?php
require_once("config.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
 require_once("contact_mail.php");
 $name = $con->real_escape_string($_POST['name']);
 $cname = $con->real_escape_string($_POST['cname']);
$pnumber = $con->real_escape_string($_POST['pnumber']);
$email = $con->real_escape_string($_POST['email']);
$service = $con->real_escape_string($_POST['service']);
$message = $con->real_escape_string($_POST['message']);
$sql="INSERT INTO table2 (name, cname, pnumber, email, service, message) VALUES ('".$name."','".$cname."','".$pnumber."','".$email."', '".$service."', '".$message."')";
if(!$result = $con->query($sql)){
die('There was an error running the query [' . $con->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
