<?php include('form_process.php'); ?>

<link rel="stylesheet" type="text/css" href="style.css">
<style> .error{color: red;=}</style>
  <div class="container">  
    <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
     <h3 align="center">Sign in</h3>
       <h4 align="center">Contact us today, and get reply with in 24 hours!</h4>
        <fieldset>
        	<legend><span class="number">1</span>Your basic info</legend>
            <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
            <span class="error"><?= $name_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2" >
            <span class="error"><?= $email_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3" >
            <span class="error"><?= $phone_error ?></span>
        </fieldset>

        <fieldset>
            <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
            <span class="error"><?= $url_error ?></span>
        </fieldset>

        <fieldset>
            <textarea placeholder="Type your Message Here...." type="text" name="message" tabindex="5" ></textarea>
        </fieldset>

        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>

        <fieldset>
            <h4>You are new around here
            <a href="index.php">Sign Up</a></h4>
        </fieldset>
        
    </form>
  </div>
