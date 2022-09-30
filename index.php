<?php
require("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travelzillas – Creating Memories</title>
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
    
    <style>
        html, body {
        height: 100%;
        }

        .carousel-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FFFFFF;
        background-image: linear-gradient(#FFFFFF 50%, #FFFFFF 50%, #F0F3FC 50%);
        box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);
        overflow: hidden;
        }
        .carousel-wrapper .carousel {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        height: auto;
        }
        .carousel-wrapper .carousel .carousel-cell {
        padding: 10px;
        background-color: #FFFFFF;
        width: 20%;
        height: auto;
        min-width: 120px;
        margin: 0 20px;
        transition: transform 500ms ease;
        }
        .carousel-wrapper .carousel .carousel-cell .more {
        display: block;
        opacity: 0;
        margin: 5px 0 15px 0;
        text-align: center;
        font-size: 10px;
        color: #CFCFCF;
        text-decoration: none;
        transition: opacity 300ms ease;
        }
        .carousel-wrapper .carousel .carousel-cell .more:hover, .carousel-wrapper .carousel .carousel-cell .more:active, .carousel-wrapper .carousel .carousel-cell .more:visited, .carousel-wrapper .carousel .carousel-cell .more:focus {
        color: #CFCFCF;
        text-decoration: none;
        }
        .carousel-wrapper .carousel .carousel-cell .line {
        position: absolute;
        width: 2px;
        height: 0;
        background-color: black;
        left: 50%;
        margin: 5px 0 0 -1px;
        transition: height 300ms ease;
        display: block;
        }
        .carousel-wrapper .carousel .carousel-cell .price {
        position: absolute;
        font-weight: 700;
        margin: 45px auto 0 auto;
        left: 50%;
        transform: translate(-50%);
        opacity: 0;
        transition: opacity 300ms ease 300ms;
        }
        .carousel-wrapper .carousel .carousel-cell .price sup {
        top: 2px;
        position: absolute;
        }
        .carousel-wrapper .carousel .carousel-cell.is-selected {
        transform: scale(1.2);
        }
        .carousel-wrapper .carousel .carousel-cell.is-selected .line {
        height: 35px;
        }
        .carousel-wrapper .carousel .carousel-cell.is-selected .price, .carousel-wrapper .carousel .carousel-cell.is-selected .more {
        opacity: 1;
        }
        .carousel-wrapper .flickity-page-dots {
        display: none;
        }
        .carousel-wrapper .flickity-viewport, .carousel-wrapper .flickity-slider {
        overflow: visible;
        }
    </style>


    
</head>

<body>
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->    
    <link rel="stylesheet" href="flickity.min.css">
    <script src="flickity.pkgd.min.js"></script>
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






    
 <!--   <div>
  <?php if (isset($_SESSION['uname'])) : ?> 
			<p> 
			<font color="yellow">	Welcome </font>
				<strong> <font color="yellow">
					<?php echo $_SESSION['uname']; ?> </font>
				</strong> 
			</p> 
				<?php endif ?> 
