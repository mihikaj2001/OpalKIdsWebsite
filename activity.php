<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="css/activity.css">
    <link rel='icon' href="images/favicon.ico" type='image/x-icon'/ >

    <title>OpalKids</title>
  </head>
  <body>




    <div class="banner">
      <div class="row">
        <img src="images/banner.png" alt="">

      </div>
    </div>
    <!-- ending of fixed links -->
    <div class="container">




          <!--dropdown non-responsive navigation bar -->

      <!-- <div class="row">
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

       <!-- non responsive navbar ending-->

       <!-- responsive navbar begins Here  -->

       <div class="topnav" id="myTopnav">

          <a href="index.php" >Home</a>
          <a href="about.php">About Us</a>
          <a href="contact.php">Contact Us</a>
          <a href="programmes.php">Programmes</a>
          <a href="activity.php" class="active1">Extra-Curricular</a>
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



     <!-- the starting of a description to all extra curriculars activity -->
<br>
<br>


     <!-- ...........................photo slider................................ -->


        <!-- Slideshow container -->
     <div class="slideshow-container">

       <!-- Full-width images with number and caption text -->
       <div class="mySlides">
         <img src="images/activityslider1/happy.jpeg" style="width:100%">

       </div>



       <div class="mySlides">
         <img src="images/activityslider1/cupcake.jpeg" style="width:100%">

       </div>



       <div class="mySlides">
         <img src="images/activityslider1/plant.jpeg" style="width:100%">

       </div>



       <div class="mySlides">
         <img src="images/activityslider1/swings.jpeg" style="width:100%">

       </div>


       <div class="mySlides">
         <img src="images/activityslider1/bee.jpeg" style="width:100%">

       </div>



       <div class="mySlides">
         <img src="images/activityslider1/block.jpeg" style="width:100%">

       </div>

       <div class="mySlides">
         <img src="images/activityslider1/paint.jpeg" style="width:100%">

       </div>




       <!-- Next and previous buttons -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>
     </div>
     <br>

     <!-- The dots/circles -->
     <div style="text-align:center">
       <span class="dot" onclick="currentSlide(1)"></span>
       <span class="dot" onclick="currentSlide(2)"></span>
       <span class="dot" onclick="currentSlide(3)"></span>
       <span class="dot" onclick="currentSlide(4)"></span>
       <span class="dot" onclick="currentSlide(5)"></span>
       <span class="dot" onclick="currentSlide(6)"></span>
       <span class="dot" onclick="currentSlide(7)"></span>
     </div>




     <!-- ...............................javascript.............................. -->


<!-- photo slider here -->
     <script>
     var slideIndex = 1;
     showSlides(slideIndex);

     function plusSlides(n) {
       showSlides(slideIndex += n);
     }

     function currentSlide(n) {
       showSlides(slideIndex = n);
     }

     function showSlides(n) {
       var i;
       var slides = document.getElementsByClassName("mySlides");
       var dots = document.getElementsByClassName("dot");
       if (n > slides.length) {slideIndex = 1}
       if (n < 1) {slideIndex = slides.length}
       for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";
       }
       for (i = 0; i < dots.length; i++) {
           dots[i].className = dots[i].className.replace(" active", "");
       }
       slides[slideIndex-1].style.display = "block";
       dots[slideIndex-1].className += " active";
     }
     </script>




<!-- start of the first part -->
<a id="morefun">
<div class="everyday">
<h5>Inducing Culture and Good Habits</h5>
<div class="row">
  <div class="col-sm-3">
    <div class="alone1">
<h6>Shlokas</h6>
<p>Our mornings begin with a small thank you to god and a few shlokas that teach us about being grateful and kind. This ensures the brain is enriched and children learn decency. </p>
</div>
  </div>

  <div class="col-sm-3">
    <div class="alone2">
  <h6>Yoga</h6>
  <p>We start our mornings with yoga as it refreshes the mind and body. Yoga is a huge part of our Indian culture and heritage and helps induce good morals and habits.</p>
  </div>
</div>

  <div class="col-sm-3">
    <div class="alone3">
  <h6>Exercise</h6>
  <p>Exercise makes kids active and fit. It helps kids become healthier and boosts immunity. We believe making kids exercise from a young age helps make this a part of their daily routine.</p>
  </div>
</div>
  <div class="col-sm-3">
    <div class="alone4">
<h6>Play-time</h6>
<p>Play time frees kids' minds and playground games make them active, responsive, friendly and chirpy. We let the kids play in our open area on swings, slides and see-saws.</p>
  </div>
