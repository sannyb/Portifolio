<?php

require_once "config_mogolo.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>WebAll Technologies</title>
           
            <link type="text/css"  rel="stylesheet" href="fonts/css/all.css"/>
            <link type="text/css"  rel="stylesheet" href="fonts/css/brands.css"/>
            <link type="text/css"  rel="stylesheet" href="fonts/css/solid.css"/>
            <link type="text/css"  rel="stylesheet" href="font/css/font-awesome.css"/>


            <link href="css/phone.css" rel="stylesheet" type ="text/css" />
            <link rel="shortcut icon" href="img/weball.PNG"/>
            <link href="css/desktop.css" rel="stylesheet" type ="text/css" />
            <link href="css/tablet.css" rel="stylesheet" type="text/css"  />
            <link href="css/weball.css" rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
           
                         

            <meta name="theme-color" content="black">
            <meta name="description" name="WebAll Technologies official website">

            <meta name="keywords" content="Weball Technologies,weball, Web development,Digital agency company in SA"/>
            <meta name="google-site-verification" content="AdJFP1RxAG3xncYa1WmnNB48V9-Otw42yzTsIdOVjN8" />
            <meta http-equiv="refresh" content="300"/>
            <meta name="author" content="Belmiro Mohlala"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			
			      <script  src="js/jquery-3.5.1.min.js" ></script>
            <script  src="js/portifolio.js" ></script>
            <script src="js/swiped-events.js" ></script>
           
          
			
			
            

</head>

<body  onload="portfolio()" onscroll="animate()">

<div class="menu-drop-down">
<div class="menu-cancel"> &times; </div>
<div class="search"><select id="search" name="categories"><option value="all">All</option> <option value="Hosting">Hosting</option> <option value="Design">Website</option> <option value="maintainance">Maintainance</option></select>
<input type="text" name="search_value" id="search_value" placeholder="search our site" /><i class="fa fa-search"></i> </div>
<hr>
<div class="menu-content"> <div class="menu-icon"><i class="fa fa-home"></i></div><div class="manu_link"><a href="#header">Home</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon"><i class="fa fa-book"></i></div><div class="manu_link"><a  href="#about">About Us</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon">  <i class="fa fa-users"></i></div><div class="manu_link"><a  href="#projects1">Projects</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon"> <i class="fa fa-phone"></i></div><div class="manu_link"><a  href="#sendmessage"> Contact</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon"> <i class="fa fa-cogs"></i></div><div class="manu_link"><a  href="#services" >Services</a></div></div>
<hr>

</div>
<!--Start of loader-->
<div class="loading" id="loading">
  <div class="loader">LOADING...</div>
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="left"></div>
  <div class="right"></div>
  <img src="img/loader.jpg" alt="loader">
  </div>
<!--End of loader-->


<div id="all-content" style="display:none;" >
  <div class="d_menu_border">
     <div class="tablet_hide phone_hide d_menu" ><a href="#services" >SERVICES</a> <span>|</span> 
       <a href="#projects1" >PROJECTS</a> <span>|</span><a href="#sendmessage">CONTACT US</a><span>|</span><a href="#about" >ABOUT US</a>
     </div>
   </div>
<div class="get_us"> 
<a href="mailto:info@weball.co.za">info@weball.co.za</a>
<a href="#phone" class="phone_hide"> +27 (0)728108533</a>
</div>

<div class="linear-border">
  <div class="dev_login">
       <a href="#" id="click_me">Developer login</a>
  </div>
</div>


<div class="desktop_hide menu-bar">
  <div class="bar"> </div>
  <div class="bar"> </div>
  <div class="bar"> </div>
</div>
<div class="logo_name"> <span >Web-All Technologies </span></div>
<header class="header" id="header1">
  </header>
  <div class="whatsaap">
    <span class="notification" id="notification">1</span>
    <a href="whatsapp://send?text=Hi!&phone=+27728108533"><i class="fa fa-whatsapp" id="whatsaap"></i></a>
    </div>

