<html>
<body>



<?php
$name = $_POST["name"];
$email = $_POST["email"]; 
$classe = $_POST["classe"];
$indirizzo = $_POST["indirizzo"];
$sezione = $_POST["sezione"];

function is_email_valid($email)
{
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    return false;
  else
    return true;
}

function is_name_valid($name)
{
  $name = trim($name, $characters = " \n\r\t\v\x00");
  if(!preg_match("/^([a-zA-Z' ]+)$/",$name))
    return false;
  else
    return true;
}

function is_select_valid($select)
{
  if($select != "null")
    return true;
  else
    return false;
}

if (is_name_valid($name))
  echo $name;
else
  echo "name error ";

if (is_email_valid($email))
  echo $email;
else
  echo "email error ";


if (is_select_valid($classe))
  echo $classe;
else
  echo "classe error ";

if (is_select_valid($indirizzo))
  echo $classe;
else
  echo "indirizzo error ";

if (is_select_valid($sezione))
  echo $classe;
else
  echo "sezione error ";


?>


</body>
</html>