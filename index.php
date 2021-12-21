<?php

require_once "config_mogolo.php";
//https://api.whatsapp.com/send/?phone=971586488888&text=Hi%2C+I+am+Interested+in+properties+from+https%3A%2F%2Fopr.ae.+Kindly+send+me+more+information.+Thank+you&app_absent=0

?>

<!DOCTYPE html>

<html>

<head>
 <title>WebAll Technologies</title>
 
            <link href="css/phone.css" rel="stylesheet" type ="text/css" />
            <link rel="shortcut icon" href="img/weball.PNG">
            <link href="css/desktop.css" rel="stylesheet" type ="text/css" />
            <link href="css/tablet.css" rel="stylesheet" type="text/css"  />
            <link href="css/weball.css" rel="stylesheet" type="text/css"  />
            <link rel="stylesheet" type="text/css" href="font/css/font-awesome.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
                         

            <meta name="description" name="WebAll Technologies official website">
            <meta name="keywords" content="Weball Technologies,weball, Web development,"/>
            <meta name="google-site-verification" content="AdJFP1RxAG3xncYa1WmnNB48V9-Otw42yzTsIdOVjN8" />
            <meta http-equiv="refresh" content="">
            <meta name="author" content="Belmiro Mohlala"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			
			      <script src="js/jquery-3.5.1.min.js" ></script>
            <script src="js/portifolio.js" ></script>
            <noscript> Your Browser Does Not Support Javascript </noscript>
			
			
            

</head>

<body  onload="portfolio()" onscroll="animate()">

<div class="menu-drop-down">
<div class="menu-cancel"> &times; </div>
<div class="search"><select id="search" name="categories"><option value="all">All</option> <option value="Hosting">Hosting</option> <option value="Design">Hosting</option> <option value="maintainance">Maintainance</option></select>
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
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="left"></div>
  <div class="right"></div>
  <img src="img/loader.jpg" alt="loader">
  </div>
<!--End of loader-->


<div id="all-content" style="display:none;" >
  
  <div class="tablet_hide phone_hide d_menu" ><a href="#services" >SERVICES</a> <span>|</span> 
    <a href="#projects1" >PROJECTS</a> <span>|</span><a href="#sendmessage">CONTACT US</a><span>|</span><a href="#about" >ABOUT US</a></div>

<div class="get_us"> 
<a href="mailto:info@weball.co.za">info@weball.co.za</a>
<a href=""> +27 (0)728108533</a>
</div>

<div class="dev_login " >
  <a href="#">Developer login</a>
  </div> 


<div class="desktop_hide menu-bar">
  <div class="bar"> </div>
  <div class="bar"> </div>
  <div class="bar"> </div>
</div>
<header class="header" id="header">
  </header>
  <div class="whatsaap">
    <span class="notification" id="notification">1</span>
    <a href="whatsapp://send?text=Hi, I have question!&phone=+27728108533"><i class="fa fa-whatsapp" id="whatsaap"></i></a>
    </div>

<div class="container">

<div class = "coding" ><img src="img/logo.jpg"> </div>

<div class="name">


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



<div class="container">
  <div class = "coding" ><img src="img/logo1.jpg"> </div>
  
  <div class="name">
  
  
  <br>
  <!-- Second slide start-->
  <div class="typingname">
  
     <div class="typingname1"> <span class="letter">We</span><?php echo $space?><span class="letter"> are</span> <?php echo $space?><span class="letter">Te</span><span class="letter">ch</span><span class="letter">no</span><span class="letter">lo</span><span class="letter">gy</span><?php echo $space?><span class="letter">You</span><?php echo $space?><span class="letter">Ne 
           </span></span><span class="letter">ed</span><?php echo $space?> 
            
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
  <h1> Services </h1>
  <h2> GET PROFESSIONAL WEBSITE FROM AS LITTLE AS <b style="color:rgb(206, 73, 73)"> $50</b> </h2>
