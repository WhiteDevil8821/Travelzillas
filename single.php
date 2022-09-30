<?php
require("session.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travelzillas – Creating Mermories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon.ico">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="#000" name="msapplication-TileColor">
    <meta content="#000" name="theme-color">
   <link rel="stylesheet" href="../css/button.css">

  </head>

<body>
    <div class="container">
        <div class="header">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="header__top">
                        <!--<div class="tel">
                            <a href="tel:0000000000">+1 1235 6789 10</a>
                        </div>
                        <div class="email">
                            <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                        </div>-->
                        <div class="socials">
                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="a facebook"></a>
                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="a twitter"></a>
                            <?php if(isset($_SESSION['uname']))
         {
             ?>
               <button  style="width:auto;"><a href="logout.php">LOGOUT</a></button>
               <?php }
              else{ ?>
              
           
           
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avtar.jfif" alt="Avatar" class="avatar">
     
    </div>
    
    <div class="container1">
      <label for="uname"><b>Username or Email</b></label>
      <input type="text" placeholder="Enter Username/email" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      
      <span class="psw"> <a href="#">Forgot Password?</a></span>
    </div>
    
  </form>
</div>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGNUP</button>

<?php }?>
  


<div id="id02" class="modal">
  
  <form class="modal-content" action="signup.php" method=post>
 
    <div class="container1">
      <h1><b><font size=20 color=blue>Sign Up</font size></b></h1><br>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

         <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name" required>


      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


   </div>
     </div>










                    <div class="header__bottom">
                        <a href="#" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
                        <div class="menu" id="js-menu">
                            <div class="close"></div>
                            <div class="scroll">
                                <a class="current">Home</a>
                                <div class="scroll_wrap">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li class="dropdown_li">
                                            <a href="#">
                                                <span>Pages</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li class="dropdown_li">
                                                        <a href="#">
                                                            <span>Search</span>
                                                        </a>
                                                        <div class="submenu">
                                                            <ul>
                                                                <li><a href="search-results.php">Search results</a></li>
                                                                <li><a href="search-results-not-found.php">No results</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="contacts.php">Contact</a></li>
                                                    <li><a href="gallery.php">Gallery</a></li>
                                                    <li><a href="coming-soon.php">Coming soon</a></li>
                                                    <li><a href="404.php">404 Page</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="#">
                                                <span>Tour List</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="tour-list.php">Tour List</a></li>
                                                    <li><a href="tour-list-2.php">Tour List 2</a></li>
                                                    <li><a href="tour-list-3.php">Tour List 3</a></li>
                                                    <li><a href="tour-list-4.php">Tour List 4</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="destinations.php">Destinations</a></li>
                                        <li class="dropdown_li">
                                            <a href="#" class="active">
                                                <span>Tour Page</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="single.php">Tour Page</a></li>
                                                    <li><a href="single-dark.php">Tour Page Dark</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="#">
                                                <span>Blog</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <!--<li><a href="blog-list.php">Blog</a></li>-->
                                                    <li><a href="blog-list-2.php">Blog</a></li>
                                                    <!--<li><a href="blog-single.php">Blog Single</a></li>-->
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom">
                                    <!--<div class="tel">
                                        <a href="tel:+11235678910">+1 1235 6789 10</a>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                                    </div>-->
                                    
                                   <button type="button">Log In</button>
                                    <button type="button">Sign Up</button>
                                
                                    <div class="socials">
                                        <div class="links">
                                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="fb"></a>
                                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="instagram"></a>
                                            <a href="#" class="pinterest"></a>
                                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="twitter"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_link" id="search_link"></div>
                        <div class="mobile_btn" id="mobile_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="wrap">
                <div class="wrap_float">
                    <a href="#">Home</a>
                    <span class="separator">/</span>
                    <a href="#" class="current">Date & Pricing</a>
                </div>
            </div>
        </div>
        <div class="image_bg--single" style="background-image: url(img/vput12.jpg);"></div>
        <div class="page_content single-page tour-single">
            <div class="content-head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="main">
                            <div class="section-top single-row">
                                <div class="single-left">
                                    <div class="rating">
                                        <div class="stars">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="reviews_count">
                                            (2 Reviews)
                                        </div>
                                    </div>
                                    <h1 class="title">
                                        Nainital & Mussoorie
                                    </h1>
                                    <div class="geo">2N Nainital And 2N Mussoorie | Per Couple Cost - Rs. 24,999/-</div>
                                </div>
                                <div class="single-right controls">
                                    <button class="btn getModal" data-href="#book-now"><span>Book now</span></button>
                                    <div class="slick-arrows tour-single-arrows">
                                        <div class="arrow prev"></div>
                                        <div class="arrow next"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-tour-slider" id="single-tour-slider">
                                <div class="single-tour-slide">
                                    <img src="img/vput1.jpg" class="image-cover" alt="">
                                </div>
                                <div class="single-tour-slide">
                                    <img src="img/vput2.jpg" class="image-cover" alt="">
                                </div>
                                <div class="single-tour-slide">
                                    <img src="img/vput3.jpg" class="image-cover" alt="">
                                </div>
                                <div class="single-tour-slide">
                                    <img src="img/vput4.jpg" class="image-cover" alt="">
                                </div>
                                <div class="single-tour-slide">
                                    <img src="img/vput5.jpg" class="image-cover" alt="">
                                </div>
                            </div>
                            <div class="description single-row">
                                <div class="single-left">
                                    <p>
Nainital is broadly divided into two parts- Tallital on the southern side of the lake, and Mallital on the northern side. It is an excellent year-round weekend getaway and also a base to explore the numerous beautiful villages and scenic spots in Kumaon region. From boating to watching and feeding animals, from picnicking to going on heritage walks, Nainital is a serene and wonderful hill station.  If you are in love with nature’s romanticism and follow literature for that then the enchanting beauty of Mussoorie is your wonderland waiting for you. Sir Sachin Tendulkar, the demigod of the cricketing world loves this place as his regular hideout in a great climate and pleasant city.

                                    </p>
                                </div>
                                <div class="single-right">
                                    <div class="map-iframe">
                                        <iframe src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=New%20York+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="single-left">
                            <div class="single-content page--content details">
                                <h2>Tour details</h2>
                                <p>
Nainital has a look and feel that is fascinating. The famous Naini Lake, a shimmering water body enveloped by green hills on three sides gives it an alpine feel. The famous Mall road curves along its banks. Naini Lake is a peaceful lake with a fleet of yachts and boats which take the tourists on experiences of their lifetime. The Mall road, a lively promenade that overlooks the lake is the main attraction. A bunch of other tourist spots scattered in and around the city make it a perfect setting for a family holiday.

                                </p>
                                <p><b>On fresh air</b></p>
                                <div class="list-block">
                                    <ul class="true">
                                        <li>Picnic</li>
                                        <li>Garden furniture</li>
                                        <li>Beach (first line)</li>
                                        <li>Sun terrace</li>
                                        <li>Private beach area</li>
                                        <li>Barbecue facilities</li>
                                        <li>Terrace</li>
                                        <li>Garden</li>
                                    </ul>
                                    <ul class="true">
                                        <li>Picnic</li>
                                        <li>Garden furniture</li>
                                        <li>Beach (first line)</li>
                                        <li>Sun terrace</li>
                                        <li>Private beach area</li>
                                        <li>Barbecue facilities</li>
                                        <li>Terrace</li>
                                        <li>Garden</li>
                                    </ul>
                                </div>
                                <p><b>On fresh air</b></p>
                                <div class="list-block">
                                    <ul class="true">
                                        <li>Picnic</li>
                                        <li>Garden furniture</li>
                                        <li>Beach (first line)</li>
                                        <li>Sun terrace</li>
                                        <li>Private beach area</li>
                                        <li>Barbecue facilities</li>
                                        <li>Terrace</li>
                                        <li>Garden</li>
                                    </ul>
                                    <ul class="false">
                                        <li>Picnic</li>
                                        <li>Garden furniture</li>
                                        <li>Beach (first line)</li>
                                        <li>Sun terrace</li>
                                        <li>Private beach area</li>
                                        <li>Barbecue facilities</li>
                                        <li>Terrace</li>
                                        <li>Garden</li>
                                    </ul>
                                </div>
                                <div class="program">
                            <h2>Program</h2>
                            <div class="program-days">
                                                                <div class="day-item">
                                    <div class="day-head">
                                        <div class="day-icon">
                                            <img src="img/nap4.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="day-num">Day 1</div>
                                        <div class="day-title">Delhi Pickup-Mussoorie</div>
                                    </div>
                                    <div class="day-body">
                                        <div class="apartment-item">
                                            <div class="apartment-content">
                                                <p>
                                                                                                                                                                                                                                                                                                                   Pickup from Delhi and drive to Mussoorie. Check in the hotel, after refresh you can visit Mall Road Mussoorie.After coming back to Hotel dinner and overnight stay at Mussoorie.

                                                </p>
                                            </div>
                                            <div class="apartment-images lightgallery">
                                                <a class="image-container" href="img/vput2.jpg">
                                                    <img src="img/vput2.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput5.jpg">
                                                    <img src="img/vput5.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput4.jpg">
                                                    <img src="img/vput4.jpg" class="image-cover" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="day-item">
                                    <div class="day-head">
                                        <div class="day-icon">
                                            <img src="img/nap4.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="day-num">Day 2</div>
                                        <div class="day-title">Mussoorie local sightseeing</div>
                                    </div>
                                    <div class="day-body">
                                        <div class="apartment-item">
                                            <div class="apartment-content">
                                                <p>
After morning breakfast drive to local sightseeing of mussoorie..
<br>
<br>
Lal Tibba-Lal Tibba is considered to be the highest point of Mussoorie. Beautiful yet magnificent   view of snow covered Gangotri, Kedarnath, Chaukhamba, Nanda Devi and Sri Kanta peaks. 
<br>
<br>
Gun Hill- This spot is also known as the tabletop and can be reached through a Ropeway ride or a 20- minute trudge up a bridle path. By reaching this place, you can find various vendors offering the Himalayan dresses for the memorable clicks 
<br>
<br>
The Mall- The mall is the main shopping area in Mussoorie. The mall road connects the two bazaars, the Kulri Bazaar and the Library Bazaar. It is known as the heart of the town. 
<br>
<br>
Kempty Fall-Gigantic Fall with somersault of the streams before hitting the bottom, Kempty Falls  

is the most popular and one of the oldest tourist spots near Mussoorie. 
<br>
<br>
Mussoorie Lake-Famous among family and couples for a perfect picnic spot near Mussoorie, a newly developed Mussoorie Lake is a newly developed tourist spot. 
<br>
<br>
Jharipani Falls-The cascading Jharipani Falls is located on Mussoorie-Jharipani road about 9 km from Mussoorie. After Sightseeing, Mussoorie comes back to Hotel,dinner & overnight stay at mussoorie.


                                                </p>
                                            </div>
                                            <div class="apartment-images lightgallery">
                                                <a class="image-container" href="img/vput2.jpg">
                                                    <img src="img/vput2.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput5.jpg">
                                                    <img src="img/vput5.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput4.jpg">
                                                    <img src="img/vput4.jpg" class="image-cover" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="day-item">
                                    <div class="day-head">
                                        <div class="day-icon">
                                            <img src="img/nap4.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="day-num">Day 3</div>
                                        <div class="day-title">Mussoorie-Nainital</div>
                                    </div>
                                    <div class="day-body">
                                        <div class="apartment-item">
                                            <div class="apartment-content">
                                                <p>
After Morning Breakfast drive to Nainital... Check in Hotel Dinner and overnight stay at Nainital.


                                                </p>
                                            </div>
                                            <div class="apartment-images lightgallery">
                                                <a class="image-container" href="img/vput2.jpg">
                                                    <img src="img/vput2.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput5.jpg">
                                                    <img src="img/vput5.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput4.jpg">
                                                    <img src="img/vput4.jpg" class="image-cover" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="day-item">
                                    <div class="day-head">
                                        <div class="day-icon">
                                            <img src="img/vput2.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="day-num">Day 4</div>
                                        <div class="day-title">Nainital Local Sightseeing</div>
                                    </div>
                                    <div class="day-body">
                                        <div class="apartment-item">
                                            <div class="apartment-content">
                                                <p>
After breakfast drive for Sightseeing in Nainital Nainital is a Himalayan resort town in the Kumaon region of India’s Uttarakhand state, at an elevation of roughly 2,000m. Formerly a British hill station, it’s set around Nainital Lake, a popular boating site with Naina Devi Hindu Temple on its north shore. A cable car runs to Snow View observation point (at 2,270m), with vistas over the town and mountains including Nanda Devi, Uttarakhand’s highest peak. Places To be visited : * Naina Devi Temple * Naina lake * Tallital  * Mallital * Bhimtal * Nainital Zoo After Sightseeing check in hotel,dinner and overnight stay at Nainital.                                                </p>
                                            </div>
                                            <div class="apartment-images lightgallery">
                                                <a class="image-container" href="img/vput2.jpg">
                                                    <img src="img/vput2.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput5.jpg">
                                                    <img src="img/vput5.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput4.jpg">
                                                    <img src="img/vput4.jpg" class="image-cover" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="day-item">
                                    <div class="day-head">
                                        <div class="day-icon">
                                            <img src="img/vput3.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="day-num">Day 5</div>
                                        <div class="day-title">Nainital- Delhi Drop</div>
                                    </div>
                                    <div class="day-body">
                                        <div class="apartment-item">
                                            <div class="apartment-content">
                                                <p>
After morning breakfast drive to Delhi Drop.

                                                </p>
                                            </div>
                                            <div class="apartment-images lightgallery">
                                                <a class="image-container" href="img/vput2.jpg">
                                                    <img src="img/vput2.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput5.jpg">
                                                    <img src="img/vput5.jpg" class="image-cover" alt="">
                                                </a>
                                                <a class="image-container" href="img/vput4.jpg">
                                                    <img src="img/vput4.jpg" class="image-cover" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="included">
                            <h2>Included</h2>
                            <div class="included-items">
                                <div class="included-item">
                                    <div class="included_title">Flight by plane</div>
                                    <div class="included_text">Flight and transfer to the hotel</div>
                                </div>
                                <div class="included-item">
                                    <div class="included_title">Wi-fi</div>
                                    <div class="included_text">Free wi-fi in the reception, wi-fi in public areas</div>
                                </div>
                                <div class="included-item">
                                    <div class="included_title">Smorgasbord</div>
                                    <div class="included_text">But I must explain to you how all</div>
                                </div>
                                <div class="included-item">
                                    <div class="included_title">Pool</div>
                                    <div class="included_text">Beautiful and large swimming pool at your service</div>
                                </div>
                            </div>
                        </div>
                                <h2>Header H2</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptas repellat laborum beatae eos, repellendus, deleniti eligendi rerum rem natus voluptatibus saepe cumque maxime obcaecati dicta veniam vero temporibus voluptatem aliquid tempora, inventore? Ducimus odio esse quas aliquid reprehenderit a natus omnis perferendis eveniet sint error ex saepe, fugit officiis!
                                </p>
                                <h3>Header H3</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptas repellat laborum beatae eos, repellendus, deleniti eligendi rerum rem natus voluptatibus saepe cumque maxime obcaecati dicta veniam vero temporibus voluptatem aliquid tempora, inventore? Ducimus odio esse quas aliquid reprehenderit a natus omnis perferendis eveniet sint error ex saepe, fugit officiis!
                                </p>
                                <div class="apartment-item">
                                    <div class="apartment-images lightgallery">
                                        <a class="image-container" href="img/vput6.jpg">
                                            <img src="img/vput6.jpg" class="image-cover" alt="">
                                        </a>
                                        <a class="image-container" href="img/vput7.jpg">
                                            <img src="img/vput7.jpg" class="image-cover" alt="">
                                        </a>
                                        <a class="image-container" href="img/vput8.jpg">
                                            <img src="img/vput8.jpg" class="image-cover" alt="">
                                        </a>
                                    </div>
                                    <div class="apartment-info">
                                        <h2 class="apartment-title">Duplex apartment</h2>
                                        <div class="apartment-cost">$300</div>
                                    </div>
                                    <div class="apartment-content">
                                        <p>
                                            <i>
                                                Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                                            </i>
                                        </p>
                                    </div>
                                    <button class="btn getModal" data-href="#book-now">
                                        <span>Book now</span>
                                    </button>
                                </div>
                                <div class="apartment-item">
                                    <div class="apartment-images lightgallery">
                                        <a class="image-container" href="img/vput6.jpg">
                                            <img src="img/vput6.jpg" class="image-cover" alt="">
                                        </a>
                                        <a class="image-container" href="img/vput7.jpg">
                                            <img src="img/vput7.jpg" class="image-cover" alt="">
                                        </a>
                                        <a class="image-container" href="img/vput8.jpg">
                                            <img src="img/vput8.jpg" class="image-cover" alt="">
                                        </a>
                                    </div>
                                    <div class="apartment-info">
                                        <h2 class="apartment-title">Duplex apartment</h2>
                                        <div class="apartment-cost">$300</div>
                                    </div>
                                    <div class="apartment-content">
                                        <p>
                                            <i>
                                                Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                                            </i>
                                        </p>
                                    </div>
                                    <button class="btn getModal" data-href="#book-now">
                                        <span>Book now</span>
                                    </button>
                                </div>
                                <h4>Header H4</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptas repellat laborum beatae eos, repellendus, deleniti eligendi rerum rem natus voluptatibus saepe cumque maxime obcaecati dicta veniam vero temporibus voluptatem aliquid tempora, inventore? Ducimus odio esse quas aliquid reprehenderit a natus omnis perferendis eveniet sint error ex saepe, fugit officiis!
                                </p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, <a href="#">consectetur</a>.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                </ul>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                                </ol>
                                <div class="faq">
                                    <h2 class="_title">Questions</h2>
                                    <p>
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus augue laoreet rutrum faucibus dolor auctor.
                                    </p>
                                    <div class="faq_accordeon">
                                        <div class="faq_item active">
                                            <div class="faq_tab">
                                                <span>Questions 1</span>
                                            </div>
                                            <div class="faq_content" style="display: block;">
                                                <p>
                                                    Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                                <p>
                                                    Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq_item">
                                            <div class="faq_tab">
                                                <span>Questions 1</span>
                                            </div>
                                            <div class="faq_content">
                                                <p>
                                                    Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                                <p>
                                                    Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq_item">
                                            <div class="faq_tab">
                                                <span>Questions 1</span>
                                            </div>
                                            <div class="faq_content">
                                                <p>
                                                    Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                                <p>
                                                    Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq_item">
                                            <div class="faq_tab">
                                                <span>Questions 1</span>
                                            </div>
                                            <div class="faq_content">
                                                <p>
                                                    Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                                <p>
                                                    Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="related_tours" id="end-single-content">
                                <div class="_title">
                                    Related Tours
                                </div>
                                <div class="most_popular__section">
                                    <a href="single.php" class="slider_item" style="background-image: url(img/prevput15.jpg)">
                                        <div class="slider_item__content">
                                            <div class="rating">
                                                <div class="stars">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="reviews_count">
                                                    (2 Reviews)
                                                </div>
                                            </div>
                                            <div class="title">
                                                Haridwar, Badrinath |<br> Rs. 24,999/-
                                            </div>
                                            <div class="days">
                                                <span>7 days</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="single.php" class="slider_item" style="background-image: url(img/prevput12.jpg)">
                                        <div class="slider_item__content">
                                            <div class="rating">
                                                <div class="stars">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="reviews_count">
                                                    (2 Reviews)
                                                </div>
                                            </div>
                                            <div class="title">
                                                Nainital & Jim Corbett | <br> Rs. 24,999/-
                                            </div>
                                            <div class="days">
                                                <span>7 days</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="reviews_comments">

                                <div class="add_comment">
                                    <div class="_title">Write a review</div>
                                    <div class="field">
                                        <label for="comment-input-1" class="label">Your name</label>
                                        <div class="input_wrap">
                                            <input type="text" id="comment-input-1" class="input">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="comment-input-2" class="label">Your email</label>
                                        <div class="input_wrap">
                                            <input type="email" id="comment-input-2" class="input">
                                        </div>
                                    </div>

                                    <div class="field file-field">

                                        <div class="input_wrap">
                                            <input type="file" id="comment-input-3">
                                            <label for="comment-input-3" class="btn upload">Choose image</label>
                                            <div class="file-name">IMAGE_1040.JPG</div>
                                            <button class="close"></button>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="comment-input-4" class="label">Your comment</label>
                                        <div class="input_wrap">
                                            <textarea id="comment-input-4" class="textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="comment-fotm-bottom">
                                        <div class="rating user-rating">
                                            <div class="stars">
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>

                                        <button class="btn submit">Sumbit</button>
                                    </div>
                                </div>

                                <div class="reviews_comments_list">
                                    <div class="comment_item">
                                        <div class="photo">
                                            <img src="img/vblog1.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="name">John Smith</div>
                                        <div class="position">Family Traveller</div>
                                        <div class="text">
                                            Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div class="rating">
                                            <div class="stars">
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="date">January 23, 2019</div>
                                    </div>
                                    <div class="comment_item">
                                        <div class="photo">
                                            <img src="img/about5.jpg" alt="" class="image-cover">
                                        </div>
                                        <div class="name">John Smith</div>
                                        <div class="position">Family Traveller</div>
                                        <div class="text">
                                            Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div class="rating">
                                            <div class="stars">
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star active"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="date">January 23, 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-right">
                            <div class="single-sidebar">
                                <div class="tour--info">
                                    <div class="top" style="background-image: url(img/usa.jpg);">
                                        <div class="tags">
                                            <div class="tag discount">20% off</div>
                                            <div class="tag new">New</div>
                                        </div>
                                        <div class="flex-bottom">
                                            <div class="rating">
                                                <div class="stars">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="reviews_count">
                                                    (2 Reviews)
                                                </div>
                                            </div>
                                            <div class="_title">Nainital & Jim Corbett</div>
                                            <div class="time">7 days</div>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="cost">
                                            <div class="new-cost">Rs. 24,999/-</div>
                                            <div class="old-cost">Rs. 29,999/-</div>
                                        </div>
                                        <button class="btn getModal" data-href="#book-now">
                                            Book now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-fixed-bottom getModal" data-href="#book-now">
                Book now
            </div>
        </div>
        <div class="footer">
            <div class="footer_top">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_head_mobile">
                            <div class="logo"><img src="img/logo_w.png" height="40px" width="200px"></div>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_top_menu">
                            <ul>
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="tour-list.php">Tour List</a></li>
                                <li><a href="destinations.php">Destinations</a></li>
                                <li><a href="single.php">Date & Pricing</a></li>
                                <li><a href="blog-list-2.php">Blog</a></li>
                            </ul>
                        </div>
                        <div class="socials">
                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="a facebook"></a>
                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_center">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_center_left">
                            <a href="/" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_center_menu">
                            <ul>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Family Friendly Tours</a></li>
                                <li><a href="#">Outdoor Activites</a></li>
                                <li><a href="#">Relaxation Tours</a></li>
                                <li><a href="#">City Tours</a></li>
                                <li><a href="#">Holiday & Seasonal Tours</a></li>
                                <li><a href="#">Cultural & Thematic Tours</a></li>
                                <li><a href="#">Wild & Adventure Tours</a></li>
                            </ul>
                        </div>
                        <div class="footer_center_right">
                            <div class="_title">CONTACTS</div>
                            <div class="text">
                                <p>Head Office: <b>F - 213/D, Old MB Road, Maharaja BUilding, New Delhi.</b> </p>
                                <p>Branch Office: <b>4th Floor, Shop No.-50B, Roshpa Tower, Ranchi.</b> </p>
                                <p>Phone: <a href="tel:+919205576025">+91 92055 76025</a></p>
                                <p><a href="mailto:info@travelzillas.com">info@travelzillas.com</a></p>
                            </div>
                        </div>
                        <div class="mobile_socials">
                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="a facebook"></a>
                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                Copyright 2021 <a href="#">Travelzillas</a> | All Right Reserved | Designed By <a href="http://vocl4locl.com/" target="_blank">Denizen Innovations</a>
            </div>
        </div>
    </div>

    <div class="search_form" id="search_form">
        <div class="wrap">
            <div class="wrap_float">
                <input type="text" class="input" placeholder="Search...">
                <button type="submit" class="submit"></button>
                <div class="close"></div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <div style="display: none;">
        <div class="modal modal_book_now" id="book-now">
            <div class="modal_wrap">
                <div class="modal-head">
                    <img src="img/vput2.jpg" class="image-cover" alt="">
                </div>
                <div class="modal-body">
                    <div class="tags">
                        <div class="tag discount">20% off</div>
                        <div class="tag new">New</div>
                    </div>
                    <div class="modal-title">
                    Nainital & Mussoorie | $3,500
                    </div>
                    <div class="fields">
                        <div class="field half">
                            <label class="label" for="name-2">Full Name*</label>
                            <div class="input_wrap">
                                <input type="text" class="input" id="name-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="email-2">Email Address*</label>
                            <div class="input_wrap">
                                <input type="email" class="input" id="email-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="date-2a">Travel Date*</label>
                            <div class="input_wrap calendar-field">
                                <input type="text" class="input js_calendar" id="date-2a">
                            </div>
                        </div>
                        <div class="field half">
                            <p class="label">Person*</p>
                            <div class="input_wrap">
                                <input type="text" class="input" id="date-2">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="enquiry-2">Your Enquiry*</label>
                            <div class="textarea_wrap">
                                <textarea class="textarea" id="enquiry-2"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn submit">Sumbit</button>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <script defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_HERE&callback=initMap"></script>
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/jquery-ui.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/jquery.arcticmodal.min.js"></script>
    <script defer src="js/lightgallery.js"></script>
    <script defer src="js/spincrement.min.js"></script>
    <script defer src="js/scripts.min.js"></script>
</body>

</html> 