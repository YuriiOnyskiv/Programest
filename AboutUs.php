<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programest - About us</title>
  <!-- adding bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet"  href="css/animate.css">
  <script src="javascript/Jquery.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <body>
    <!--Header-->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="conteiner-fluid">
        <div class="d-flex flex-row justify-content-between">
            <a href="index.php" class="navbar-brand"><img src="img/logo.jpg" id="logo"></a>
          <h1>Programest</h1>
          <button type="button" class="navbar-toggler" data-toggle="collapse"
          data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="index.php" class="nav-link">Main</a>
              </li>
              <li class="nav-item">
                <a href="AboutUs.php" class="nav-link">About us</a>
              </li>
              <li class="nav-item">
              <a href="javascript://0" onclick="slowScroll ('#more')" class="nav-link">Contacts</a>

            </li>
            <li class="nav-item">
              <a href="Research.php" class="nav-link">Research IT</a>
            </li>
            <li class="nav-item">
              <a href="Team.php" class="nav-link">Team</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <!-- About us-->
  <div class="col-lg-12" id="AboutUs">
    <div class="offset-lg-3 col-lg-6 padding text-center">
      <h1>Welcome</h1>
      <p>At Programest.com, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website. We're excited to help you on your journey!</p>
    </div>
  </div>
<!-- Just block with nature image on the background -->
<figure>
  <div class="fixed-wrap">
    <div id="fixed">
    </div>
  </div>
</figure>
<!-- footer -->
<footer class="container-fluid" id="footer">
  <div class="container-fluid">
    <div class="row padding text-center">
      <div class="col-12">
        <h2>Our contacts</h2>

      </div>
      <div class="col-12 social padding" id="more">
        <a href="https://twitter.com/?lang=pl" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/?hl=pl" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://pl-pl.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&hl=pl&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank"><i class="fab fa-google-plus-g"></i></a>
<p>Tel. +48 574 770 333</p>
<p>Email: w58996@student.wsiz.rzeszow.pl</p>
<p>All rights reserved &copy 2019</p>
      </div>

    </div>

  </div>

</footer>
<script>
function slowScroll (id){
  var offset = 0;
  $('html, body').animate ({
    scrollTop: $(id).offset ().top - offset
  }, 1000);
  return false;
}

</script>
</body>
</html>