<div class="webdev" >
  <div class="services" id="services" onscroll="show1()" >
      <div class="services-slides">
          
          <div  class="services-btn" onclick="current_slide(0)">Static web</div>
          <div class="offset phone_hide tablet_hide" onclick="current_slide(1)">Dynamic Web</div>
          <div class="offset phone_hide tablet_hide" onclick="current_slide(2)">E-commerce</div>
      </div>
      <br class="phone_hide" >
      <br class="phone_hide">
      <br class="phone_hide">
      <!--<p  class="decoration" style="color:black; font-family:MyFont;"><strong>OUR AIM IS TO HELP AMBITOUS BUSINESS MAKE MORE 
        PROFIT BY BUILDING ONLINE PRESENCE, MANAGING WEB TRAFIC AND CONNECTING WITH CUSTOMERS 24/7 ONLINE</strong></p>-->
        <div class="scroll"><img src="img/scroll.PNG" alt="scrolling"></div>
        <div class="text_style">
          <b>
         We are dedicated team of developers aimed to solve any Web problems</b>
        </div>
        <p>We design and develop from scratch</p>
        <p> Our team also fix bugs in existing websites, or upgrade your existing website to new  design</p>

      <h3>Website Package:</h3>
     
      <div class="first_services">
        <p><strong style="color:black">1.Static Website</strong></p>
      <p>Static website we refering to small website with 1 - 50 pages 
      strictly no database.This package Comes with free domain valid for 1 year .
      </p>
      <p>Get this package as little as <strong style="color:rgb(207, 64, 64)"> $50 once-off</strong>. We also provide you with maintenance at lower cost of $4/pm</p>
    

        </div>
        <p>For more infomation regarding this package contact us here </p>
        <p><i class="fa fa-arrow-down"></i> </p>
        <a  class="button" href="#contact">Contact us</a>





      <p style="color:rgb(245, 183, 12)"> All given projects will be completed within 30 days from effective day</p>
      </div>
  <div class="btn-left" onclick="slide_change(-1)"><i class="fa fa-angle-left"></i></div><div class="btn-right" onclick="slide_change(1)"><i class="fa fa-angle-right"></i></div>
</div>
<div class="webdev" >

