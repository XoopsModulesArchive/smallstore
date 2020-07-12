<?

include "../../mainfile.php";
include "config.php";

global $emailto, $emailfrom, $subject, $firstline;

$required_on = "yes";

$errorpage = "req_fields.php";
$sucess = "sucess.php";

$form_fields = array_keys($_POST);
$form_values = array_values($_POST);

$message = $firstline . "\n\n";

// load email
for ($i = 0; $i < count($form_fields); $i++) { 

// required
if($required_on == "yes") {
$sub = substr($form_fields[$i], 0, 2);
if($sub == "r_") {
if($form_values[$i] == "" OR !isset($form_values[$i]) OR $form_values[$i] == " ") {
header("Location: $errorpage");
exit();
}}}

$message .= "$form_fields[$i]:\n$form_values[$i]\n\n";
}

$headers = "";

// Add from
if($emailfrom != "") {
$headers .= "From: $emailfrom\r\n";
}

// send email
mail($emailto, $subject, $message, $headers);

header("Location: $sucess"); 

?>