</div>


</div>  <!-- end of row -->


<div class="row">
  <div class="col-sm-3">
    <div class="alone5">
<h6>Rhymes</h6>
<p>Rhymes are a fun way of learning by the sing-along method of teaching. They help developing phonic skills, as they offer the ability to read and determine letter sounds and and builds concepts. </p>
  </div>
  </div>

  <div class="col-sm-3">
    <div class="alone6">
  <h6>Arts and Craft</h6>
  <p>Arts and Crafts helps a child become creative and imaginative. It helps in making teaching fun and colorful, and helps improve grip,motor/joint development, inventiveness and risk-taking ability.</p>
  </div>
  </div>

  <div class="col-sm-3">
    <div class="alone7">
  <h6>Reading and Story-Telling</h6>
  <p>This method of teaching helps develop both imagination and creativity in the child. It helps to improve vocabulary, spelling and communication (both written and spoken) and helps information reception.</p>
  </div>
</div>
  <div class="col-sm-3">
    <div class="alone8">
<h6>Puzzles and Blocks</h6>
<p>These help kids develop finger strength, perseverance and problem solving skills. Picking and moving puzzle pieces and blocks helps finger strength, hand-eye coordination and fine-motor skills.</p>
  </div>
</div>



</div>
</div>
     </a>



<!-- image collage here -->



   <div class="collage1">

   <div class="row">
     <div class="column">
       <img src="images/celebration1/celeb1.jpeg" style="width:100%">
     </div>



     <div class="column">

      <img src="images/celebration1/celeb2.jpeg" style="width:100%">
      <img src="images/celebration1/celeb5.jpeg" style="width:100%">
      <img src="images/celebration1/celeb6.jpeg" style="width:100%">

    </div>


     <div class="column">
       <img src="images/celebration1/celeb4.jpeg" style="width:100%">
      <img src="images/celebration1/celeb3.jpeg" style="width:100%">


   </div>



   </div>
 </div>



   <br>
   <br>


   <!-- ........description for celebrations in the campus and other .......... -->


   <a id="celebration">
<div class="celebration">
  <h4>Celebrations and Competitions</h4>
  <div class="row">
    <br>
    <div class="col-sm-3">
    <p class="l1">Vanmahotsav <br>This helps children understand to respect the envirnment. We try to induce good habits from the start. Children plant saplings and learn about nature. We thank plants for their important role in th eco-system.</p>
    </div>
    <div class="col-sm-3">
      <p class="l2">Janamashtami <br>The birth of Lord Krishna helps children learn about the Indian Mythology. We introduce children to different cultural beliefs and this helps them learn a little more about Indian culture.</p>
    </div>
    <div class="col-sm-3">
    <p class="l3">Independence Day <br> Kids learn about India's struggle for independence. We hoist the flag, dress for the occasion and have a  day of thanking our freedom fighters for their struggles to help free the country.</p>
    </div>
    <div class="col-sm-3">
    <p class="l4">Bathukama <br>Kids learn about the local culture and its significance. The floral festival is a symbol of women empowerment as it thanks Goddess Maha Gauri. We ensure the kids are enriched with good values and respect.</p>
    </div>

  </div> <!-- row ending -->

  <div class="row">
    <div class="col-sm-3">
      <p class="l5">Eid <br> Learning about all religious beliefs makes children secular and shows them the importance of every culture and its significance in society. We hug and forgive each other. </p>
    </div>
    <div class="col-sm-3">
      <p class="l6">Diwali <br>Celebrating all festivals belonging to different beliefs helps understand the importance of co-existing in a diverse nation. We play with safe and green sparklers.</p>
    </div>
    <div class="col-sm-3">
    <p class="l7">Children's Day <br> Gives them a sense of significance and self-appreciation. Children need to be pampered and treated as equal and important. We dedicate the day to them.</p>
    </div>

    <div class="col-sm-3">
    <p class="l8">Christmas <br> Gives kids exposure to Christian culture, helps understand diversity and makes them aware of all traditions. We have a Christmas party where we exchange gifts and meet Santa.</p>
    </div>