</div>-->

 
 
                    <div class="header__bottom">
                        <a href="#" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
                        <div class="menu" id="js-menu">
                            <div class="close"></div>
                            <div class="scroll">
                                <a class="current">Home</a>
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
                                            <a href="blog-list.php">
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
        <div class="homepage_slider">
            <div class="slider-container">
                <div class="slider-control left inactive"></div>
                <div class="slider-control right"></div>
                <ul class="slider-pagi"></ul>
                <div class="slider">
                    <div class="slide slide-0 active">
                        <div class="slide__bg" style="background-image: url(img/slide1.jpg);"></div>
                        <div class="slide__content">
                            <div class="slide__text">
                                <h2 class="slide__text-heading">Andaman</h2>
                                <p class="slide__text-desc">
                                    Come and book your trip to India's Cleanest Beach & Island
                                </p>
                                <div class="slide__controls">
                                    <a href="single.php" class="btn">Want a personal tour</a>
                                    <a href="tour-list.php" class="btn btn__choose_tour">Choose tour</a>
                                    <a class="arrow next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-1 ">
                        <div class="slide__bg" style="background-image: url(img/slide2.jpg);"></div>
                        <div class="slide__content">
                            <div class="slide__text">
                                <h2 class="slide__text-heading">Dubai</h2>
                                <p class="slide__text-desc">We welcome you to the Royal Place</p>
                                <div class="slide__controls">
                                    <a href="single.php" class="btn">Want a personal tour</a>
                                    <a href="tour-list.php" class="btn btn__choose_tour">Choose tour</a>
                                    <a class="arrow next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-2">
                        <div class="slide__bg" style="background-image: url(img/slide3.jpg);"></div>
                        <div class="slide__content">
                            <div class="slide__text">
                                <h2 class="slide__text-heading">Maldives</h2>
                                <p class="slide__text-desc">Book an exotic trip to the Maldives this Summer</p>
                                <div class="slide__controls">
                                    <a href="single.php" class="btn">Want a personal tour</a>
                                    <a href="tour-list.php" class="btn btn__choose_tour">Choose tour</a>
                                    <a class="arrow next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-3">
                        <div class="slide__bg" style="background-image: url(img/slide5.jpg);"></div>
                        <div class="slide__content">
                            <div class="slide__text">
                                <h2 class="slide__text-heading">Andaman</h2>
                                <p class="slide__text-desc">Come and book your trip to India's Cleanest Beach & Island</p>
                                <div class="slide__controls">
                                    <a href="single.php" class="btn">Want a personal tour</a>
                                    <a href="tour-list.php" class="btn btn__choose_tour">Choose tour</a>
                                    <a class="arrow next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most_popular">
                <span>
                    The most popular destination this year - Maldives
                </span>
            </div>
            <div class="categories" id="header_categories">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="items">
                            <div class="scroll">
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap1.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Honeymoon / Romantic</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap2.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Family</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap3.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Friends / Group</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap4.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Adventure / Trek</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap5.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Solo</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap6.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Religious</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap7.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Wildlife</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap8.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Cruise</span></div>
                                </a>
                                <a href="single.php" class="categories_item">
                                    <div class="icon">
                                        <div class="icon-wrap">
                                            <img src="img/nap9.jpg" alt="" class="image-cover">
                                        </div>
                                    </div>
                                    <div class="_title"><span>Activites</span></div>
                                </a>
                            </div>

                        </div>
                        <div class="other_items" id="header_other_items">
                            <div class="categories_item item">
                                <div class="icon">
                                    <div class="arrow"></div>
                                </div>
                                <div class="_title">
                                    See more 4 directions
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="search_tour">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="search_tour_form">
                        <h2 class="section_subtitle">
                            SEARCH TOUR
                        </h2>
                        <p class="section_title">
                            Ready to rest? We are ready to help with the search
                        </p>
                        <div class="fields__block">
                            <div class="fields">
                                <div class="field">
                                    <div class="label">Keywords</div>
                                    <div class="field_wrap keywords">
                                        <input type="text" class="input">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Activity</div>
                                    <div class="field_wrap select_field">
                                        <select name="tour-activity">
                                            <option value="">Any</option>
                                            <option value="city-tours">City Tours</option>
                                            <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                            <option value="family-friendly-tours">Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                            <option value="outdoor-activites">Outdoor Activites</option>
                                            <option value="relaxation-tours">Relaxation Tours</option>
                                            <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Destination</div>
                                    <div class="field_wrap select_field">
                                        <select name="tour-activity">
                                            <option value="">Any</option>
                                            <option value="city-tours">City Tours</option>
                                            <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                            <option value="family-friendly-tours">Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                            <option value="outdoor-activites">Outdoor Activites</option>
                                            <option value="relaxation-tours">Relaxation Tours</option>
                                            <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Duration</div>
                                    <div class="field_wrap select_field">
                                        <select name="tour-activity">
                                            <option value="">Any</option>
                                            <option value="city-tours">City Tours</option>
                                            <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                            <option value="family-friendly-tours">Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                            <option value="outdoor-activites">Outdoor Activites</option>
                                            <option value="relaxation-tours">Relaxation Tours</option>
                                            <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Date</div>
                                    <div class="field_wrap calendar_field">
                                        <input type="text" class="calendar js_calendar">
                                    </div>
                                </div>
                            </div>
                            <button class="submit"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="most_popular__section mainpage-slider">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="top_part">
                        <div class="top_part_left">
                            <p class="section_subtitle">POPULARLY</p>
                            <h2 class="section_title">
                                Most popular <br> holiday destinations
                            </h2>
                        </div>
                        <div class="top_part_right">
                            <a href="tour-list.php" class="btn">
                                <span>View all tours</span>
                            </a>
                            <div class="controls" id="most_popular__arrows">
                                <div class="arrow prev"></div>
                                <div class="arrow next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="most_popular__section__slider" id="most_popular__slider">
                        <a href="single.php" class="slider_item" style="background-image: url(img/uttra1.jpg)">
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
                                        (20 Reviews)
                                    </div>
                                </div>
                                <h3 class="title">
                                    Uttrakhand Vibes | ₹ 24,999
                                </h3>
                                <p class="description">
                                    6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                </p>
                                <div class="days">
                                    <span>5 days & 4 Nights</span>
                                </div>
                            </div>
                        </a>

                        <a href="single.php" class="slider_item" style="background-image: url(img/maldives1.jpg)">
                            <div class="slider_item__tags">
                                <div class="tag discount">20% off</div>
                            </div>
                            <div class="slider_item__content">
                                <h3 class="title">
                                    A tour to Maldives | $3,500 $3,880
                                </h3>
                                <p class="description">
                                    6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                </p>
                                <div class="days">
                                    <span>23 days</span>
                                </div>
                            </div>
                        </a>

                        <a href="single.php" class="slider_item" style="background-image: url(img/prevput3.jpg)">
                            <div class="slider_item__tags">
                                <div class="tag discount">20% off</div>
                            </div>
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
                                        (25 Reviews)
                                    </div>
                                </div>
                                <h3 class="title">
                                    Seychelles | from $300
                                </h3>
                                <p class="description">
                                    6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                </p>
                                <div class="days">
                                    <span>7 days</span>
                                </div>
                            </div>
                        </a>
                        <a href="single.php" class="slider_item" style="background-image: url(img/prevput4.jpg)">
                            <div class="slider_item__tags">
                                <div class="tag discount">20% off</div>
                            </div>
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
                                <h3 class="title">
                                    Autumn in Japan | $3,500 $3,880
                                </h3>
                                <p class="description">
                                    6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                </p>
                                <div class="days">
                                    <span>7 days</span>
                                </div>
                            </div>
                        </a>
                        <a href="single.php" class="slider_item" style="background-image: url(img/prevput5.jpg)">
                            <div class="slider_item__tags">
                                <div class="tag discount">20% off</div>
                                <div class="tag new">New</div>
                            </div>
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
                                <h3 class="title">
                                    A tour of the Islands | $3,500 $3,880
                                </h3>
                                <p class="description">
                                    6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                </p>
                                <div class="days">
                                    <span>7 days</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="item">
                        <div class="item_img">
                            <img src="img/home3.jpg" alt="">
                        </div>
                        <div class="tc">
                            <h3 class="item_title">Any route</h3>
                            <p class="item_text">
                                We will help you to make any route for travel
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_img">
                            <img src="img/home1.jpg" alt="">
                        </div>
                        <div class="tc">
                            <h3 class="item_title">Your dream</h3>
                            <p class="item_text">
                                Your dreams of an unforgettable journey can come true with us
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_img">
                            <img src="img/home2.jpg" alt="">
                        </div>
                        <div class="tc">
                            <h3 class="item_title">Our guarantee</h3>
                            <p class="item_text">
                                We guarantee you an unforgettable journey and a lot of impressions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="search_tour">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="search_tour_form">
                        <h2 class="section_subtitle">
                            SEARCH TOUR
                        </h2>
                        <p class="section_title">
                            Ready to rest? We are ready to help with the search
                        </p>
                        <div class="fields__block">
                            <div class="fields">
                                <div class="field">
                                    <div class="label">Keywords</div>
                                    <div class="field_wrap keywords">
                                        <input type="text" class="input">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Activity</div>
                                    <div class="field_wrap select_field">
                                        <select name="tour-activity">
                                            <option value="">Any</option>
                                            <option value="city-tours">City Tours</option>
                                            <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                            <option value="family-friendly-tours">Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                            <option value="outdoor-activites">Outdoor Activites</option>
                                            <option value="relaxation-tours">Relaxation Tours</option>
                                            <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Destination</div>
                                    <div class="field_wrap select_field">
                                        <select name="tour-activity">
                                            <option value="">Any</option>
                                            <option value="city-tours">City Tours</option>
                                            <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                            <option value="family-friendly-tours">Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                            <option value="outdoor-activites">Outdoor Activites</option>
                                            <option value="relaxation-tours">Relaxation Tours</option>
                                            <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Duration</div>
                                    <div class="field_wrap select_field">
                                        <select name="tour-activity">
                                            <option value="">Any</option>
                                            <option value="city-tours">City Tours</option>
                                            <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                            <option value="family-friendly-tours">Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                            <option value="outdoor-activites">Outdoor Activites</option>
                                            <option value="relaxation-tours">Relaxation Tours</option>
                                            <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Date</div>
                                    <div class="field_wrap calendar_field">
                                        <input type="text" class="calendar js_calendar">
                                    </div>
                                </div>
                            </div>
                            <button class="submit"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="popular_destination__section mainpage-slider">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="top_part">
                        <div class="top_part_left">
                            <div class="section_subtitle">
                                TRUE NOW
                            </div>
                            <h2 class="section_title">
                                Popular Destinations
                            </h2>
                        </div>
                        <div class="top_part_right">
                            <a href="destinations.php" class="btn">
                                <span>View all destinations</span>
                            </a>
                            <div class="controls" id="popular_destination__arrows">
                                <div class="arrow prev"></div>
                                <div class="arrow next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section_content">
                        <div class="popular_destination__slider" id="popular_destination__slider">
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap3.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/turkey.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        Turkey
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap2.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/egypt-3.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        Egypt
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap4.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/brazil-3.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        Brazil
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap5.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/cyprus-3.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        Cyprus
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap1.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/usa.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        America
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap9.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/russia.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        Russia
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_item">
                                <a href="single.php" class="slide_item_img">
                                    <div class="sq_parent">
                                        <div class="sq_wrap">
                                            <div class="sq_content" style="background-image: url(img/prevnap6.jpg)"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="single.php" class="slide_item_content">
                                    <div class="flag">
                                        <img src="img/eng.svg" alt="">
                                    </div>
                                    <h3 class="slide_title">
                                        England
                                    </h3>
                                    <p class="slide_text">
                                        Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                    </p>
                                </a>
                                <div class="slide_footer">
                                    <div class="hours">15 tours</div>
                                    <div class="tours_link">
                                        <a href="tour-list.php">View all tours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_destination mainpage-slider">
            <div class="section_heading">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="section_subtitle">
                            TOP DESTINATIONS
                        </div>
                        <h2 class="section_title">
                            Travelzillas - Tour Operator
                        </h2>
                        <div class="description">
                            <div class="left">
                                <p class="text">
                                    TravelZillas provides some of the best India tour packages and International tour packages. We are passionate about travel and strive to offer experiences that matter.
                                </p>
                            </div>
                            <!--<div class="right">
                                <p class="text">
                                    Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                                </p>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_content popular_destination__content">
                <div class="wrap">
                    <div class="wrap_float">
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour1.jpg)"></div>
                                    <span>Rajasthan</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour2.jpg)"></div>
                                    <span>Kashmir</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour3.jpg)"></div>
                                    <span>Ladakh</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour4.jpg)"></div>
                                    <span>Manali</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour5.jpg)"></div>
                                    <span>Kerela</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour6.jpg)"></div>
                                    <span>Maldives</span>
                                </div>d
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour7.jpg)"></div>
                                    <span>Arunachal</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour8.jpg)"></div>
                                    <span>Andaman</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour9.jpg)"></div>
                                    <span>Sikkim</span>
                                </div>
                            </div>
                        </a>
                        <a href="tour-list.php" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url(img/tour10.jpg)"></div>
                                    <span>Spiti</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-wrapper">
          <h3 style="font-size: 2.6rem; padding-top: 30px; padding-left: 80px;"><b>Promotional Offer</b></h3>
          <div class="carousel" data-flickity>
            <div class="carousel-cell">
              <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 1</h3>
              <a class="more" href="">Explore more</a>-->
              <img src="img/Promo1.jpg" style="max-width: 250px; height: 250px; display: block;"/>
              <!--<div class="line"></div>
              <div class="price">
                <span>225<sup>€</sup></span>
              </div>-->
            </div>
            <div class="carousel-cell">
              <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 2</h3>
              <a class="more" href="">Explore more</a>-->
              <img src="img/Promo2.jpg" style="max-width: 250px; height: 250px; display: block;"/>
              <!--<div class="line"></div>
              <div class="price">
                <span>225<sup>€</sup></span>
              </div>-->
            </div>
            <div class="carousel-cell">
              <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 3</h3>
              <a class="more" href="">Explore more</a>-->
              <img src="img/Promo3.jpg" style="max-width: 250px; height: 250px; display: block;"/>
              <!--<div class="line"></div>
              <div class="price">
                <span>225<sup>€</sup></span>
              </div>-->
            </div>
            <div class="carousel-cell">
                <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 1</h3>
                <a class="more" href="">Explore more</a>-->
                <img src="img/Promo4.jpg" style="max-width: 250px; height: 250px; display: block;"/>
                <!--<div class="line"></div>
                <div class="price">
                  <span>225<sup>€</sup></span>
                </div>-->
              </div>
              <div class="carousel-cell">
                <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 1</h3>
                <a class="more" href="">Explore more</a>-->
                <img src="img/Promo5.jpg" style="max-width: 250px; height: 250px; display: block;"/>
                <!--<div class="line"></div>
                <div class="price">
                  <span>225<sup>€</sup></span>
                </div>-->
              </div>
              <div class="carousel-cell">
                <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 1</h3>
                <a class="more" href="">Explore more</a>-->
                <img src="img/Promo6.jpg" style="max-width: 250px; height: 250px; display: block;"/>
                <!--<div class="line"></div>
                <div class="price">
                  <span>225<sup>€</sup></span>
                </div>-->
              </div>
              <div class="carousel-cell">
                <!--<h3 style="text-align: center; font-weight: 400; margin-bottom: 0;">Product 1</h3>
                <a class="more" href="">Explore more</a>-->
                <img src="img/Promo7.jpg" style="max-width: 250px; height: 250px; display: block;"/>
                <!--<div class="line"></div>
                <div class="price">
                  <span>225<sup>€</sup></span>
                </div>-->
              </div>
          </div>
        </div>
        <!--<div class="discount_section" style="background-image: url(img/ldweb1.jpg)">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="section_content">
                        <div class="tag">SALE</div>
                        <h2 class="section_title">Discount <span class="discount_tag">20% off</span> </h2>
                        <p class="text">
                            Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        </p>
                        <div class="buttons">
                            <a href="tour-list.php" class="btn">See promotion tours</a>
                            <a href="tour-list.php" class="btn btn__choose_tour">Choose tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <div class="container">
        <div class="blog blog-section last-section" style="background-image: url(img/home4.jpg);">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="top_part">
                        <div class="section_subtitle">
                            BLOG
                        </div>
                        <h2 class="section_title">
                            Travel articles
                        </h2>
                        <!--<div class="section_description">
                            Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                        </div>-->
                    </div>
                    <div class="section_content">
                        <a href="blog-andaman-1.php" class="blog_item">
                            <div class="blog_item_img">
                                <img src="img/andamanblog1.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                FEBRUARY 26/2021 | FRIENDS
                            </div>
                            <h4 class="blog_item_title">
                                A Memorable Trip With Friends To Andaman
                            </h4>
                            <!--<p class="blog_item_text">
                                A wonderful and memorable trip to Andaman with friends and family, have a perfect extended break and spend a beautiful time with your loved ones.
                            </p>-->
                        </a>
                        <a href="blog-kerala-1.php" class="blog_item">
                            <div class="blog_item_img">
                                <img src="img/keralablog1.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                FEBRUARY 26/2021 | HONEYMOON
                            </div>
                            <h4 class="blog_item_title">
                                A complete package to celebrate Honeymoon | Kerala days
                            </h4>
                            <!--<p class="blog_item_text">
                                A hassle-free and fun-filled honeymoon that will remain with you long after you get back into the hustle and bustle of everyday life.
                            </p>-->
                        </a>
                        <a href="blog-sikkim-1.php" class="blog_item">
                            <div class="blog_item_img">
                                <img src="img/sikkimblog1.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                FEBRUARY 26/2021 | FAMILY
                            </div>
                            <h4 class="blog_item_title">
                                My Kinda Family Trip to Sikkim | A Perfect place to visit
                            </h4>
                            <!--<p class="blog_item_text">
                                Spending time with your family in such a gorgeous place is a blessing. Have a fully memorable time with your family.
                            </p>-->
                        </a>
                        <a href="blog-andaman-2.php" class="blog_item">
                            <div class="blog_item_img">
                                <img src="img/andamanblog2.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                FEBRUARY 26/2021 | HONEYMOON
                            </div>
                            <h4 class="blog_item_title">
                                Honeymoon In Andaman and Nicobar Islands
                            </h4>
                            <!--<p class="blog_item_text">
                                Spending time with your family in such a gorgeous place is a blessing. Have a fully memorable time with your family.
                            </p>-->
                        </a>
                        <a href="blog-srilanka-1.php" class="blog_item">
                            <div class="blog_item_img">
                                <img src="img/srilankablog1.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                FEBRUARY 26/2021 | FAMILY
                            </div>
                            <h4 class="blog_item_title">
                                Sri Lanka trip with my whole family | Own experience
                            </h4>
                            <!--<p class="blog_item_text">
                                Spending time with your family in such a gorgeous place is a blessing. Have a fully memorable time with your family.
                            </p>-->
                        </a>
                        <a href="blog-maldives-1.php" class="blog_item">
                            <div class="blog_item_img">
                                <img src="img/maldivesblog1.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                FEBRUARY 26/2021 | FAMILY
                            </div>
                            <h4 class="blog_item_title">
                                Interesting facts on Maldives | Reasons to travel on a visit to the Maldives
                            </h4>
                            <!--<p class="blog_item_text">
                                Spending time with your family in such a gorgeous place is a blessing. Have a fully memorable time with your family.
                            </p>-->
                        </a>
                    </div>
                    <div class="show-more">
                        <a href="blog-list-2.php" class="btn">
                            <span>View all articles</span>
                        </a>
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
                                <p>Email: <a href="mailto:info@travelzillas.com">info@travelzillas.com</a></p>
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