<div class="services" onscroll="show2()" >
    <div class="services-slides">
        <div class="offset phone_hide tablet_hide" onclick="current_slide(0)">Static web</div>
        <div class="services-btn" onclick="current_slide(1)">Dynamic Web</div>
        <div class="offset phone_hide tablet_hide" onclick="current_slide(2)">E-commerce</div>
    </div>
    <br class="phone_hide">
    <br class="phone_hide">
    <br class="phone_hide">
    <div class="text_style">
      <b>
    Do you have bugs on Your web app or is running slow?</b>
    </div>
    <p> We develop web app/sytems from scratch and  fix bugs in any existing website</p> 
    <h3>Website Package:</h3>
    <div class="first_services">
      <p><strong style="color:black">2.Dynamic Website</strong></p>
        <p>This is dynamic website which can be scrapping website or any website with dynamic content like school system.</p>
         <p> This comes with 1-5 databases, 1-25 emails, free domain name for 1 year. Get this package as little as<strong style="color:rgb(207, 64, 64)"> $150 once-off</strong>
        . This can be <span class="danger">Blog </span>, to ensure that your customers browse safely we 
          provide SSL certificate for your site(https://...). We provide maintenance with additional charge of $10/pm
        </p>

    </div>
    <p>For more infomation regarding this package contact us here </p>
    <p><i class="fa fa-arrow-down"></i> </p>
    <a  class="button" href="#contact">Contact us</a>
</div>

    <div class="btn-left" onclick="slide_change(-1)"><i class="fa fa-angle-left"></i></div><div class="btn-right" onclick="slide_change(1)"><i class="fa fa-angle-right"></i></div>
</div>


<div class="webdev" >

<div class="services"  onscroll="show2()" >
    <div class="services-slides">
        <div class="offset phone_hide tablet_hide"  onclick="current_slide(0)">Static web</div>
        <div class="offset phone_hide tablet_hide" onclick="current_slide(1)">Dynamic Web</div>
        <div class="services-btn"  onclick="current_slide(2)">E-commerce</div>
    </div>

    <br class="phone_hide">
    <br class="phone_hide" >
    <br class="phone_hide">
    <br class="phone_hide">

 
<div id="ecommerce"><p><strong>3.E-commerce Website</strong></p>
      <p>Take your Business to next level by bringing up online shopping.</p>
</div>

<div class="first_services">
    <p>Get an ecommerce website and start selling online</p>
     <p> This comes with 1-5 databases, 1-25 emails, free domain name for 1 year. Get this package as little as<strong style="color:rgb(207, 64, 64)"> $200 once-off</strong></p>
    <p>To ensure that your customers browse safely we provide SSL certificate for your site(https://...). We provide maintenance with additional charge of $10/pm </p>
</div>

<p>For more infomation regarding this package contact us here </p>
<p><i class="fa fa-arrow-down"></i> </p>
<a  class="button" href="#contact">Contact us</a>

    <div class="btn-left"><i class="fa fa-angle-left" onclick="slide_change(-1)"></i></div><div class="btn-right"><i class="fa fa-angle-right" onclick="slide_change(1)"></i></div>

</div>
</div>

<div>
  <h3>Our Major Projects:</h3>
  
  <div class="Projects" id="projects1">
    <h4> Project 1:Bitcoin Investing platform(Smart investa )</h4>
    
  <div class="card project_card">
    <p>Our team is known of creating fast scalable and responsive websites, this is one of our work that we are proud of. It is 
      Bitcoin Investing platform that enables people all over the world to invest in Bitcoin with secure and safe platform. </p>
      <p> Our team does not rely on certain programming language, we use the language that is suitable to complete the project</p>
   <p> This website includes database, and is responsive to all media devices(different screen sizes) </p>

  <div ><a   class="button" href="https://www.smartinvesta.co.za">Visit Site+</a></div>
  
<div class="notes"> <i class="fa fa-angle-right"></i>Notes about project</div>
  </div>

  <div class="p_img"><img class="project_img" id="first_p" src="img/project2.PNG" /> <img class="project_img" src="img/project1.png" /> </div>

  </div>
  <hr>
  
  <div class="Projects" >
    <div >
      <h4> Project 2: E-commerce (Online Shopping Website)</h4>
      <p>This is the project our team is curretly busy with, we just got started with this project and is one of the
        most interesting projects since Ecommerce is growing exponetially
      </p>
      <div class="p_img"> <img class="project_img" id="first_p" src="img/ecommerce.png" > <img  class="project_img"  src="img/ecommerce1.png" ></div>
    
    <div>
    
    
      
    <p > This website includes database,CMS( Content Management System) and is responsive to all 
      media devices(different screen sizes)</p>
    <div ><a class="button" href="http://www.weball.co.za/Online/ecommerce/Joseph.php">Visit site+</a></div>
    </div>
    
    </div>
    </div>
    
</div>
<div id="about" class="about"> 
<h3> About Us </h3>  
 
<div class="contactss">
<p><b>We specialize with web design, web development and android app development.</b></p>
</div>
  
  
  </div>

  
</section>
<!-- services starts-->

<div class="contact_details">
<hr>
  <div class="contact_details1">
    <h3>More Info </h3>
    <div class="contact_details2">
      <div class="card_info"><em>FOLLOW US</em>
        <ul>
      <li><i class="fa fa-facebook" style="color:blue;"></i><a href="#">  Facebook</a></li>
      <li><i class="fa fa-twitter" style="color:navy;"></i> Twitter</li>
      <li><i class="fa fa-whatsapp" style="color:green;"></i> WhatsApp</li>
      </ul>
      </div>
      <div class="card_info"><em>CONTACT US</em>
        <p><i class="fa fa-phone"></i> <span class="phone_hide">Phone</span>: (+27) 728 108 533</p>
        <p><i class="fa fa-whatsapp" style="color:green;"></i><span class="phone_hide"> WhatsApp:</span> (+27) 728 108 533</p>
        <p><i class="fa fa" style="color:yellow">&#128231</i><span class="phone_hide"> Email:</span> <a href="mailto:info@weball.co.za">info@weball.co.za</a></p>



      </div>
      <div id="sendmessage" class="sendmessage"><em>SEND MESSAGE</em>
        <br>
      <form method="POST" action="" id="contact">
        <p><input  type="text" name="email1" placeholder="Enter Your Email" required></p>
      <textarea class="tablet_hide" cols="37" rows="4" name="message1" placeholder="Type your message here" ></textarea>
        <textarea class="desktop_hide phone_hide" cols="60" rows="8" name="message2" placeholder="Type your message here" ></textarea>
      </textarea>
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
    
                 $result1 = "<div class='weball_pop_ups' style='display:block;' id='pop_up1'>
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
    <p>&copy <strong>Copyright 2021 WebAll Technologies</strong></p>
    
   </div>
  

  </div>



  

</div>

<?php

echo $result1;


?>


</body>
</html>