<div class="container">
  <div class="logo_pic" ><div class="border_logo"><img alt="logo" src="img/logo1.jpg"> <br>
 Weball Technologies</div></div>

<div class = "coding top_color" ></div>

<div class="name" >


<br>
<?php $space ="<span class='letter' style='width:20px;'> </span>" ?>
<div class="typingname">

   <div class="typingname1"> <span class="letter">W</span><span class="letter">e</span> <span class="letter" style="width:20px;">   
         </span><span class="letter">D</span><span class="letter">e</span><span class="letter">v</span><span class="letter">e</span><span class="letter">l</span><span class="letter">o</span><span class="letter">p 
         </span><span class="letter" style="width:20px;"></span><span class="letter">& </span> <span class="letter" style="width:20px;"></span><span class="letter" style="width:20px;"></span>
          <span class="letter">D</span><span class="letter">e</span><span class="letter">s</span><span class="letter">i</span><span class="letter">g</span><span class="letter">n</span>
   </div>

   <div>
       <span class="userscore">_ </span>
   </div>

</div>

<div class="typingname">
 

   <div class="typingname1">                                                                                                                                                                                                                                                                                                                                                                
        <span class="letter">A
         </span><span class="letter">c</span><span class="letter">c</span><span class="letter">o</span><span class="letter">r</span><span class="letter">d</span><span class="letter">i</span><span class="letter">n</span>
		 <span class="letter">g</span><?php echo $space?><span class="letter">T</span><span class="letter">o</span><span class="letter" style="width:20px;"> </span><span class="letter">C</span><span class="letter">u</span><span class="letter">s</span><span class="letter">t</span><span class="letter">o</span>
		 <span class="letter">m</span><span class="letter">e</span><span class="letter">r</span><span class="letter">s</span><span class="letter" style="width:20px;"> </span><span class="letter">N</span><span class="letter">e</span><span class="letter">e</span><span class="letter">d</span><span class="letter">.</span>
   </div>

   <div>
       <span class="userscore">_ </span>
   </div>

</div>
</div>  

</div>



<div class="container"  >
  <div class = "coding top_color" ></div>
  <div class="logo_pic"><div class="border_logo"><img alt="logo" src="img/logo.jpg"> <br>
    Weball Technologies</div></div>
  
  <div class="name">
  
  
  <br>
  <!-- Second slide start-->
  <div class="typingname">
  
     <div class="typingname1"> <span class="letter">We</span><?php echo $space?><span class="letter"> are</span> <?php echo $space?><span class="letter">Te</span><span class="letter">ch</span><span class="letter">no</span><span class="letter">lo</span><span class="letter">gy</span><?php echo $space?><span class="letter">You</span><?php echo $space?><span class="letter">Ne 
           </span><span class="letter">ed</span><?php echo $space?> 
            
     </div>
  
     <div>
         <span class="userscore">_ </span>
     </div>
  
  </div>
  
  <div class="typingname">
  
     <div class="typingname1">  <span class="letter">To</span><?php echo $space?><span class="letter">Th</span><span class="letter">ri</span><span class="letter">ve</span><?php echo $space?><span class="letter">Yo</span><span class="letter">ur</span>                                                                                                                                                                                                                                                                                                                                                              
     <?php echo $space?><span class="letter">Bu
           </span><span class="letter">si</span><span class="letter">ne</span><span class="letter">ss</span><?php echo $space?> <span class="letter">.</span>
     </div>
  
     <div>
         <span class="userscore">_ </span>
     </div>
  
  </div>
  </div>  
  
  </div>
<!-- Second slide end-->

<!-- services starts-->
<section class="services_section">
 
  <h2 ><span id ="promo"> </span> <span class="cursor">i</span> </h2>
  <div class="greeting" id="logo_pic"><div class="left">Hey!</div>
  <div class="small_text">We design and develop from scratch. 
    Our team also fix bugs in existing websites, or upgrade your existing website to new  design</div>
