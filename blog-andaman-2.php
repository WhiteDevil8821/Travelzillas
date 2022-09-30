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
                    <a href="#" class="current">Andaman Blog</a>
                </div>
            </div>
        </div>
        <div class="image_bg--single" style="background-image: url(img/andamanblog2.jpg);"></div>
        <div class="page_content single-page blog-single">
            <div class="content-head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="main">
                            <div class="title">
                                Honeymoon In Andaman and Nicobar Islands | Get a live experience together with your loved ones
                            </div>
                            <div class="date">
                                FEBRUARY 26/2021 | HONEYMOON
                            </div>
                            <div class="description">
                                <p>
                                    A large percentage of newlywed couples head to Andaman per annum. There are also similar itineraries available on different journey outlets and everyone offers similar hotel stays and actions in their packages. If that creates you to drop the thought of a honeymoon in Andaman, pause! Pause, read, then decide. The land of Kalapani may be a land of crystal blue waters. And if you're looking to possess a romantic honeymoon here, a singular one at that, stand back from the cliches. Here are some unusual alterations which will make it an awesome experience for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="wrap">
                    <div class="wrap_float">
                        <img src="img/andamanblog2-1.jpg" alt="">
                        <div class="details">
                            <div class="_title">
                                <br>Are you super cool to understand the Climate and Weather :
                            </div>
                            <div class="text">
                                <p>
                                    Andaman features a moderate climate and one can visit it at any time during the year. But the simplest time to plan a honeymoon in Andaman is from October to May. October to March is that the winter season here which is additionally the simplest time to enjoy the water activities at the beaches in Andaman. The skies are clear and therefore the temperature is pleasant during the winter season here. there's also an exciting beach festival that takes place in April here. Thus, these are a number of the simplest months to plan a honeymoon in Andaman.
                                </p>
                                <p>
                                    Andaman may be a beautiful Indian archipelago with the foremost romantic places in Andaman to explore.
                                </p>
                            </div>
                        </div>
                        <div class="page--content">
                            <h2>Are you curious about trying to find the simplest places at Andaman and Nicobar</h2>
                            <h4>1. Havelock Island</h4>
                            <p>
                                This is famous for its dive sites and beach and it is the perfect island for couples. It offers thrilling activities to enjoy like diving, snorkeling, kayaking, and more. If one is trying to find a more laid-back honeymoon vacay, then CK may be a perfect choice. it's a number of the foremost beautiful beaches for one to unwind and relax.<br>
                                <b>Places To Visit: </b>Radhanagar, Elephant, Kalapathar Beaches.
                            </p>
                            <h4>2. Neil Island </h4>
                            <p>This Island is that embodiment of scenic glamour with its beautiful area hood. The white sand beaches here are perfect to enjoy evening strolls together with your partner. The moistures are calm and clean and we can enjoy swimming and diving. Do have candlelight dinner at the beach and plan romantic dates for the right honeymoon in Andaman at Neil Island.<br>
                                <b>Places To Visit:</b> Laxmanpur, Sitapur, and Bharatpur Beaches
                            </p>
                            <h4>3. Little Andaman</h4>
                            <p>
                                Little Andaman is another beautiful island to go to on a 2021 honeymoon trip to Andaman. You can spend some quality time with your spouse at the pristine beaches here. The waterfront resorts are beautiful requesting one with all the luxuries. It's an ideal escape for an elegant honeymoon in Andaman.<br>
                                <b>Places To Visit:</b> Butler Bay Beach and Kalapathar with White Surf Waterfall
                            </p>
                            <img src="img/andamanblog2-2.jpg" alt="">
                            <h4>4. Cuthbert Bay Wildlife Sanctuary</h4>
                            <p>
                                Considered one among the simplest honeymoon places in Andaman, Cuthbert Bay Wildlife Sanctuary may be a turtle-nesting ground. the simplest time to go to this wildlife sanctuary is between October and April. you'll spot Pacific ridley turtle, Hawksbill, spotted deer, and Leatherback turtles at this spectacular Cuthbert Bay Wildlife Sanctuary in Andaman and Nicobar Islands.<br>
                                <b>Location:</b> Andaman and Nicobar Islands
                            </p>
                            <h4>5. Samudrika aquarium</h4>
                            <p>
                                Located near Andaman Teal House, the Samudrika aquarium is one of the foremost famous tourist attractions for all marine lovers. This gallery museum was assembled to circulate an understanding of the ocean and aquatic life. So don't forget to visit this museum to witness compartments and corals with a couple of species of colorful fishes.<br>
                                <b>Location:</b> Port Blair and the Nicobar Islands
                            </p>
                            <h3>Are you worried about out were to remain here we offer with Best Places to remain For Honeymoon In Andaman</h3>
                            <p>A perfect honeymoon is one when the accommodation is ideal, the necessities are taken care of and therefore the setting is gorgeous. a number of these places in Andaman are the simplest options for one to remain at for a honeymoon. Have a glance.</p>
                            <h4>1. Silver Sand Beach Resort Havelock:</h4>
                            <p>Silver Sand Beach Resort may be a beautiful resort located on Havelock Island in Andaman. With beautiful surroundings and therefore the perfect ambiance, it makes for an excellent place for honeymooners to remain. The rooms accompany beautiful garden views and therefore the property also has an in-house bar for the guests to enjoy exotic drinks and more.<br>
                                <b>Location:</b> Havelock Island, India
                            </p>
                            <h4>2. Munjoh Ocean Resort</h4>
                            <p>
                                There is another wonderful hotel situated on Havelock Island which is in Munjoh Ocean Resort which is an enormous stay option for honeymooners who have ocean and pool suites. One can choose consistent with their preferences. Aside from the comfortable rooms that accompany all the essential amenities, the resort features an in-house restaurant that serves delicious seafood and continental cuisines.<br>
                                <b>Location:</b> Havelock Island, India
                            </p>
                            <img src="img/andamanblog2-3.jpg" alt="">
                            <h4>3. Sea Princess Beach Resort</h4>
                            <p>With an outside pool and delightful views of the ocean, Sea Princess Beach Resort is another great option for honeymooners. The rooms accompany a garden or pool view. The resort is about in lush green environs and therefore the ambiance is calm and tranquil.<br>
                                <b>Location:</b> New Wandoor Beach, Wandoor.
                            </p>
                            <h3>Recreations on Your Honeymoon Trip to Andaman & Nicobar Islands:</h3>
                            <ul>
                                <li>Normal Boat ride</li>
                                <li>Ferry ride</li>
                                <li>Jet Ski Ride</li>
                                <li>Snorkeling</li>
                                <li>Scuba Diving</li>
                                <li>Beach Sun Tanning</li>
                                <li>Coral reef experience in Deep Sea</li>
                                <li>Romantic Candle Light Dinner</li>
                                <li>Lots of Shopping</li>
                                <li>Delicious Food: Fruits and native dishes.<br><br></li>
                            </ul>
                            <!--<div class="video_block">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/v_C7OXbvuD8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>-->
                            <div class="quote">
                                <div class="quote_top">
                                    <!--<div class="photo">
                                        <img src="img/vblog1.jpg" alt="">
                                    </div>-->
                                    <div class="text">
                                        We consider this adventurous tour as an ultimate and lifelong memorable honeymoon trip with many memories captured. Diving in Andaman was a singular life experience. The inshore water enclosing these islands is the dwelling of 1 of  prosperous reef ecosystems in the world. The special part is that here the coral reefs and underwater formations are undamaged by the act.<br><br>Andaman & Nicobar are undoubtedly one among the simplest honeymoon destinations within the world, courtesy of their gorgeous beaches and warm people. We are crazy with Andaman for providing us with an unimaginable, memorable, and unforgettable experience we couldn't have even dreamt about before visiting this place.

                                    </div>
                                </div>
                                <div class="quote_bottom">
                                    <div class="name">- Conclusions</div>
                                </div>
                            </div>
                            <h5>"ANDAMAN is a paradise on earth!"</h5><br>
                            <img src="img/andamanblog2-4.jpg" alt="">
                        </div>
                        <div class="recent_articles">
                            <div class="title">
                                <br>Recent Articles
                            </div>
                            <div class="items">
                                <a href="blog-srilanka-1.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/srilankablog1.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | FAMILY
                                    </div>
                                    <div class="blog_item_title">
                                        Sri Lanka trip with my whole family | Own experience
                                    </div>
                                    <!--<div class="blog_item_text">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    </div>-->
                                </a>
                                <a href="blog-maldives-1.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/maldivesblog1.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | FAMILY
                                    </div>
                                    <div class="blog_item_title">
                                        Interesting facts on Maldives | Reasons to travel on a visit to the Maldives
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