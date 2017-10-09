<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By Ivan - No Copyright -->
  <title>Engine</title>
  

  <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">


   
  <script src="js/sweetalert2.js"></script> 
  <script
  src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  


  <style>

  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  #logo-main{
    margin-left: 5px;
    margin-top:-93px;
    padding: 0;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: saturate(140%);
      filter: saturate(140%); 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #DD4524;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #25AAA2;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .modal-footer{
    background: #25AAA2;
    padding: 30px 30px;
  }

  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: brightness(105%);
      filter: brightness(105%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  #myCarousel{
    margin-top: 45px;
  }
@media screen and (min-width: 320px) and (max-width: 768px){
  #myCarousel{
     margin-top:50px;
}

@media screen and (min-width: 320px) and (max-width: 768px){
  #logo-main{
   margin-left: -30px;
  }

}
.slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

  </style>
</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#home"><img src="http://i.imgur.com/vdBekQk.png" id="logo-main"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://i.imgur.com/NfoV1T8.jpg" alt="Design banner" width="100%" height="350">
        <div class="carousel-caption">
          <p style="color:#cc2900;font-size:20px">Best of the both world, old and new</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://i.imgur.com/mH9GjFh.jpg" alt="Responsive banner" width="100%" height="350">
        <div class="carousel-caption">
        </div>      
      </div>
    
      <div class="item">
        <img src="http://i.imgur.com/106jLq4.jpg" alt="Quality banner" width="100%" height="350">
        <div class="carousel-caption">
          <p style="font-size:20px">Our quality engineer will check that everything works great</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://i.imgur.com/1aZQx2D.jpg" alt="Quality banner" width="100%" height="350">
        <div class="carousel-caption">
          <p style="color:#ff6600;font-size:20px">Beautiful design</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background:none;color:#ff3300">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background:none;color:#ff3300">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="services" class="container text-center">
  <h3>WHAT WE DO</h3>
  <p><em>We love new clients!</em></p>
  <p>Our main job is work on creating unique web sites and web apps for clients all over the world,
   beside development we do all of the design, and final touch, testing the finished product - quality 
   assurance.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Development</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="http://i.imgur.com/4XXM9di.png" class="img-circle person" alt="Development icon" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Proffesional team</p>
        <p>We use old school and new techology</p>
        <p>Respect for deadlines</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Quality Assurance</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="http://i.imgur.com/9dVrSo5.png" class="img-circle person" alt="Quality Assurance icon" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Quality proven</p>
        <p>Everything working smoothly</p>
        <p>Bug free</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Design</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="http://i.imgur.com/Ypmy0ZH.png" class="img-circle person" alt="Design icon" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Eye catching design</p>
        <p>Your choice of colors</p>
        <p>Let us do the rest</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="about" class="bg-1">
  <div class="container">
    <h3 class="text-center">WHO ARE WE</h3>
    <p class="text-center">Let us introduce ourselves<br> We are IT company from Belgrade</p>
    
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="http://i.imgur.com/REFM380.jpg" alt="History" width="400" height="300">
          <p><strong>History</strong></p>
          <p>We're founded in 2017 in Belgrade </p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Read more</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="http://i.imgur.com/Iac8ZQC.jpg" alt="Expertise" width="400" height="300">
          <p><strong>Expertise</strong></p>
          <p>Web development and quality assurance</p>
          <button class="btn" data-toggle="modal" data-target="#myModalTwo">Read more</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="http://i.imgur.com/bbEqEGb.jpg" alt="Our team" width="400" height="300">
          <p><strong>Our team</strong></p>
          <p>Counts six great members</p>
          <button class="btn" data-toggle="modal" data-target="#myModalThree">Read more</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for history-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-folder-open"></span> History</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="heart"><span class="glyphicon glyphicon-heart"></span> What is our goal?</label>
              <label for="members"> As a startup we are focused on medium and small projects. We started with two members and for now our team counts six very professional people.</label>
            </div>
            <div class="form-group">
              <label for="office"><span class="glyphicon glyphicon-pushpin"></span> Our office is in Belgrade</label><br>
              <label for="users"><span class="glyphicon glyphicon-plane"></span> We have clients all around the world</label>
            </div>
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- Modal for expertise-->
  <div class="modal fade" id="myModalTwo" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Expertise</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="dv"><span class="glyphicon glyphicon-ok" style="color:green"></span> Web development</label><br>
              <label for="ds"><span class="glyphicon glyphicon-ok" style="color:green"></span> Web design</label><br>
              <label for="qa"><span class="glyphicon glyphicon-ok" style="color:green"></span> Quality assurance</label>

            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-earphone"></span> If you want beautiful web site or you
              need some quality assurance service contact us.</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- Modal for our team-->
  <div class="modal fade" id="myModalThree" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-user"></span> Our team</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="team"><span class="glyphicon glyphicon-user"></span>Our team counts six persons</label>
              
            </div>
            <div class="form-group">
              <label for="prodev"><span class="glyphicon glyphicon-star" style="color:green"></span> Three developers</label><br>
              <label for="prodes"><span class="glyphicon glyphicon-star" style="color:green"></span> Two designers</label><br>
              <label for="proman"><span class="glyphicon glyphicon-star" style="color:green"></span> One manager</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love working with our clients</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Interested? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Belgrade, Serbia</p>
      <p><span class="glyphicon glyphicon-phone"></span> Phone: +381 649914967</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: enginesoftwaresolution@gmail.com</p>
    </div>

    <form method="POST" action="signup.php" name="vForm" onsubmit="return Validate()">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="tekst" name="tekst" placeholder="Text" rows="5" required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>



<!-- Add Google Maps -->
<div id="googleMap" class="slideanim"></div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(44.787197, 20.457273);
  var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4ifzkA-s4unVPcrz6xvDZtPSxSPqgW50&callback=myMap"></script>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Follow us on facebook <img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-256.png" height="32" width="32"> <a href="https://www.facebook.com" data-toggle="tooltip" title="Engine Software Solutions">www.facebook.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
       
      });
    } // End if
  });
})
</script>


<script>

function Validate(e){
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var tekst = document.getElementById("tekst");
 
  
  swal(
  'We"ll hear soon',
  'Thank you for submiting!',
  'success'
)

e.preventDefault();
}



</script>



</body>
</html>