</div>
  <h1 class="hand_font">Services </h1>
  <div class="services_package" >
    <div class="gradient-border" >
      <div class="bg-light">
        <span class="float-left">1.</span>
       Web Development
      </div>
     
    </div>
    <div class="gradient-border">
      <div class="bg-light">
        <span class="float-left">2.</span>

       App Development
      </div>
    </div>
    <div class="gradient-border">
      <div class="bg-light">
        <span class="float-left">3.</span>

       Graphic Design
      </div>
    </div>
  </div>
  <h2 class="hand_font">1. Web development Packages</h2>
  <hr style="width:50%; margin:auto;">
<div class="webdev" >
  <div class="services" id="services"  onscroll="show1()">
      <div class="services-slides">
          
        
          <div class="offset " onclick="current_slide(1)">Dynamic Web</div>
          <div  class="services-btn" onclick="current_slide(0)">Static web</div>
          <div class="offset" onclick="current_slide(2)">E-commerce</div>
      </div>
      <br class="phone_hide" >
      <br class="phone_hide">
      <br class="phone_hide">
      <!--<p  class="decoration" style="color:black; font-family:MyFont;"><strong>OUR AIM IS TO HELP AMBITOUS BUSINESS MAKE MORE 
        PROFIT BY BUILDING ONLINE PRESENCE, MANAGING WEB TRAFIC AND CONNECTING WITH CUSTOMERS 24/7 ONLINE</strong></p>-->
        <div class="scroll"><img src="img/scroll.PNG" alt="scrolling"></div>
        
       
      <h3>Website Packages:</h3>
      <p><strong style="color:black">1.Static Websites</strong></p>
      <p> All static sites have no databases, dynamic pages can be added with additional cost.
      </p>
      <p>No <strong style="color:rgb(207, 64, 64)"> Hosting Package. </strong></p>
      <div class="first_services">
      
     
    <div class="packages" id="swiping1">

      <div class="package first_card" >
        <div class="package_header">Starter Package</div>
        <div class="price">From $50 </div>
        
        <div class="package_body">
          <ol>
          <li>1-5 static pages</li>
          <li>Free SSL certificate</li> 
          <li>Resposinve Design</li> 
          <li>Free Domain</li>
          <li>1 professional email</li>
          </ol>
      </div>
      <p> Additional of $4/pm for maintenance</p>

        <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
        </div>

        <div class="package first_card" id="outofview2">
          <div class="package_header"><i class="fa fa-star"></i>Starter Package Pro </div>
          <div class="price">From $80 </div>
         
          <div class="package_body">
            <ol>
            <li>1-10 static pages</li>
            <li>Free SSL certificate</li> 
            <li>Resposinve Design</li> 
            <li>Free Domain</li>
            <li>2 professional emails</li>
            </ol>
        </div>
        <p> Additional of $4/pm for maintenance</p>
        <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
          </div>
         
      </div>
   

        </div>
        <p>For more infomation regarding this package contact us here </p>
        <p><i class="fa fa-arrow-down"></i> </p>
        <a  class="button" href="#contact">Contact us</a>





      <p style="color:rgb(245, 183, 12)"> All our projects are completed within 30 days from effective day</p>
      </div>
  <div class="btn-left" onclick="slide_change(-1)"><i class="fa fa-angle-left"></i></div><div class="btn-right" onclick="slide_change(1)"><i class="fa fa-angle-right"></i></div>
</div>
<div class="webdev" >

