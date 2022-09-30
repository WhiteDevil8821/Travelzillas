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
                        <a href="/" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
                        <div class="menu" id="js-menu">
                            <div class="close"></div>
                            <div class="scroll">
                                <div class="scroll_wrap">
                                    <ul>
                                        <li><a href="/" class="active">Home</a></li>
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
                                            <a href="tour-list.php">
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
                                            <a href="single.php">
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
                                            <a href="blog-list.php" class="current">
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
                                            <a href="#" class="fb"></a>
                                            <a href="#" class="instagram"></a>
                                            <a href="#" class="pinterest"></a>
                                            <a href="#" class="twitter"></a>
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
                    <a href="#">Blog</a>
                    <span class="separator">/</span>
                    <a href="#" class="current">Maldives Blog</a>
                </div>
            </div>
        </div>
        <div class="image_bg--single" style="background-image: url(img/maldivesblog1.jpg);"></div>
        <div class="page_content single-page blog-single">
            <div class="content-head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="main">
                            <div class="title">
                                Interesting facts on Maldives | Reasons to travel on a visit to the Maldives
                            </div>
                            <div class="date">
                                FEBRUARY 26/2021 | FAMILY
                            </div>
                            <div class="description">
                                <p>
                                    The Maldives is reported for its crystalline waters with beautiful blue, drooping palm trees with sparkling white sand under the limitless bleak of skies. With weather throughout most of the year, Maldives makes an excellent choice for an idyllic beach getaway.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="wrap">
                    <div class="wrap_float">
                        <img src="img/maldivesblog1-1.jpg" alt="">
                        <div class="details">
                            <div class="_title">
                                <br>Here, we share with you ten reasons why the Maldives should get on your travel bucket list.
                            </div>
                            <div class="text">
                                <p>
                                    
                                </p>
                            </div>
                        </div>
                        <div class="page--content">
                            <h4>1. Most Romantic Place on Earth</h4>
                            <p>
                                A visit to the Maldives may be a dream come true. All the resorts will be a personal enclave seated on a private island, furnishing its inhabitants with restricted calmness. This is often an excellent place to relax and spend quality time together with your spouse or family. Imagine awakening on a personal island, surrounded by swaying palm trees, azure blue sea, and pristine soft white sand a day. The Maldives is where you create magical memories together with your loved ones.
                            </p>
                            <img src="img/maldivesblog1-2.jpg" alt="">
                            <h4>2. Amazing Myriad of Marine Life</h4>
                            <img src="img/maldivesblog1-3.jpg" alt="">
                            <p>So without getting wet in waters in the Maldives it would be incomplete with wealthy oceanic existence. The Maldives is world-famous for its amazing myriad of marine life and is taken into account to be one of the simplest snorkeling/ diving locations within the world. So here we have many resorts with special cottage reefs that are particularly eye-catching and you can get snorkeling all day. You can also swim as you wish in the Indian Ocean through the powerful collections of corals, sea turtles, sharks, shells, and a collection of other underwater species! It seems like swimming in a giant Aquarium.
                            </p>
                            <h4>3. Unrivalled Luxury and Pampering</h4>
                            <p>
                                If there has been one luxury destination in Asia that involves the mind, it's to be the Maldives. Over here, you'll be treated royally. From the instant you reach the Male Airport, resort representatives are going to be there to escort you to your luxury speedboat or seaplane. This is often where your fuss-free vacation begins. From the unparalleled top-notch personalized service to the romantic Dhoni cruises to dining on a personal sandbank, you'll enjoy unrivaled luxury and pampering.
                            </p>
                            <h4>4. Living on the Ocean</h4>
                            <p>
                                Overwater villas are everywhere on the planet but you ought to not miss out on those within the Maldives. Everyone should experience staying in these villas a minimum of once in their lives. awakening to the paranomic view of the vast turquoise sea with only the sound of the waves lapping against your resort and therefore the gentle breeze blowing against your face, while watching the resplendent ingredient sunrise, is that the ultimate Maldivian experience. What’s more, the colorful corals and rich marine life are right at the doorstep.
                            </p>
                            <img src="img/maldivesblog1-4.jpg" alt="">
                            <h4>5. Beautiful Scenery in Paradise</h4>
                            <p>
                                Well known for its picturesque beaches with sparkling soft white sand, beautiful azure sea, and impossibly clear skies, the term “tropical paradise” for the Maldives is nearly an irony. Enjoying the balcony while celebrating the soul halting impressions of the Indian Ocean is a dream. Every single angle seems to be the right viewpoint for taking picture-perfect postcard-worthy photos.
                            </p>
                            <h4>6. A Paradise’s Race against the clock</h4>
                            <p>
                                The Maldives is the world's world's best-lying nation, at just 1.3 meters above water level. If the ocean level rises by just another meter, the island nation would become uninhabitable. With global sea levels rising rapidly thanks to unpredictable climate changes, Maldives may disappear from the planet shortly. Start saving, start planning and visit the Maldives before it’s gone forever.
                            </p>
                            <img src="img/maldivesblog1-5.jpg" alt="">
                            <h4>7. The last word Privacy and Seclusion</h4>
                            <p>
                                A trip to the Maldives is an ultimate vacation where you get to enjoy a mixture of nature, luxury, and privacy. Sandbank dining is one of the foremost serene and romantic experiences within the Maldives. Enjoy the sandbank privately together with your special another half on the stark white sand while being surrounded by the endless Indian Ocean. Savor your meal as you witness the primary rays of morning light on the horizon.
                            </p>
                            <h4>8. An Unforgettable Travel Experience</h4>
                            <p>
                                I strongly encourage you to place the Maldives on your travel bucket list because life is just too short to miss out on this paradise! The Maldives is one of the simplest vacation destinations within the world and you'll have unforgettable memories here.
                            </p>
                            <h4>9. Delicious Dining</h4>
                            <p>
                                Guests within the Maldives have three options for dining. They will enjoy abundant worldwide fare within the hotels, cheap regional dinners along with the rural neighborhoods, or dining within the towns of Male and Addu. Most visitors stick with the delicious food served within the resorts, but the dining in Male is far cheaper and maybe excellent thanks to trying local favorites like riha curry and spicy fish cakes called kulfi boakibaa. So if you wish to stay in a luxurious hotel, you will want to dine as well and you don't want to panic as they won't provide regional dishes every day the hotel is known for their wonderful cooking from all parts on the earth.
                            </p>
                            <img src="img/maldivesblog1-6.jpg" alt="">
                            <!--<div class="video_block">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/v_C7OXbvuD8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>-->
                            <h4>10. Scuba diving</h4>
                            <p>
                                One of the foremost popular pastimes within the Maldives is skin diving. The sheer number of atolls makes it ideal for skin diving, but also snorkeling, among the coral and therefore the native marine life. Compared to other exotic destinations, skin diving within the Maldives is incredibly safe also. A special activity called SUP has become a  popular activity to enjoy and most of the resorts also offer daily yoga classes. You would possibly even be curious about kayaking and canoeing – don’t forget to pack your waterproof camera!<br><br><br><br>
                            </p>
                            <div class="quote">
                                <div class="quote_top">
                                    <!--<div class="photo">
                                        <img src="img/vblog1.jpg" alt="">
                                    </div>-->
                                    <div class="text">
                                        So just don't wait, book your ticket and luxuriate on your trip together with your loved ones. I suggest that <b>TravelZillas</b> will provide you the simplest ones you would like to visit 

                                    </div>
                                </div>
                                <div class="quote_bottom">
                                    <div class="name">- Conclusions</div>
                                </div>
                            </div>
                        </div>
                        <div class="recent_articles">
                            <div class="title">
                                Recent Articles
                            </div>
                            <div class="items">
                                <a href="blog-kerala-2.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/keralablog2.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | FRIENDS
                                    </div>
                                    <div class="blog_item_title">
                                        My Gala trip with my Friends | KERALA BLOG
                                    </div>
                                    <!--<div class="blog_item_text">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    </div>-->
                                </a>
                                <a href="blog-sikkim-2.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/sikkimblog2.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | HONEYMOON
                                    </div>
                                    <div class="blog_item_title">
                                        A TRIP TO SIKKIM | HONEYMOON DAYS - OVERALL GUIDE TO EXPLORE
                                    </div>
                                    <!--<div class="blog_item_text">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    </div>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                        America, San Francisco | $3,500
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