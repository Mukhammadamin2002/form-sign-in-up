<?php 

$name_error = $email_error = $password_error = "";
$name = $email = $password = "";



if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
      if (empty($_POST["name"]))
      {
        $name_error = "Name is Required";
      } else 
      {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^([a-zA-Z ])*$/", $name))
        {
          $name_error = "Only lettersand white space allowed";
        }
      }

      if (empty($_POST["email"]))
      {
        $email_error = "Email is Required";
      } else 
      {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          $email_error = "Invalid email format";
        }
      }

      if (empty($_POST["password"]))
      {
      	$password_error = "Enter Password";
      } else 
      {
      	$password = test_input($_POST["password"]);
      	if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $password))
      	{
      		$password_error = "it Should Include at least 6 no more than 12 ";
      	}
      }
    }

     function test_input($data)
   {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
 ?>