<div class="services" onscroll="show1()">
    <div class="services-slides">
        
       
        <div class="offset " onclick="current_slide(2)">E-commerce</div>
        <div class="services-btn" onclick="current_slide(1)">Dynamic Web</div>
        <div class="offset " onclick="current_slide(0)">Static web</div>
    </div>
    <br class="phone_hide">
    <br class="phone_hide">
    <br class="phone_hide">
    <div class="text_style">
      <b>
    Do you have bugs on Your web app or is running slow?</b>
    </div>
    <p class="small_text"> Get  website for business, school management system, work management system, and more...<br>
      Payment integration will be added with additional cost</p> 
   
    <h3>Website Packages:</h3>
    <div class="first_services">
      <p><strong style="color:black">2.Dynamic Websites</strong></p>
    <div class="packages " id="swiping2">
      <div class="package first_card3"  id="outofview5">
        <div class="package_header">Start Up Business </div>
        <div class="price">From $100 </div>
        <div class="package_body">
          <ol>
          <li>1-5 Dynamic pages</li>
          <li>Free SSL certificate</li> 
          <li>Resposinve Design</li> 
          <li>Free Domain</li>
          <li>2 professional emails</li>
          </ol>
      </div>
      <p> Additional of $10/pm for maintenance</p>

        <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
        </div>
        <div class="package first_card3">
          <div class="package_header">Small Business </div>
          <div class="price">From $150 </div>
          <div class="package_body">
            <ol>
            <li>1-10 pages</li>
            <li>Free SSL certificate</li> 
            <li>Resposinve Design</li> 
            <li>Free Domain</li>
            <li>5 professional emails</li>
            </ol>
        </div>
        <p> Additional of $10/pm for maintenance</p>
  
          <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
          </div>

          <div class="package first_card3" id="outofview6">
            <div class="package_header"> <i class="fa fa-star"></i>Web Application </div>
            <div class="price">From $170 </div>
            <div class="package_body">
              <ol>
              <li>1-15 pages</li>
              <li>Free SSL certificate</li> 
              <li>Resposinve Design</li> 
              <li>Free Domain</li>
              <li>6 professional emails</li>
              </ol>
          </div>
          <p> Additional of $10/pm for maintenance</p>
    
            <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
            </div>
        
      </div>
</div>
    <p>For more infomation regarding this package contact us here </p>
    <p><i class="fa fa-arrow-down"></i> </p>
    <a  class="button" href="#contact">Contact us</a>
</div>

    <div class="btn-left" onclick="slide_change(-1)"><i class="fa fa-angle-left"></i></div><div class="btn-right" onclick="slide_change(1)"><i class="fa fa-angle-right"></i></div>
</div>


<div class="webdev" >

<div class="services"  onscroll="show1()">
    <div class="services-slides">
        
       
        <div class="offset" onclick="current_slide(1)">Dynamic Web</div>
         <div class="services-btn"  onclick="current_slide(2)">E-commerce</div>
        <div class="offset"  onclick="current_slide(0)">Static web</div>
        
       
    </div>

    <br class="phone_hide">
    <br class="phone_hide" >
    <br class="phone_hide">
    <br class="phone_hide">

<p class="small_text">Take your Business to next level by selling your products online</p>
<h3>Website Packages:</h3>
<div class="first_services" >
  <p><b>3.E-commerce Website</b></p>
    <div class="packages" id="swiping3">

      <div class="package first_card1">
        <div class="package_header">Small Business</div>
        <div class="price">From $200 </div>
        
        <div class="package_body">
          <ol>
          <li>1-12 dynamic pages</li>
          <li>Free SSL certificate</li> 
          <li>Resposinve Design</li> 
          <li>Free Domain</li>
          <li>5 professional emails</li>
          <li>Payment integration</li>
          </ol>
      </div>
      <p> Additional of $12/pm for maintenance</p>

        <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
        </div>

        <div class="package first_card1" id="outofview3">
          <div class="package_header"><i class="fa fa-star"></i>Advanced Business </div>
          <div class="price">From $450 </div>
         
          <div class="package_body">
            <ol>
            <li>1-50 dynamic pages</li>
            <li>Free SSL certificate</li> 
            <li>Resposinve Design</li> 
            <li>Free Domain</li>
            <li>10 professional emails</li>
            <li>Payment integration</li>
            </ol>
        </div>
        <p> Additional of $20/pm for maintenance</p>
        <div class="request button"><i class="fa fa-mail">&#128231;</i><a href="mailto:info@weball.co.za"> I NEED THIS</a></div>
          </div>
         
      </div>
</div>

<p>For more infomation regarding this package contact us here </p>
<p><i class="fa fa-arrow-down"></i> </p>
<a  class="button" href="#contact">Contact us</a>

    <div class="btn-left"><i class="fa fa-angle-left" onclick="slide_change(-1)"></i></div><div class="btn-right"><i class="fa fa-angle-right" onclick="slide_change(1)"></i></div>

