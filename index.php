<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programest</title>
  <!-- adding bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet"  href="css/animate.css">
  <script type="text/javascript" src="javascript/Jquery.js"></script>
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
  <!-- Slider -->
  <div class="carousel slide" data-ride="carousel" id="slides">
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1" ></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" alt="image of something code">
        <div class="carousel-caption">
          <h2 class="display-3">Programming</h2>
          <h3>as lifestyle</h3>
        <a href="Programming.php"><button type="button" class="btn btn-outline-light bt-lg">Read</button></a>

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" alt="connected world">
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" alt="keyboard">
      </div>

    </div>

  </div>
  <!--Main block-->
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">Programming is intense - whether done as a hobby: to prepare to launch a startup or build a portfolio, or at your day job.If someone is implying one does simpler things as a hobbyist, today's software is very complex and demanding.
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
          <a href="Programming.php"><button class="btn btn-info btn-lg" type="button">Read more</button></a>
        </div>
      </div>
    </div>
    <!-- Block: creating sites -->
    <div class="container-fluid">
      <div class="row text-center alert">
        <div class="col-12">
          <h2 class="display-4">Creating sites</h2>
        </div>
        <hr>
        <div class="col-12">
          <p class='lead'>Despite conventional wisdom, the core part of website development and design is not necessary the coding process. Indeed, such technologies as HTML, CSS, and JavaScript give the web we know its shape and define the way we interact with the information.</p>
        </div>
      </div>
    </div>
    <!-- Block: HTMl5, CSS3, bootstrap -->
    <div class="container-fluid padding">
      <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <i class="fas fa-code animated jello"></i>

          <h3>HTML5</h3>
          <p>Web browsers receive <strong>HTML</strong> documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>
          <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5" target="_blank"><button class="btn btn-info btn-lg" type="button" id="btn_HTML">HTML5</button></a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <i class="fab fa-css3 animated jello"></i>
          <h3>CSS3</h3>
          <p><strong>CSS</strong> is designed to enable the separation of presentation and content, including layout, colors, sizes, positions and fonts.This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics.</p>
          <a href="https://www.w3.org/Style/CSS/" target="_blank"><button class="btn btn-info btn-lg" id="btm_css" type="button">CSS3</button></a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <i class="fas fa-bold animated jello"></i>
          <h3>Bootstrap</h3>
          <p><strong>Bootstrap</strong> is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation and other interface components.</p>
          <a href="https://getbootstrap.com/" target="_blank"><button type="button" class="btn btn-info btn-lg" id="btn_Boot">Bootstrap</button></a>
        </div>
      </div>
      <hr class="my-4">
    </div>
<!-- Block: web design -->
<div class="container-fluid padding" >
  <div class="row padding">
    <div class="offset-lg-1 col-lg-5">
      <h2>Web design</h2>
      <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. Web design used to be focused on designing websites for desktop browsers; however, since the mid-2010s, design for mobile and tablet browsers has become ever-increasingly important.
        <br><br>
        A web designer works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. A good web design is easy to use, aesthetically pleasing, and suits the user group and brand of the website.
      </p>
      <br>
      <a href="Web_design.php" class="btn btn-danger">Read more</a>
    </div>
    <div class="col-lg-6">
      <br>
      <img src="img/webdisign.jpg" class="img-fluid">
    </div>
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
