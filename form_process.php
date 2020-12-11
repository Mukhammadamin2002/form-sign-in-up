<?php 
   //define variables and set to empty 
   $name_error = $email_error = $phone_error = $url_error ="";
   $name = $email = $phone = $message = $url = $success = "";

   //form is submitted with POST method
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
      if (empty($_POST["name"]))
      {
        $name_error = "Name is Required";
      } else 
      {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^([a-zA-Z' ]*)$/", $name));
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

      if (empty($_POST["phone"]))
      {
        $phone_error = "Phone Num is Required";
      } else 
      {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/", $phone))
        {
          $phone_error = "Invalid phone number";
        }
      }

      if (empty($_POST["url"]))
      {
        $url_error = "";
      } else 
      {
        $url = test_input($_POST["url"]);
        if (!preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url))
        {
          $url_error = "Invalid URL";
        }
      }

      if (empty($_POST["message"])) 
      {
        $message = "";
      } else
      {
        $message = test_input($_POST["message"]);
      }

    if ($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '')
      {
         $message_body = '';
         unset($_POST["submit"]);
         foreach ($_POST as $key => $value) 
         {
           $message_body .= "$key: $value\n";
         }

          $to = 'mukhammadaminabdullaev01082002@gmail.com';
          $subject = 'Contact From Submit';
          if (mail($to, $subject, $message))
          {
            $success = "Message sent, thank you for contacting us!";
            $name = $email = $phone = $message = $url = '';
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