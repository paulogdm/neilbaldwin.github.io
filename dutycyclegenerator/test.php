<?

$_name=$_POST["contactName"];
$_address1=$_POST["contactAddress1"];
$_address2=$_POST["contactAddress2"];
$_address3=$_POST["contactAddress3"];
$_address4=$_POST["contactAddress4"];
$_postcode=$_POST["contactPostcode"];
$_telephone=$_POST["contactTelephone"];
$_email=$_POST["contactEmail"];


echo("$_name<br>");
echo("$_address1<br>");
echo("$_address2<br>");
echo("$_address3<br>");
echo("$_address4<br>");
echo("$_postcode<br>");
echo("$_telephone<br>");
echo("$_email<br>");

/*
$to = "neil.baldwin@mac.com";
$subject = "PHP Is Great";
$body = "PHP is one of the best scripting languages around";
$headers = "From: DCG";
mail($to,$subject,$body,$headers);
echo "Mail sent to $to";
*/

?>