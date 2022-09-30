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
                    <a href="#" class="current">Kerala Blog</a>
                </div>
            </div>
        </div>
        <div class="image_bg--single" style="background-image: url(img/keralablog1.jpg);"></div>
        <div class="page_content single-page blog-single">
            <div class="content-head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="main">
                            <div class="title">
                                A complete package to celebrate Honeymoon | Kerala days
                            </div>
                            <div class="date">
                                FEBRUARY 26/2021 | HONEYMOON
                            </div>
                            <div class="description">
                                <p>
                                    All the Hazy hills with beautiful back countries with never-ending coconut forests and the silence of beaches of the dense leafy state of Kerala make it an extra romantic destination for couples. The long list of honeymoon places in Kerala makes a total alluring conspiracy.  So just make your honeymoon excursion by examining the beauty of the Indian state of Kerala.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="wrap">
                    <div class="wrap_float">
                        <img src="img/keralablog1-1.jpg" alt="">
                        <div class="details">
                            <div class="_title">
                                <br>Are you ready to pick Your Perfect Kerala Destination
                            </div>
                            <div class="text">
                                <p>
                                    So once you have confirmed your honeymoon duration the following step is to grab your location. How and where do you want to spend your honeymoon? If you plan to go to Kerala, this page gives you a perfect idea of all places to visit in Kerala. It has a wide variety of honeymoon spots for you to choose from, so you’ll find at least one that suits your taste. Some guidelines on how to pick your honeymoon goal.
                                </p>
                                <p>
                                    Just make sure what the weather will be like on the proposed dates. In Kerala especially one section of the year is the monsoon season with significant rain. If you are someone who will not enjoy the rain, it would be better for you to pick a location that has shorter rainfall. It is up to you to choose the best place to stay with your couples.
                                </p>
                            </div>
                        </div>
                        <div class="page--content">
                            <h2>Best places to visit with your couple:</h2>
                            <img src="img/keralablog1-2.jpg" alt="">
                            <p>
                                
                                <br><b>1. Munar</b><br><br>
                                The lusciously glorious hills of Munnar are the most popular honeymoon destinations in Kerala. So make it closer to nature by roaming through the seamless space of tea plantations with all exotic species of flora and fauna in Eravikulam National Park also visit beautiful falls at Pallivasal and Chinnakanal. Add your trip with a stay at the Windermere Estate. Established in Munnar hill station, it is a luxurious yet private country retreat. A glance at the terraces and gardens from your beautiful rooms, to the cardamom and coffee plantations by falling in love with nature. The glamour of the objective ranks the best tourist places in Kerala for a honeymoon. Kerala travel advice will counsel you to plan your trip and make it extraordinary for a lifetime.<br>
                                <b>Perfect time to visit:</b> October to November and January to May.<br>
                                <b>Stay place:</b> Windermere Estate.<br>
                                <b>Places to visit:</b> Eravikulam National Park and  Poopara.<br>
                                <b>Stuff to do:</b> Indulge in rappelling, do rock climbing and nature walk with loved ones.
                            </p>
                            <img src="img/keralablog1-3.jpg" alt="">
                            <p>
                                <br><b>2. Alleppey</b><br><br>
                                The utmost romantic familiarity on a trip to Kerala is being fulfilled by a freshly prepared meal as you enjoy the lush greenery, endless paddy fields, remote islands, and tranquil backwaters in a beautiful Alleppey houseboat. If this romantic dream you are looking for in your honeymoon is the best place is Alleppey to make it come true. Live in the luxury cottages at A Beach Symphony which provides its visitors with the stunning view of the Marari Beach with remarkable food, and all the privacy that you would want on your honeymoon.<br>
                                <b>When to Visit:</b> October to February.<br>
                                <b>A place to Stay:</b> Beach Symphony.<br>
                                <b>Places to visit:</b> Marari and Alleppey Beach go for Revi Karunakaran Museum, visit St. Andrew’s Basilica Arthunkal, and Kuttanad Backwaters.<br>
                                <b>Stuff to do:</b> Cruise, Kayaking, Backwater, etc.
                            </p>
                            <img src="img/keralablog1-4.jpg" alt="">
                            <p>
                                <br><b>3. Kovalam</b><br><br>
                                Have you ever seen a postcard of the state, if there is a chance you have come across the Kovalam beach with the landmark lighthouse in the background? Do stay at Kovalam for a flexible beach holiday with your spouse as it is one of the best honeymoon places in Kerala. Then visit the nearby Lighthouse beach, Hawah beach, and the much quieter Samudra beach and watch the beautiful sunset holding hands. Do stay at The Leela Kovalam, one of the finest and biggest beachside resorts in Kerala. This is rocked between two broad beaches and the hotel is straddled on a rock-face and offers the most panoramic views of the acclaimed Kovalam shoreline.<br>
                                <b>When to Visit:</b> The best time to visit Kovalam is during September to March month.<br>
                                <b>Stay:</b> The Leela Kovalam is best to stay.<br>
                                <b>Places to visit:</b> Rock-cut Cave Temple and get pure divine and Samudra Beach Park also for Sunset Point Cape and Lighthouse Beach and get enlightened.<br>
                                <b>Stuff to do:</b> Sightseeing, Houseboat, Water Sports, etc.
                            </p>
                            <img src="img/keralablog1-5.jpg" alt="">
                            <p>
                                <br><b>4. Bekal</b><br><br>
                                To have a memorable trip just choose a honeymoon destination in Kerala that will not only give you luxuries and satisfaction but give natural beauty to your life. In Bekal, you will find both. Clean sand and water, panoramic view of the Bekal Fort, and proximity to the calming backwaters of Valiyaparamba make this destination a perfect spot for an intimate holiday with your partner. You can stay in the quaint villas of Vivanta By Taj, located at Bekal where you get an incredible melange of backwaters and the sea. The gardens converge to the beautiful Kappil beach.<br>
                                <b>When to Visit:</b> October to March.<br>
                                <b>Where to Stay:</b> Vivanta By Taj.<br>
                                <b>What are the places to visit:</b> Bekal Beach, Bekal Fort, and Nityananda Ashram Caves.<br>
                                <b>Stuff to do:</b> Sightseeing and visiting Ashram Caves and going to beaches.
                            </p>
                             <img src="img/keralablog1-6.jpg" alt="">
                            <p>
                                <br><b>5. Wayanad</b><br><br>
                                It has a thick rainforest, a lot of spice farms, and fascinating waterfalls. Wayanad is one of the excellent honeymoon places in Kerala. Also, don't forget to have a visit to the Kuruva Island for a lock go for tracking at the Chembra Peak for an extraordinary view to get fascinated by the Meenmutty Waterfalls and also go to distinct sites like Edakkal Caves and relieve at a thrilling resort located amidst nature. You can stay at the Vythiri Resort for a mixture of modern conveniences and realistic glamour which you will enjoy in joy. Another one to have for a truly dramatic understanding does have a stay at a treehouse designed to empower you with the best sensations of nature.<br>
                                <b>Best time to Visit:</b> October to May.<br>
                                <b>Stay place:</b> Vythiri Resort.<br>
                                <b>What are the places to visit:</b> There are many places to visit like Chembra Peak and heart-shaped Chembra Lake the Edakkal Caves and also go to Kuruvadweep river delta, go for Wayanad Heritage Museum, Thirunelli Temple, and Soochipara Falls.<br>
                                <b>Stuff to do:</b> Wayanad Wildlife Sanctuary, Bamboo Rafting, and caving with your loved one.
                            </p>
                            <img src="img/keralablog1-7.jpg" alt=""><br><br><br><br><br>
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
                                       Therefore, we want you to have a hassle-free, fun-filled honeymoon that will remain with you long after you get back into the hustle and bustle of everyday life. Let's kick back, relax and plan your honeymoon to Kerala. I assure you, it will be a decision you’ll never regret.
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
                                <a href="blog-sikkim-1.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/sikkimblog1.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | FAMILY
                                    </div>
                                    <div class="blog_item_title">
                                        My Kinda Family Trip to Sikkim | A Perfect place to visit
                                    </div>
                                    <!--<div class="blog_item_text">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    </div>-->
                                </a>
                                <a href="blog-andaman-2.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/andamanblog2.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | HONEYMOON
                                    </div>
                                    <div class="blog_item_title">
                                        Honeymoon In Andaman and Nicobar Islands
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