</div>
</div>

<div>
  <h3>Our Recent Work:</h3>
  
  <div class="Projects" id="projects1">
    <h4> Project 1:Bitcoin Investing platform(Smart investa )</h4>
  <div class="p_img"><img alt="Bitcoin" class="project_img" id="first_p" src="img/weball.png" />  </div>

    
  <div class="card project_card" style="animation-delay: 0.5s;">
    <div class="notes_top">Bitcoin <i class="fa fa-star"></i> </div>
    

    <p>Our team is known of creating fast scalable and responsive websites, this is one of our work that we are proud of. It is 
      a Bitcoin Investing platform that enables people all over the world to invest in Bitcoin with secure and safe platform. </p>
      <p> Our team does not rely on certain programming language, we use the language that is suitable to complete the project</p>
   <p> This website is used by 100K+ people, and is responsive to all media devices( display fine in different screen sizes) </p>

  <div ><a   class="button" href="https://www.smartinvesta.co.za">Visit Site+</a></div>
  
<div class="notes">Notes about project</div>
  </div>


  </div>
  
  
  <div class="Projects" id="projects2">

    <h4> Project 2:MB Independence Academy</h4>
    <div class="p_img" id="p_img2"> <img class="project_img" id="second_p" src="img/mbi-img.png" > </div>
    <div class="card project_card" style="animation-delay: 0.5s;">
      <div class="notes_top">Education <i class="fa fa-star"></i> </div>
     
      <p>Our deticated team has created this website for blended learning. </p>
      <p> The Website is simply straight forward and easy to use.So learners can register online so easily and 
        get online and face to face classes for the subjects included on the website.</p>
      <p> <b>Follow these steps</b></p>
      <ol>
        <li>Click the link at bottom to <span style="color:rgb(241, 144, 16)">visit site</span></li>
        <li>Sign up to create an account and then login </li>
        <li>Choose any subjects you desire and get going!!!</li>
        </ol>
    <p > This website includes CMS( Content Management System) and is responsive to all 
      media devices(different screen sizes)</p>

    <div ><a class="button" href="http://www.weball.co.za/Online/ecommerce/Joseph.php">Visit site+</a></div>
    <div class="notes"> <i class="fa fa-computer"></i>Notes about project</div>
    </div>

   
    

    </div>
  
    <div class="Projects" id="projects2">
    <h4> Project 3: E-commerce (Online Shopping Website)</h4>
    <div class="p_img" id="p_img2"> <img class="project_img" id="second_p" src="img/ecommerce.png" > </div>
    <div class="card project_card" style="animation-delay: 0.5s;">
      <div class="notes_top">Shopping <i class="fa fa-star"></i> </div>
     
      <p>Our deticated team has created samples of e-commerce sites for our customers</p>
      <p> This is simple e-commerce site that includes basic features, we created this for you
        to have taste of our products before getting one so go ahead and test it, it's free. </p>
      <p> <b>Follow these steps</b></p>
      <ol>
        <li>Click the link at bottom to <span style="color:rgb(241, 144, 16)">visit site</span></li>
        <li>Sign up for demo account then login </li>
        <li>Shop for any item by adding to cart</li>
        <li>Proceed to checkout then Done</li>
        </ol>
    <p > This website includes CMS( Content Management System) and is responsive to all 
      media devices(different screen sizes)</p>

    <div ><a class="button" href="http://www.weball.co.za/Online/ecommerce/Joseph.php">Visit site+</a></div>
    <div class="notes"> <i class="fa fa-computer"></i>Notes about project</div>
    </div>

   
    

    </div>

   
  
</div>
    

