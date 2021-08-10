<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>





  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="css/index.css">
  <title>Opal_Kids</title>
    <link rel='icon' href="images/favicon.ico" type='image/x-icon'/ >
</head>

  <body>




  <div class="banner">
    <div class="row">
      <img src="images/banner.png" alt="">

    </div>
  </div>




<div class="container">




      <!-- navigation bar non-responsive with dropdown -->
<!--
  <div class="row">
    <div class="col">

  <div class="mymenu">

    <div class="linkwrap">
      <div class="dropdown">
        <a href="index.php">Home</a>
      <div class="dropdown-content">
     <a href="index.php#collage">Images</a> <hr>
     <a href="index.php#homebg">Welcome</a><hr>
     <a href="index.php#allstags">Our Approach</a>
     </div>
      </div>
   </div>


    <div class="linkwrap">
      <div class="dropdown">
        <a href="about.php" >About Us</a>

      <div class="dropdown-content">
     <a href="about.php#voiceid">Director's Letter</a> <hr>
     <a href="about.php#headingaboutid">Our Programs</a><hr>
     <a href="about.php#testimonialsid">Parent Testimonials</a>
   </div>
    </div>
    </div>

    <div class="linkwrap">
      <div class="dropdown">
      <a href="programmes.php">Programmes</a>
      <div class="dropdown-content">
        <div class="dropdown1">
          <a href="programmes.php">School</a>
          <div class="dropdown-content1">
            <a href="programmes.php#playschool">Playschool</a><hr>
            <a href="programmes.php#daycare">Daycare</a><hr>
            <a href="programmes.php#tuition">Tuition</a><hr>
            <a href="programmes.php#summercamp">Activities and Summer camp</a>
          </div>
        </div>

     <hr>
     <div class="dropdown1">
     <a href="activity.php">Extra-Curricular</a>
     <div class="dropdown-content1">
          <a href="activity.php#morefun">Daily Activities</a><hr>
          <a href="activity.php#ceebration">Celebrations</a><hr>
          <a href="activity.php#excursion">Excursions</a><hr>
          <a href="activity.php#bookid">Facility</a>

     </div>
     </div>
      </div>
    </div>
  </div>


  <div class="linkwrap">
    <div class="dropdown">
    <a href="contact.php">Contact Us</a>
   <div class="dropdown-content">
     <a href="contact.php#map">View Map</a> <hr>
   <a href="contact.php#contactid">Connect Now</a> <hr>
   <a href="contact.php#footerid">Contact Us</a>
  </div>
  </div>
  </div>



    <div class="linkwrap">
     <a href="admissions.php" >Admissions</a>
    </div>

    <div class="linkwrap">
     <a href="gallery.php">Gallery</a>
    </div>


  </div>
  </div>

  </div> -->

   <!-- non-responsive navbar ending-->

   <!-- responsive navbar begins Here  -->

   <div class="topnav" id="myTopnav">

      <a href="index.php" class="active1">Home</a>
      <a href="about.php" >About Us</a>
      <a href="contact.php">Contact Us</a>
      <a href="programmes.php">Programmes</a>
      <a href="activity.php">Extra-Curricular</a>
      <a href="admissions.php" >Admissions</a>
      <a href="gallery.php">Gallery</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
       <i class="fa fa-bars"></i>
     </a>
   </div>

  <script type="text/javascript">

   /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
  x.className += " responsive";
  } else {
  x.className = "topnav";
  }
  }

  </script>


   <!-- end of responsive navbar -->

 </div>  <!-- container ending -->

 <div class="row">
   <div class="col-sm-3">

     <div class="time1">
     Playschool Timings:
     <hr>
     <a class="far fa-clock"> 9:00am - 12:00pm</a>
     <br>
     <a class="far fa-calendar"> Monday to Friday</a>
     </div>

     <div class="time2">
      Daycare Timings:
      <hr>
      <a class="far fa-clock"> 8:30am - 7:00pm</a>
      <br>
      <a class="far fa-calendar"> Monday to Saturday</a>
      </div>

      <div class="time3">
      Evening Activities:
      <hr>
      <a class="far fa-clock"> 4:00pm - 7:00pm</a>
      <br>
      <a class="far fa-calendar"> Monday to Friday</a>
      </div>

   </div>

<div class="col-sm-9">

<a id="collage">

  <img src="images/collage.jpg">
  <i>  Stills from our Annual Day Program, Graduation Ceremony and Class Picture Day.  </i>
