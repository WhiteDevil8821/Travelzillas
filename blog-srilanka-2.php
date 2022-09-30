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
        <div class="image_bg--single" style="background-image: url(img/srilankablog2.jpg);"></div>
        <div class="page_content single-page blog-single">
            <div class="content-head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="main">
                            <div class="title">
                                A long term dream to Srilanka | A Complete Honeymoon information
                            </div>
                            <div class="date">
                                FEBRUARY 26/2021 | HONEYMOON
                            </div>
                            <div class="description">
                                <p>
                                    "Hey!! All lovelies who are planning their honeymoon at Srilanka don't miss reading this"
                                </p>
                                <p>
                                    Islands with scenic beaches and have always been a couple of first loves. So there is no surprise or wonder that Sri Lanka is a perfect honeymoon objective in South Asia. Honeymoon in Sri Lanka is all about examining the beauty of nature. This complete honeymoon guide will help you plan the most incredible romantic holiday in the year 2021. Relaxing and relieving tension in the warm climate with the color of white sand of turquoise shores beneath your paws comprehend like heaven. The various geographies and squeezed rainforests tickle and revitalize the scent of love and affection nature give us!!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="details">
                            <div class="_title">
                                
                            </div>
                            <div class="text">
                                <p>
                                    Don't just stop but there is a lot more to expose Sri Lanka. From exotic stays to tantalizing panoramas to inviting moments, realize everything that you require before packing your bags and setting off. All people marry and the need for quiet environments to commemorate the honeymoon becomes a prerogative. To experience something beautiful and immaculate, come to Sri Lanka you can have a prominent honeymoon destination in Asia. The quiet shores brimming with turquoise water, those beautiful inns with several tourists, those different setups are everything a honeymoon couple can dream of. Courtship resides in Sri Lanka’s diverse landscapes, sea-facing pools, a stimulating cup of chai made from handpicked leaves. It confuses every honeymooner and leaves them thrilled.
                                </p>
                            </div>
                        </div>
                        <div class="page--content">
                            <img src="img/srilankablog2-1.jpg" alt="">
                            <h3>Weather In Sri Lanka</h3>
                            <p>
                                The climate of Sri Lanka gives rise to the hit of lovebirds. It has uniform weather conditions with periodic and soft sea waves that are across the country throughout the year and puts it at the top of every newly married partner's list for a honeymoon in Asia.<br><br>The coastal region of Sri Lanka experiences about 25 – 30 degrees Celsius temperature around the year.
                            </p>
                            <p>
                                <b>The best period for going to Sri Lanka for honeymoon:</b> December to April<br><br>
                                <b>Travel Guide:</b> Here are some other things that we have mentioned in the Sri Lanka honeymoon trip guide for traveler’s sake. The best direction to enter Sri Lanka is through airways. The Colombo International Airport is connected along with major cities in India all across the world.<br>
                                <b>Excellent duration:</b> Duration can be around 5 nights and 6 days.<br>
                                <b>All-around Package:</b>  On normal Sri Lanka honeymoon packages will amount to Rs. 90k and also more.<br> 
                                <b>Airfare amount:</b> Rs. 22,267 and more.<br>
                                <b>Package through the land:</b> Rs.30,000 and more
                            </p>
                            <h3>Best Places To Visit in Srilanka</h3>
                            <p>The palm-rimmed coasts along with the shades of azure and wear away make the heartwarming spectacle at romantic beaches and also shelters of Sri Lanka. Then also curled up this picture-perfect essence these places pep up the courtship by the virtue of their location. Showing nature’s magnificence with all those hills and the tea plantations through pristine beaches in Sri Lanka makes for the perfect hideout with your spouse.
                                <ul>
                                    <li>Ella: Rejuvenate In The Lap Of Nature</li>
                                    <li>Nuwara Eliya: Little England</li>
                                    <li>Mirissa: For Tranquility & Beachy Vibes</li>
                                    <li>Trincomalee: Pristine White Beaches</li>
                                </ul>
                            </p>
                            <img src="img/srilankablog2-2.jpg" alt="">
                            <h5>1. Ella: Rejuvenate</h5>
                            <p>
                               The beautiful nature and its surroundings at Srilanka is the perfect place for honeymoon couples where they can cool and restore all the happy moments. A personal hideout in the hills, the Ella also has tea plantations with jungle awnings cascades which makes it one of the most exciting places to see. So Visit these exciting places in Ella with your better half and you will have full enjoyment.
                            </p>
                            <h5>2. Nuwara Eliya: Little England</h5>
                            <p>
                                This is called ‘Little England’, Nuwara Eliya is realized for its wonderful cliffs and sociable. If you are both a couple who loves the sticks and being close to nature then this is ideally one of the best places in Sri Lanka for a honeymoon. Also with rolling hills and fresh tea gardens is pleasant and offer privacy and seclusion. You can do journeying and hiking are some of the activities you can try here and you can also try.
                            </p>
                            <h5>3. Mirissa: For Tranquillity & Beachy Vibes</h5>
                            <p>
                                At Mirissa the golden sand beaches are banded with palm trees. It is located on the southern coast of Sri Lanka and Mirissa is called the whale capital of Sri Lanka and you see whales near the shorelines. We all can also take boat tours and the beautiful bars in Mirissa that look perfect for those who adore making merry and if you are an adventure-loving couple then scuba jumping in Mirissa is a mandatory one. The fireworks display is extraordinary and will add to the occasion.
                            </p>
                            <h5>4. Trincomalee: Pristine White Beaches</h5>
                            <p>
                                So you are still in doubt about Sri Lanka as a honeymoon destination? Then you can resolve by sitting on one of the finest natural harbors and Trincomalee exists home to serene white beaches and turquoise ocean which are perfect for taking a stroll with your sweetheart and you can watch the dolphin show. The iconic city is not old but ancient and it adds to the experience is the weather which is great around the year here.
                            </p>
                            <img src="img/srilankablog2-3.jpg" alt="">
                            <h3>Here are all the Romantic Things To Do at Andaman</h3>
                            <p>
                                If you guessed that visiting the romantic places in Sri Lanka would be enough then your assumption is wrong. This Sri Lanka honeymoon guide will give you the best fun ideas to have a gust on your honeymoon.
                                <ul>
                                    <li>Kalpitiya: Dolphin Watching</li>
                                    <li>Mirissa: Sunset Watching</li>
                                    <li>Ella: Visit Tea Plantations</li>
                                    <li>Mahaweli River: Take Ferry Rides</li>
                                    <li>Coastal Beaches: Beach Hopping</li>
                                </ul>
                            </p>
                            <h5>1. Kalpitiya: Dolphin Watching</h5>
                            <p>
                                Sri Lanka relates the heartwarming view of dolphins playing over. You can have a watch at them hopping around at their playful best is one of the best romantic actions for all couples in Sri Lanka. Some dolphins like Bottlenose and Indo-Pacific Humpback Dolphins are spotty playing over in the Kalpitiya region.<br>
                                <b>Located at:</b> Kalpitiya, North Western province of Sri Lanka
                                <b>Best time to visit:</b> November – March
                            </p>
                            <h5>2. Mirissa: Sunset Watching</h5>
                            <p>
                                At Mirissa there are more spending private moments with your spouse by taking a long stride in the white grain and slipping into the sands and letting you get happy. So have a watch the sun decline as it leaves the whole sky flower. It offers you a spectacular view of the sunset, another of the romantic honeymoon experiences in Sri Lanka.
                            </p>
                            <h5>3. Ella: Visit Tea Plantations</h5>
                            <p>
                                You can take a walk through the plantations at Ella which is a town in the Badulla District that is 200 km. This place boasts magnificent vistas of lush green tea farms and shoots into the clouds. A height of 3500 ft it is a quiet place folded into the mountains on the island.
                            </p>
                            <h3>List of beaches at Andaman to relax with your partner</h3>
                            <ul>
                                <li>Unawatuna – It is a lazy atmosphere and it has brimming throng which makes it one of the most perfect waterfronts in Sri Lanka.</li>
                                <li>Arugam Bay –This is popular for surfing and simple elegance which this one of the tailor-made for honeymoon couples</li>
                                <li>Mirissa – This is also the vastly picture-perfect beach in Sri Lanka.</li>
                                <li>Bentota – This is starting from the west coast and the waterfront operates south. It has a lot of shops and prominent inns in Sri Lanka.</li>
                                <li>Uppuveli – It is sleepy and secluded heaven on the coast of Sri Lanka.</li>
                            </ul>
                            <img src="img/srilankablog2-4.jpg" alt="">
                            <h3>Here are the best 3 Resorts For Honeymoon</h3>
                            <p>
                                The Luxury villas and hotels of Sri Lanka make for an outstanding charm for all the lovely couples for their honeymoon. So come on the scheme a stay in these beautiful residences that brim with luxury and splendor and have all access that a newly matrimonial couple notions.
                            </p>
                            <h5>1. Club Hotel Dolphin</h5>
                            <p>
                                Club Hotel Dolphin is one of the best places to celebrate a tranquil stay on your honeymoon in Sri Lanka. The place is only 12 miles away from the airport and requests easy access to the beach. Then you can head to the beach any period you want. Their calm hospitality and experienced service will impress you. It is one of the nicest places to relax on your low waterfront holiday.<br>
                                <b>Location:</b> Kamala South, Waikkal, Negombo<br>
                                <b>Place of Stay:</b> Villa Sea View Room<br>
                                <b>Price:</b> INR 13300 per night onwards
                            </p>
                            <h5>2. Cinnamon Bey</h5>
                            <p>
                                Cinnamon Bey which is in Bentota is an ideal withdrawal for honeymooners and families where they can relax in the beautiful surroundings of nature. This hotel features spacious bedrooms with all the modern capabilities one looks for. There is also an outside pool and six in all house restaurants. You see a mini-bar where you can enjoy a beverage or two in the evening.<br>
                                <b>Location:</b> Moragolla, Beruwala<br>
                                <b>A place to Stay:</b> Superior rooms<br>
                                <b>Price:</b> INR 11600 per night onward
                            </p>
                            <img src="img/srilankablog2-5.jpg" alt="">
                            <!--<div class="video_block">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/v_C7OXbvuD8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>-->
                            <h5>3. Heritage Negombo</h5>
                            <p>
                                One of the best hotels to stay in Sri Lanka on your honeymoon this Heritage will give you exhilarating views of the beach and hospitality. The place has an outside corner encountering the ocean where you lie back on the beach seat and enjoy drinking a pina colada. The rooms are spacious and competent with all the modern capabilities.<br>
                                <b>Location:</b> 175 Lewis Place, Negombo<br>
                                <b>Best place to Stay:</b> Deluxe King<br>
                                <b>Price:</b> INR 10000 per night onwards<br><br>
                            </p>
                            <div class="quote">
                                <div class="quote_top">
                                    <!--<div class="photo">
                                        <img src="img/vblog1.jpg" alt="">
                                    </div>-->
                                    <div class="text">
                                        We hope that you have got a vast idea of spending your honeymoon in Srilanka, so have a great time with your partner, don't forget to thank us!!
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
                                <a href="blog-maldives-2.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/maldivesblog2.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | HONEYMOON
                                    </div>
                                    <div class="blog_item_title">
                                        HONEYMOON TRIP TO MALDIVES | BLOG
                                    </div>
                                    <!--<div class="blog_item_text">
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    </div>-->
                                </a>
                                <a href="blog-andaman-1.php" class="blog_item">
                                    <div class="blog_item_img">
                                        <img src="img/andamanblog1.jpg" alt="">
                                    </div>
                                    <div class="blog_item_date">
                                        FEBRUARY 26/2021 | FRIENDS & FAMILY
                                    </div>
                                    <div class="blog_item_title">
                                        A Memorable Trip With Friends To Andaman
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