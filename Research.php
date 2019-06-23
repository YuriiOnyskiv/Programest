<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programest - Team</title>
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
  <!-- Reseach IT-->
<div class="container-fluid" id="Reseach">
</div>
<div class="container-fluid my">
  <div class="row text-center">
    <div class="offset-lg-1 col-lg-9">


    <h3 >Research IT</h3>
    <p class="lead">Your research is important not just to you and our University, but to people, societies and industries across the globe; and we’d like to help you.</p>
    <p class="lead">We provide specialised eResearch capabilities, helping you to realise your aspirations and support you in conducting world leading, high impact research. Working with you to eliminate barriers, increase your productivity and continuously expand what’s possible.</p>
    <p class="lead">You have access to powerful technology platforms and advanced skills encompassing high performance computing, software and data engineering, data visualisation and analytics and research data storage. Our strong governance, support and training complement these technological capabilities and allow you to focus on your research, rather than managing technology.</p>

</div>
  </div>

</div>
<div class="container-fluid padding">
  <div class="offset-lg-3 col-lg-9">


  <h4 class="offset-lg-2">Our mission</h4>
  <ul class="list-group">
    <li>Inspire researchers through our broad understanding of IT for research.</li>
    <li >Reach out to all researchers to deliver practical solutions that enable world class research.</li>
    <li >Maximise impact by exploiting our expertise across the Research and IT domains.</li>
  </ul>
  <h4 class="offset-lg-2">Our values</h4>
  <ul class="list-group">
    <li >We will be customer-focused and talk the language of Research.</li>
    <li >We will be approachable and responsive to all our customers’ needs.</li>
    <li >We will be solution-focused and have a technology-neutral approach.</li>
    <li>We value innovation and proactivity.</li>
  </ul>
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
