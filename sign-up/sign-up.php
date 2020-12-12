<?php include('sign_up.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">
</head>

<body>
  <!-- <div class="container-fluid"> -->
    <!-- <div class="row"> -->
      <!-- <div class="col-xl-8"></div> -->
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

        <h1>Sign Up</h1>

        <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <label for="name">Name:</label>
            <input placeholder="Your name" type="text" id="name" name="name" value="<?php $name ?>">
            <span class="error"><?= $name_error ?></span>

            <label for="mail">Email:</label>
            <input placeholder="Your Email Address" type="text" id="email" name="email" value="<?= $email ?>">
            <span class="error"><?= $email_error ?></span>

            <label for="password">Password:</label>
            <input placeholder="Your Email Password" type="text" id="password" name="password" value="<?= $password ?>">
            <span class="$error"><?= $password_error ?></span>

            <label>Age:</label>
            <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
            <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>
        </fieldset>

        <fieldset>
            <legend><span class="number">2</span>Your profile</legend>
            <label for="bio">Biography:</label>
            <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
            <label for="job">Job Role:</label>
            <select id="job" name="user_job">
                <optgroup label="Web">
                    <option value="frontend_developer">Front-End Developer</option>
                    <option value="php_developor">PHP Developer</option>
                    <option value="python_developer">Python Developer</option>
                    <option value="rails_developer"> Rails Developer</option>
                    <option value="web_designer">Web Designer</option>
                    <option value="WordPress_developer">WordPress Developer</option>
                </optgroup>
                <optgroup label="Mobile">
                    <option value="Android_developer">Androild Developer</option>
                    <option value="iOS_developer">iOS Developer</option>
                    <option value="mobile_designer">Mobile Designer</option>
                </optgroup>
                <optgroup label="Business">
                    <option value="business_owner">Business Owner</option>
                    <option value="freelancer">Freelancer</option>
                </optgroup>
                <optgroup label="Other">
                    <option value="secretary">Secretary</option>
                    <option value="maintenance">Maintenance</option>
                </optgroup>
            </select>

            <label>Interests:</label>
            <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
            <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>

        </fieldset>
        <button name="submit" type="submit"  data-submit="...Sending">Sign Up</button>
      </form>
    <!-- </div> -->
  <!-- </div> -->
</body>

</html>