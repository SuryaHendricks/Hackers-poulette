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
    <h1>Contact us!</h1>

    <form method="post" action="form.php" class="col s12" data-submit-empty="false">
      <div class="row">
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
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

      <div class="row">
        <div class="col s6">

          <div class="input-field inline">
            <i class="material-icons prefix">contact_mail</i>
            <input name="mail" id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">abcdef@gmail.com</span>
          </div>
        </div>

        <div class="col s6">

          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="country" type="text" id="autocomplete-input" class="autocomplete">
            <label for="autocomplete-input">Choose your country</label>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">list</i>
          <select name="subject">
            <option value="other">Other</option>
            <option value="financial">Financial</option>
            <option value="technical">Technical</option>
          </select>
          <label>Chose your subject</label>
        </div>
      </div>

      <div class="row">

        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">create</i>
            <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Let us know what you need</label>
          </div>
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












<!-- <form method="get" action="index.php" >
        <p><label for="firstname">Prénom : </label>
            <input type="text" name="firstname" placeholder="Jaques"></p>
        <p><label for="lastname">Nom de famille : </label>   
            <input type="text" name="lastname" placeholder="Dupont"></p>
        <p><label for="genre">Genre : </label><br>
            <input type="radio" name="genre" value="homme">Homme 
            <input type="radio" name="genre" value="femme">Femme</p>
        <p><label for="mail">Adresse mail : </label>
            <input type="email" name="mail" placeholder="abcdef@gmail.com"></p>
        <p><label for="country">Choisissez votre pays : </label>
            <select name="country" id="">
                <option value="belgique">belgique</option>
                <option value="france">France</option>
                <option value="italie">Italie</option>
                <option value="espagne">Espagne</option>
                <option value="portugual">Portugual</option>
                <option value="hollande">Hollande</option>
                <option value="allemagne">Allemagne</option>
                <option value="autriche">Autriche</option>
                <option value="suisse">Suisse</option>
                <option value="luxembourg">Luxembourg</option>
                <option value="grece">Grèce</option>
            </select></p>
        <p><label for="sujet">Quel est votre sujet ? </label>
            <select name="sujet" id="">
                <option value="autre">Autre</option>
                <option value="fonction">Fonctionnalités</option>
                <option value="remboursement">Remboursement</option>
            </select></p>
            <p><label for="story">Laissez nous un message :</label><br>
                <textarea id="" name="story"rows="5" cols="33" placeholder="Votre message...">
        
                </textarea></p>
            <p><input type="submit" value="Confirmer"></p>

        

    </form> -->