<div id="about" class="about"> 
<h3> Why Choose Us </h3>  
<div class="triangle"></div>
  <div class="prices">
   
      <div class="scrolling" >
            
            <div class="choose package">
              <div class="package_header"> <i class="fas fa-lock"> </i> Security</div>
            <p>
                We ensure that your data is secured by providing SSL Certificate for free.
                With your data encrypted makes it extremely hard for hackers to get your data.
                We encrypt your login sytems and banking sytems 
            </p>
          <div class="like notes">
            <span class="like_number">506</span> <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <span class="like_number">4</span><i class="fa fa-thumbs-down" ></i>
          </div>
            </div>

            <div class="choose package">
              
              <div class="package_header">  <i class="fas fa-user"></i> Support</div>
            <p>
                Fast reply in all media platform including emails<br>
                We attend queries from 08:00h-17:00h From Monday till Friday and 08:00h-14:00h on
                weeekends and holidays.
                We reply within 24 hours
            </p>
          <div class="like notes">
            <span class="like_number">46</span> <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <span class="like_number">2</span><i class="fa fa-thumbs-down" ></i>
          </div>
            </div>

            <div class="choose package">
              
              <div class="package_header"> <i class="fas fa-cogs"> </i> Quality services</div>
            <p>
                We use modern technologies to develop websites and achieve 
                nice, user friendly and secured websites. We allow our clients to 
                bring on their ideas and we integrate them technically.
            </p>
          <div class="like notes">
            <span class="like_number">102</span> <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <span class="like_number">0</span><i class="fa fa-thumbs-down" ></i>
          </div>
            </div>


            
              
        </div>
    
  </div>
  

  
  </div>

  
</section>
<!-- services starts-->