</a>
</div>


 </div>

 <div class="container-fluid">
<div class="imagetextgroup">



  <a id="homebg"><img src="images/homebg.jpg"></a>






</div>     <!-- end of imagetextgroup -->



<a id="allstags">
<div class="row">
<!--  <div class="para"> -->



  <div class="col-sm-4">

     <div class="stag1">
      <h6>Second Home</h6>
      School provides children with a safe, engaging, respectful and nurturing <span id="dots1">...</span><span id="more1">environment to grow and develop. All who are involved with the child, be it school staff, educators or friends, are responsible for creating and maintaining a supportive environment. We firmly believe in the all-round development of your child, and provide them with school games, dance, drama and many fun-filled activities. We have a big collection of books and toys for children to enjoy.</span></p>
     <button onclick="myFunction1()" id="myBtn1">Read more</button>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="stag2">
      <h6>We are Family</h6>
      We at Opalkids are one big loving family. A school is your child's second home, and<span id="dots2">...</span><span id="more2"> we help your child develop physically, socially and intellectually by providing high-quality learning, a resting and clean environment and a feeling of comfort and solace to help them discover their true personna. We try to make the environment as homely and enriching for your tiny tot as possible and spare no effort in making them feel at home. With us, your ward is in good hands.</span></p>
     <button onclick="myFunction2()" id="myBtn2">Read more</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="stag3">
      <h6>School</h6>
      Welcome to the world of early childhood enrichment and holistic learning. For the last <span id="dots3">...</span><span id="more3">Eleven years, Opal Kids has been providing high-quality pre-primary education, regular daycare as well as flexi-daycare for children aged 10 months – 12 yrs and Tuitions from Pre primary to class 10 by highly qualified teachers. We offer multiple after school activities like Dance, Drawing etc. for all-round development that helps ensure a bright and happy future.</span></p>
     <button onclick="myFunction3()" id="myBtn3">Read more</button>
    </div>
  </div>

<!-- </div>  end of para div -->


</div>     <!-- end of row -->
</a>


<!--..............javascript to make the view more option work............................ -->

<script>
function myFunction1() {
  var dots1 = document.getElementById("dots1");
  var moreText1 = document.getElementById("more1");
  var btnText1 = document.getElementById("myBtn1");

  if (dots1.style.display === "none") {
    dots1.style.display = "inline";
    btnText1.innerHTML = "Read more";
    moreText1.style.display = "none";
  } else {
    dots1.style.display = "none";
    btnText1.innerHTML = "Read less";
    moreText1.style.display = "inline";
  }
}
</script>



<script>
function myFunction2() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more";
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less";
    moreText2.style.display = "inline";
  }
}
</script>




<script>
function myFunction3() {
  var dots3 = document.getElementById("dots3");
  var moreText3 = document.getElementById("more3");
  var btnText3 = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    btnText3.innerHTML = "Read more";
    moreText3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "Read less";
    moreText3.style.display = "inline";
  }
}
</script>



<!-- .......................footer begins here............................. -->


<div class="footer">
  <div class="row">


  <div class="col-sm-4">
    <h6>Contact Us</h6>
    <p><a href="mailto:Opalkids@gmail.com" class="fas fa-envelope"></a> E-mail: Opalkids@gmail.com</p>
    <p><a href="tel:9949497935" class="fas fa-phone"></a> Phone number: 9949497935</p>

  </div>
  <div class="col-sm-4">
    <div class="socials">


    <h6>Social Media</h6>
<p><a href="https://www.facebook.com/opalkids.playschool" class="fab fa-facebook-f" target="_blank"></a> Facebook</p>
<p><a href="https://www.instagram.com/opalkidsplayschool/" class="fab fa-instagram" target="_blank"></a> Instagram</p>
</div>      <!-- end of socials -->

  </div>

  <div class="col-sm-4">
    <div class="moreinfo">
    <h6>More Information</h6>
<p><a href="https://goo.gl/maps/Hv4bCqm9LNRWvdFT6" class= "fas fa-map-marker-alt" target="_blank"></a> Location</p>
<p><a href="" class="fab fa-linkedin-in" target="_blank"></a> LinkedIn</p>
</div>      <!-- end of socials -->

  </div>

  </div>  <!-- END OF ROW -->

</div> <!-- end of footer -->

</div>     <!-- end of container -->





  </body>
</html>
