<?php include('form.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">


  <title>Hackers poulette</title>
</head>

<body>
  <section class="section container" id="contact">
    <img src="/hackers-poulette/assets/img/hackers-poulette-logo.png" alt="hackers poulette">
    <h1>Contact the company!</h1>

    <form method="post" action="index.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="first_name" id="first_name" value="<?= $first_name ?>" type="text" class="validate">
          <label for="first_name">First Name</label>
          <span class="error"><?= $first_name_error ?></span>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" value="<?= $last_name ?>" type="text" class="validate">
          <label for="last_name">Last Name</label>
          <span class="error"><?= $last_name_error ?></span>
        </div>
      </div>
      <p>
        <p>Choose your gender</p>
        <label>
          <input name="gender" value="man" type="radio" />
          <span>Male</span>
        </label>
      </p>
      <p>
        <label>
          <input name="gender" value="woman" type="radio" />
          <span>Femalle</span>
        </label>
      </p>
      <span class="error"><?= $gender_error ?></span>

      <div class="row">
        <div class="col s6">

          <div class="input-field inline">
            <i class="material-icons prefix">contact_mail</i>
            <input name="mail" id="email_inline" type="email" value="<?= $mail ?>" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
            <span class="error"><?= $mail_error ?></span>
          </div>
        </div>

        <div class="col s6">

          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="country" type="text" id="autocomplete-input" class="autocomplete" value="<?= $country ?>">
            <label for="autocomplete-input">Choose your country</label>
            <span class="error"><?= $country_error ?></span>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <i class="material-icons prefix">list</i>
          <select name="subject">
            <option value="other">Other</option>
            <option value="financial">Financial</option>
            <option value="technical">Technical</option>
          </select>
          <label>Chose your subject</label>
          <span class="error"><?= $subject_error ?></span>
        </div>





        <div class="input-field col s9">
          <i class="material-icons prefix">create</i>
          <textarea name="message" id="textarea1" value="<?= $message ?>" class="materialize-textarea"></textarea>
          <label for="textarea1">Let us know what you need</label>
          <span class="error"><?= $message_error ?></span>
        </div>
      </div>



      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
        <i class="material-icons right">send</i>
      </button>
      


    </form>

  </section>
  <script src="script.js"></script>
</body>

</html>