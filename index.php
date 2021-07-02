<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>LAHS Hack Club</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="blue darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="." class="brand-logo">LAHS Hack Club</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="https://lahs.club">Join Now!</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="https://lahs.club">Join Now!</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="center blue-text text-darken-1">LAHS Hack Club</h4>
      <h5 class="center blue-text text-lighten-3">Presents</h5>
      <h1 class="center blue-text text-darken-4" style="margin: 0">get.lahs.club</h1>
      <div class="row center">
        <h5 class="header col s12 light">Free Website For Any Club!</h5>
        <p>The <b>get.lahs.club</b> program allows for any Los Altos High School club to get a website for free! The LAHS Hack Club members can step up when they receive a request to create the website. We even give you free hosting as well as a free <b>.lahs.club</b> domain for the website. In exchange, all we ask for is permission to put our name (LAHS Hack Club) and the main creator's name (student who works on it) on the footer of your brand new site.</p>
        <p>Interested? Fill out the form below and we'll get back to your with more details!</p>
        <p><em>Note: only a club president may fill out the form.</em></p>
        <p><b>All club presidents must get their advisor's approval before submitting this form. Please download the permission slip <a href="slip.pdf">here</a>.</b></p>
      </div>
      <div class="container">
        <div class="input-field">
          <input id="club_name" type="text" class="validate">
          <label for="club_name">Club Name</label>
        </div>
        <div class="input-field">
          <input id="name" type="text" class="validate">
          <label for="name">Club President Name</label>
        </div>
        <div class="input-field">
          <input id="email" type="email" class="validate">
          <label for="email">Club President School Email</label>
        </div>
        <div class="input-field">
          <textarea id="info" class="materialize-textarea"></textarea>
          <label for="info">Any extra info or requests?</label>
        </div>
        <label>Upload permission slip file</label>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" id="permission-slip" name="permission-slip">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" id="permission-slip-text" type="text">
          </div>
        </div>
        <div class="input-field">
          <a class="btn waves-effect waves-light col s12 blue darken-3" id="submit-button">Submit</a>
        </div>
      </div>
      <br><br><br>
    </div>
  </div>

  <div id="submit-modal" class="modal">
    <div class="modal-content">
      <h4 id="submit-modal-title"></h4>
      <p id="submit-modal-body"></p>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat">Dismiss</a>
    </div>
  </div>

  <?php require_once("templates/footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/get.js"></script>

  </body>
</html>