</div>

    <div class="row">
      <div class="col-sm-3">
     <p class="l9">Republic Day <br> A remarkable day in Indian history, this national holiday helps them learn about civics and law enforcement. We try to equip them with knowledge on their rights and responsibilities as a model citizen.</p>
      </div>
      <div class="col-sm-3">
      <p class="l10">Holi <br> The festival of colors helps children understand the victory of good over evil and lets them have some colorful fun out in the open with colors and water. They learn about consent and have a gala time with their peers. </p>
      </div>
      <div class="col-sm-3">
      <p class="l11">Annual Day <br> This is the time of the year to show your parents and friends your very many talents. Kids dress up and put up a great show for the proud teary-eyed parents with dances, songs, prayers and much more.</p>
      </div>
      <div class="col-sm-3">
      <p class="l12">Fancy Dress Competition <br> A family that does craft together stays together. Parents put in all their efforts to best dress their kids to win the competition. It is the best way to teach kids about having a sportsman-spirit.</p>
      </div>

  </div> <!-- end of row -->
  <div class="row">
    <div class="col-sm-3">
      <p class="l13">Recitation and Story-telling <br> This competition helps kids' public speaking skills and makes them want to improve pronunciation and vocabulary. Children try their best to win and realize participation is key.</p>
    </div>
    <div class="col-sm-3">
      <p class="l14">Shloka Competition <br> Not only does this competition make children more aware of indigenous culture and helps relaxing the brain, but also helps them understand the importance of piousness and inner-peace.</p>
    </div>
    <div class="col-sm-3">
    <p class="l15">Art and Craft Competition <br> This competition helps reveal their creative side. Art helps reach a part of a child's brain that could not be reached with words. It helps reveal their real talents.</p>
    </div>

    <div class="col-sm-3">
    <p class="l16">Patriotic Competition <br>Patriotic song competition helps kids appreciate the nation and gain a sense of respect and love for the country they live in. It enables them to learn more about India.</p>
    </div>

</div>
</div>
   </a>




     <!-- the start of description of all excursions -->
     <a id="excursion">



<div class="excursion">
  <h3>TRIPS</h3>


  <h5>'Learn N Play'</h5>


<div class="row">

  <div class="col-sm-3">
    <div class="stag1">
<h6> 'A vIsiT tO ThE zOo'</h6>
<p>
 Our children love seeing different animals and having a fun picnic with their friends and teachers. The whole day is dedicated to meeting our pals in the animal kingdom and learning about their behavior and place in the jungle. This experience truly helps the kids connect with nature. They understand the importance of taking care of the environment as it has a significant impact on their animal friends. The trip teaches them about animal care and helping the environment. Parents are also invited to join the fun experience of their child's zoo visit.</p>
  </div>
  </div>
<div class="col-sm-6">
<img src="images/zoo.jpg" alt="">
</div>
  <div class="col-sm-3">
    <div class="stag2">

<h6>'A vIsiT tO ThE fArM'</h6>
<p>
To educate our children on the importance of healthy eating and understanding where the food on the table comes from, we make our children visit a farm where they have a fun experience of plucking organic, farm-fresh fruits and vegetables. We learn about farm animals, food production and transport. This helps them respect food and reduce wastefullness. The kids love getting their hands dirty and getting a full farm experience, chasing chickens and talking to farmers. Parents are also invited to join the fun farm visit.</p>

</div>
  </div>

</div>  <!-- end of row -->

<!--...................... second row for community helpers................ -->

<h5>'Our Helpers'</h5>


<div class="row">

<div class="col-sm-3">
  <div class="stag3">

<h6> A vIsiT tO ThE PoLiCe StAtIoN</h6>
<p>
We take our children to see the police station to meet the officers and thank them for their services. The officers teach them about their duties as responsible civillians and citizens of the country. They teach the kids the importance of being kind and helpful citizens and to always follow rules and regulations. They understand the importance of doing the right thing. The kids love taking pictures with the uniformed officers and talking to them. </p>
</div>
</div>

<div class="col-sm-6">
<img src="images/policestation.jpg" alt="">
</div>
<div class="col-sm-3">
  <div class="stag4">

<h6> A vIsiT tO ThE pOsT oFfIcE</h6>
<p>
Taking the children to the post office helps teach them how big yet connected the world is, truly inducing the global-village concept in them. We teach them how to send letters. They are told how mail is collected and delivered, and the kids better understand the role and responsibilities of the post master and post man. Watching letters get stamped is exciting for them. They start to appreciate people who serve the community.</p>
</div>
</div>

</div>  <!-- end of row -->


</div>  <!-- end of excusrsion div -->
     </a>

     <!-- .................the image of book starts here............................... -->

     <!-- <div class="facility"> -->
       <a id="bookid"><img src="images/book.jpg"></a>
     <!-- </div> -->




     <!-- .......................footer begins here............................. -->


     <div class="footer">
       <div class="row">


       <div class="col-sm-4">
         <h6>Contact US</h6>
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


  </body>
</html>