<div class="contact_details">
<hr>
  <div class="contact_details1">
    <h3>More Info </h3>
    <div class="contact_details2">
      <div class="card_info"><p><b>Find Us</b></p>
      <p> <b> Address </b> <br>
          R37, Burgersfort
          Limpopo, 1150</p>
          <p> <b>Hours </b> <br>
            Monday-Friday:08:00h-17:00h <br>
           Saturday:08:00h-14:00h</p>
      </div>
      <div class="card_info"><p><b>CONTACT US</b></p>
        <p><i class="fa fa-phone"></i> <span class="phone_hide">Phone</span>: (+27) 728 108 533</p>
        <p><i class="fa fa-whatsapp" style="color:green;"></i><span class="phone_hide"> WhatsApp:</span> (+27) 728 108 533</p>
        <p><i class="fa fa" style="color:yellow">&#128231;</i><span class="phone_hide"> Email:</span> <a href="mailto:info@weball.co.za">info@weball.co.za</a></p>



      </div>
      <div id="sendmessage" class="sendmessage"><p><b>SEND MESSAGE</b></p>
        <br>
      <form method="POST" action="#" id="contact">
        <p><input  type="text" name="email1" placeholder="Enter Your Email" required></p>
      <textarea class="tablet_hide" cols="37" rows="4" name="message1" placeholder="Type your message here" ></textarea>
        <textarea class="desktop_hide phone_hide" cols="60" rows="8" name="message2" placeholder="Type your message here" ></textarea>
      <input type="submit" value="Send" >
      </form>
      <?php
      $result1= $email1=$message1="";
      if (isset($_POST["email1"])){
        

        $sql="INSERT INTO weball(email1,message1)
                values(?,?);";
                //ALTER TABLE account ADD column dateT VARCHAR(500) NOT NULL ; RUN this to update old table
                //ALTER TABLE account CHANGE name name1 VARCHAR(300) NOT NULL;  
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss",$email1,$message1);
                //set parameters to execute
                $email1=htmlspecialchars($_POST["email1"]);
                $message1= htmlspecialchars($_POST["message1"]);
                $message2= htmlspecialchars($_POST["message2"]);
        
               if($stmt->execute()){
                    
                   

                 $to = "belmiromohlala34@gmail.com"; 
                 $subject ="Message From: ".$email1;
    
                 $message = "
                 <html>
                 <head>
                 <title>New Message</title>
               </head>
               <body style='background-color:white;padding:5px; margin:0;'>
               <div style='font-size:16px; color:blue';font-weight:bold;>Good day Mr B Mohlala</div>
               <p> ".$email1." sent you the following message:</p>
               <p>".$message1." ".$message2."</p>
               <br>
               <br>
               <p style='font-style:italic'>Visit our website for me info</p>
               <p><a href='http://www.weball.co.za' 
               style='background-color:red; color:white;border-radius:3px;font-weight:bold;font-size:12px;padding:5px;text-decoration:none;box-shadow:3px 3px 2px black;'>Visit Site</a></p>
    
    
    
               </body>
    
                 </html>
                 ";
                 $headers = "MIME-version:1.0"."\r\n";
                 $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
                 $headers .= "From:info@weball.co.za"."\r\n";
    
                 mail($to,$subject,$message,$headers);
    
                 $result1 = "<div class='weball_pop_ups' style='display:block;z-index:1001;' id='pop_up1'>
                 <div class='cancel_btn_weball'> &times </div><h2 style='color:green;'>Your message was send successfully,
                 we will get back to you as soon as possible, please keep checking your emails</h2>
              </div>";


                        
                }
                else{
                  echo "<script> alert('Encountered server error while sending message, Try later')</script>";
                }
                $stmt->close();

      }

      
      ?>
      </div>
    </div>
  
    
   </div>
  

  </div>
  <footer >
    <div class="card_shadow1"></div>
    <div class="card_shadow"></div>
    <?php 
    if(isset($_POST["newsletter"])){
      $email = strtolower(htmlspecialchars($_POST["newsletter"]));
      $sql1 = "Select email from newsletter where email='$email'";
      if($conn->query($sql1)->num_rows<=0){

        $sql="INSERT INTO newsletter(email) VALUES ('$email')";
      if($conn->query($sql)){
        $result1 = "<div class='weball_pop_ups' style='display:block; z-index:1001;' id='pop_up1'>
        <div class='cancel_btn_weball'> &times </div><h2 style='color:green;'>You successfully subscribed to our
        weekly newsletter you will get corresponding email soon.
        You can unsubscribe anytime</h2>
     </div>";
      }
      else{
        echo "<script> alert('Encountered server error while subscribing, Try later')</script>";
      }

      }
      
    }
    
    ?>
    <form action="#" method="POST" class="newsletter card">
      <div class="package_header newsletter1">KEEP UP TO DATE WITH OUR OFFERS</div>
      <p>with our hand-crafted weekly newsletter</p>
      <div >
        <input type="text" name="newsletter" id="newsletter" placeholder="info@weball.co.za"/>
        <input type="submit" value="Subscribe" class="button"/>
      </div>
      </form>
      <div class="footer_body">
        <div>
          <div class="header_footer newsletter1">Follow US</div>
          <div class="socials"><i class="fa fa-twitter"></i>Twitter</div>
          <div class="socials"><i class="fa fa-facebook"></i>Facebook</div>
          <div class="socials"> <i class="fa fa-youtube-square"></i>YouTupe</div>
          <div class="socials"> <i class="fa fa-whatsapp"></i>WhatsApp</div>
          <div class="socials"><i class="fa fa-instagram"></i>Instagram</div>
        </div>

        <div>
          <div class="header_footer newsletter1">About Us</div>
         <p> Our objective is to bring up solutions to web based problems to all our existing  and 
           pontetial clients</p>
          <p> We are team of young dedicated developers with different 
            skills to create beautiful,responsive and
                        secured sites
          </p>

        </div>
        <div>
          <div class="header_footer newsletter1">Quick Links</div>
         <p> <a href="#logo_pic" style="color:white">Home</a></p>
          <p> <a href="#projects1" style="color:white">Our Work</a></p>
          <p><a href="#sendmessage" style="color:white">Contact</a></p>
          <p><a href="#services" style="color:white">Services</a></p>
        </div>

        <div>
          <div class="header_footer newsletter1">Accepted Payments</div>
         <p> Visa</p>
          <p>Mastercard</p>
          <p>Bank EFT</p>
          <p>Paypal</p>
        </div>

      </div>
<div class="copy"> Copyright 2021 &copy; Weball Technologies </div>
<div class="copy"> Developed by weball team</div>
   </footer> 



  

</div>

<?php

echo $result1;


?>


</body>
</html>