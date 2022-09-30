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
                    <a href="#" class="current">Sri-Lanka Blog</a>
                </div>
            </div>
        </div>
        <div class="image_bg--single" style="background-image: url(img/srilankablog1.jpg);"></div>
        <div class="page_content single-page blog-single">
            <div class="content-head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="main">
                            <div class="title">
                                Sri Lanka trip with my whole family | Own experience
                            </div>
                            <div class="date">
                                FEBRUARY 26/2021 | FAMILY
                            </div>
                            <div class="description">
                                <p>
                                    My family trip to Sri Lanka was an incredible occasion and experience. Altogether we were 4 in our family which includes me, my parents, and my brother. Sri Lanka was certainly peaceful and it gave what we were seeking during a holiday. So with my experience, I am telling you that you too can book a Sri Lanka tour with your loved ones, your family, or friends and get the peace and happiness I got.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="wrap">
                    <div class="wrap_float">
                        <img src="img/srilankablog1-1.jpg" alt="">
                        <div class="details">
                            <div class="_title">
                                <br>Outline:
                            </div>
                            <div class="text">
                                <p>
                                    <b>Duration:</b> 6 Days and 5 Nights.<br>
                                    <b>Budget:</b> INR 78,000.<br>
                                    <b>The month we went:</b> January.<br><br>
                                    <b>Inclusions:</b> Accommodation at Laluna Resort, Aluthgama, Hotel Tea Bush, Nuwara Eliya, Emerald Hill, Kandy, Ocean Edge Suites, Colombo, went for sailing at Madhu river. 
                                </p>
                                <p>
                                    We have not yet visited an island country close to India before and it was our first visit. We needed a break from work and my family decided to go to Sri Lanka. Sri Lanka is enormous with a rich culture and past. The next task was to decide on the dealer or agent to help us reach Sri Lanka and make it a hassle-free trip. We chose <b>TravelZillas</b> as we thought it would give the exact things we want. It helped us in connecting to three different agents, we modified packages as per our provisions and we had a favorable customized package at our discarding. We were truly happy with the assistance and service that we got from them. The immediate answers and the 24/7 support made us turn to TravelZillas.We can happily say that we made the right choice.
                                </p>
                            </div>
                        </div>
                        <div class="page--content">
                            <h2>Detailed information of our trip</h2>
                            <h4>Day 1: Outings to various places</h4>
                            <p>
                                We vacated for Sri Lanka from Mumbai on 13th January and reached Sri Lanka during the evening at 5 pm. Upon coming we were welcomed by our dealer representative and they took us to the Laluna Resort Hotel located at Bentota. Later we arrived at the hotel and relaxed and went to the beach. We had a lot of fun at the beach by playing in the water and then later arrived back to have some lunch. We had some rest as we were quite bored by the sunrise journey. We got ready for sightseeing in the evening. At first, we visited the turtle hatchery which was an interesting outing for me especially. The turtles were allowed to hatch and thrive in a safe area and were set free. This place is a must-visit spot for nature and animal lovers. Then we went to the Madhu River where we enjoyed a lovely boat safari. Also, we visited some small islands. After that, we enjoyed the fish therapy at the spa, something we have not done before. It was a very relaxing occasion and all of us appreciated it a lot. For dinner, we came back to our hotel and wrecked in early for the next day's fun.
                            </p>
                            <img src="img/srilankablog1-2.jpg" alt="">
                            <h4>Day 2: Visiting blowhole</h4>
                            <p>
                                It was Day 2, we got up and down and we had an early morning breakfast. We vacated and went to the place called Galle where we visited the end of the Galle Fort. We clicked some pictures then we walked around the fort area. It was a wonderful walk as the climate was nice. We then also visited Rumassala Hill. It was a 2 km journey but it existed worth it. The area was very leafy and peaceful. Then we visited other places called the blowhole. The blowhole in Sri Lanka is the second biggest blowhole in the world. It is a place for bonding pictures. As an overall thing, it was a fascinating occasion.
                            </p>
                            <img src="img/srilankablog1-3.jpg" alt="">
                            <h4>Day 3: Fun time at the beach</h4>
                            <p>
                                Day 3 was all about relaxing in Bentota. After breakfast, we all went to the beach and relieved our tension. We spent the first half of the day at the beach and after that, we came back to our hotel and had lunch. The people around the beach told us not to miss the sunset at Bentota beach. Yes!! They were right, it was eye-catching. The sunset in Bentota beach was possibly the finest sunset we had ever seen in our lives. Subsequently enjoying the view we went for a walk around the city for some time and came back to our hotel and took a rest for the next day outings.
                            </p>
                            <h4>Day 4: Visit Nuwara Eliya</h4>
                            <img src="img/srilankablog1-4.jpg" alt="">
                            <p>
                                Day 4 was stocked for Nuwara Eliya. We left our hotel to Nuwara Eliya at around 10 am. As we were going our driver indicated to go white water rafting at Pitun Galla. It turned out to be a remarkable experience for my family. We wrapped up rafting by 2 pm. We reached Nuwara Eliya by afternoon. To describe Nuwara Eliya’s beauty in words is just incredible. We surveyed our hotel which was quite delicious and prosperous.  We were tired by the rafting so we had an early dinner and decided to rest for the next day hunting.
                            </p>
                            <h4>Day 5: Visiting temples and some more beaches</h4>
                            <p>
                                For our fate, it was a rainy day in Nuwara Eliya. First, we visited Ambewela in the morning before it had started raining. Then It continued to rain throughout the day. So there was no point in wandering around then having lunch at the hotel and spending our day chilling at the hotel. I must admit that the sunset at Bentota beach is one of the most wonderful sunsets have ever seen. The residents are very generous and Kind-Hearted. It is truly beautiful. The hotel in Bentota was quite small. One can look at other accommodation options. Therefore, the 5th day was absolute fun and filled with happiness only.
                            </p>
                            <!--<div class="video_block">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/v_C7OXbvuD8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>-->
                            <h4>Day 6: Goodbye Sri Lanka, We Miss You</h4>
                            <img src="img/srilankablog1-5.jpg" alt="">
                            <p>
                                This was our last day in Sri Lanka. After having a good breakfast we went to visit the Buddhist and Hindu temple in Gangaramaya. Then we also visited the Old Parliament and Old Clock Tower along with the National Museum. We refreshed and then we took some time off and relaxed in the Galle Face Green Garden. My mother and I wanted to shop some more so we went to the House of Fashion. It is a popular shop here and brings some useful items. It was finally time to bid from Sri Lanka. We reached the airport by 11 pm and boarded our flight back to our hometown at 8 am. The trip was unforgettable.<br><br><br><br>
                            </p>
                            <div class="quote">
                                <div class="quote_top">
                                    <!--<div class="photo">
                                        <img src="img/vblog1.jpg" alt="">
                                    </div>-->
                                    <div class="text">
                                        Overall, Sri Lanka was an amazing experience for my family and I had a great opportunity to spend some quality time with my family. You can cherish these for your life long.

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