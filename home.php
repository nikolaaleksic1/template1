<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>template3</title>
    <script src="https://use.fontawesome.com/b8ef3f0ce9.js"></script>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="home1.css" rel="stylesheet">

  </head>
  <body>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<div class="header">
  <nav class="navbar">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="#">home <span class="sr-only">(current)</span></a></li>
      <li><a href="#">wedding gallery</a></li>
    </ul>


    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">about</a></li>
      <li><a href="#">contact</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</div>

<div class="header-text">
  <h2>Banquet Halls and Reception Halls for Wedding & Events based in Belgrade, Serbia!</h2>
</div>

<div class="more-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="#">about</a><br />
        <span class="text">See more About</span>
      </div>
      <div class="col-md-6">
        <a href="#">contact</a><br />
        <span class="text">Shoot your Questions</span>
      </div>
    </div>
  </div>
</div>

<div class="section1">
  <div class="section-header">
    <h2>Save time stress and tears, without sacrificing sophistication!</h2>
    <h3>Did we menntion that We have unlimited design options for events and
      invitations?
      <p>Cuz we Do!</p>
    </h3>
  </div>
  <hr />
  <div class="section-images">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="photos/snowbord.jpg"/>
            <caption>
              <h2>Image1</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </p>
            </caption>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="photos/snowbord.jpg"/>
            <caption>
              <h2>Image2</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </p>
            </caption>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="photos/snowbord.jpg"/>
            <caption>
              <h2>Image3</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </p>
            </caption>
          </div>
        </div>
      </div>      <!--   div row -->
    </div>        <!--   div container -->
  </div>          <!--   div section-images -->
</div>            <!--   div section1 -->


<div class="section2">
  <h1>Location</h1>
  <h3>My Google Maps Demo</h3>
  <div id="map"></div>
</div>


<footer class="footer">
  <a href="https://sr-rs.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
  <a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
  <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
  <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
  <a href="https://www.skype.com" target="_blank"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></a>
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>

    function initMap() {
      var uluru = {lat: 44.651247, lng: 20.293240};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }

    $(document).ready(function(){

      var intro0 = {
    //viewFactor : 0.15,
    origin   : "top",
    distance : "50px",
    duration : 500,
    easeing   : 'cubic-bezier(0.6, 0.2, 0.1, 1)',
    viewFactor: 0.2,
    reset    : true,
    mobile   : true,
    delay    : 500,
    scale    : 1
};

var intro1 = {
  origin:  "bottom",
  distance: "100px",
  duration: 1000,
  easeing   : 'cubic-bezier(1, 2, 0.1, 1)',
  viewFactor: 0,
  reset: true,
  mobile: true,
  delay: 1000,
  scale: 0.5
}


var intro2 = {
  origin:  "left",
  distance: "200px",
  duration: 1500,
  easeing   : 'cubic-bezier(1, 2, 2, 1)',
  viewFactor: 0.5,
  reset: true,
  mobile: true,
  delay: 1000,
  scale: 1
}

  window.sr = ScrollReveal();
  $(".sRevealHidden").addClass('sRevealShow');
      if (sr.isSupported()) {
        document.documentElement.classList.add('sr');
      } else {
          console.log("scroll reveal not supported");
          $(".sRevealHidden").css("visibility","visibile");
          return;
      }
  sr.reveal( '.header-text h2 ', intro0 );
  sr.reveal('.more-info a', intro0);
  sr.reveal('.more-info .text', intro1);
  sr.reveal('.section-images .thumbnail', intro2);
  sr.reveal('.footer a', intro1);

    });

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAdAADrXgViZXJ222XYLD5moyvylUUxPs&callback=initMap">
    </script>
  </body>
</html>
