<?php

require_once "config_mogolo.php";

?>

<!DOCTYPE html>

<html>

<head>
 <title>WebAll Technologies</title>
 
            <link href="css/phone.css" rel="stylesheet" type ="text/css" />
            <link rel="shortcut icon" href="img/weball.PNG">
            <link href="css/desktop.css" rel="stylesheet" type ="text/css" />
            <link href="css/tablet.css" rel="stylesheet" type="text/css"  />
            <link rel="stylesheet" type="text/css" href="font/css/font-awesome.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
                         

            <meta name="description" name="WebAll Technologies official website">
            <meta name="keywords" content="WebAll Technologies"/>
            <meta http-equiv="refresh" content="">
            <meta name="author" content="Belmiro Mohlala"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			
			      <script src="js/jquery-3.5.1.min.js" ></script>
            <script src="js/portifolio.js" ></script>
            <noscript> Your Browser Does Not Support Javascript </noscript>
			
			
			

</head>

<body  onload="portfolio()">

<div class="menu-drop-down">
<div class="menu-cancel"> &times; </div>
<hr>
<div class="menu-content"> <div class="menu-icon"><i class="fa fa-home"></i></div><div class="manu_link"><a href="portifolio.php">Home</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon"><i class="fa fa-book"></i></div><div class="manu_link"><a  href="#about">About Us</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon">  <i class="fa fa-users"></i></div><div class="manu_link"><a  href="#projects">Projects</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon"> <i class="fa fa-phone"></i></div><div class="manu_link"><a  href="#sendmessage"> Contact</a></div></div>
<hr>
<div class="menu-content"><div  class="menu-icon"> <i class="fa fa-cogs"></i></div><div class="manu_link"><a  href="#services" >Services</a></div></div>

<hr>


</div>


<div id="all-content" >
  
  <div class="tablet_hide phone_hide d_menu"><a href="#services" >SERVICES</a> <span>|</span> 
    <a href="#projects" >PROJECTS</a> <span>|</span><a href="#sendmessage">CONTACT US</a><span>|</span><a href="#about" >ABOUT US</a></div>
<!--

<div class="task_bar" style="display: none;">

<div class="welcome"> <span class="intro_first">Web-All</span>    Technologies</div>
<div class="logo"><img src="img/weball.PNG"> </div>  

	
</div>

-->




<div class="desktop_hide menu-bar">
  <div class="bar"> </div>
  <div class="bar"> </div>
  <div class="bar"> </div>
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

<div class="webdev" >
  <div class="services" id="services" onscroll="show1()">
      <div class="services-slides">
          
          <div  class="services-btn" onclick="current_slide(0)">Services</div>
          <div class="offset phone_hide tablet_hide" onclick="current_slide(1)">Our Work</div>
          <div class="offset phone_hide tablet_hide" onclick="current_slide(2)">About us</div>
      </div>
      <br class="phone_hide" >
      <br class="phone_hide">
      <br class="phone_hide">
      <!--<p  class="decoration" style="color:black; font-family:MyFont;"><strong>OUR AIM IS TO HELP AMBITOUS BUSINESS MAKE MORE 
        PROFIT BY BUILDING ONLINE PRESENCE, MANAGING WEB TRAFIC AND CONNECTING WITH CUSTOMERS 24/7 ONLINE</strong></p>-->
        <div class="scroll"><img src="img/scroll.PNG"></div>
        <p id="text_linear">
          <span style="color:blue">WebAll</span> offer wide range of <strong>Websites</strong>, <strong>Web Applications</strong>,<strong>Desktop/Phone Applications</strong> and <strong>more</strong>.<br> We value our customers hence we rely on 
          customers need of how the Website/Application should function
      </p>
      <p>We offer free hosting and free domain name</p>
      <h3>Website Packages:</h3>
      <div class="services1">
      <div>
        <p><strong>1.Static Website</strong></p>
      <p>Static website we refering to small website with 1 - 50 pages 
      it can include database, but is static site(only developer can modify it). Comes with Free domain and 
      free hosting. <a href="#contact">Contact us</a> for more infomation
      </p>
        </div>
        <div><p><strong>1.Dynamic Website</strong></p>
        
        <p>This  comes with CMS(content management System) and databases.
          With free domain name and free hosting. This can be <span class="danger">Blog or Website. </span><br> To ensure that your customers browse safely we 
          provide SSL certificate for your site. To make sure your customers 
          information is secured.
        </p>
        </div>
        <div id="ecommerce"><p><strong>3.E-commerce</strong></p>
      <p>Take your Business to next level by bringing up online shopping.
        we'll build e-commerce website, with SSL certificate, free hosting, 
      free domain and with CMS, <a href="#contact">Contact us</a> for more infomation </p></div>

      </div>




      <p>All given projects will be completed within 30 days from effective day</p>
      </div>
  <div class="btn-left" onclick="slide_change(-1)"><i class="fa fa-angle-left"></i></div><div class="btn-right" onclick="slide_change(1)"><i class="fa fa-angle-right"></i></div>
</div>
<div class="webdev" >

<div class="services" onscroll="show2()">
<div class="services-slides">
<div class="offset phone_hide tablet_hide" onclick="current_slide(0)">Services</div>
<div class="services-btn" onclick="current_slide(1)">Our Work</div>
<div class="offset phone_hide tablet_hide" onclick="current_slide(2)">About us</div>
</div>
<br class="phone_hide">
<br class="phone_hide">
<br class="phone_hide">
<div class="services2"  id="projects">
<h3>Our Major Projects:</h3>

<div class="Projects" >
<div style="background-color: floralwhite;" >
  <h4> Project no.1:School Website(MB Independent Academy)</h4>
<img  src="img/Screenshot_20210520-173658.png" width="14%"> <img src="img/project1.png" width="50%">

<div>


  
<em style="color:blue">" This website includes database, <span style="color:black">CMS( Content Management System)</span> and is responsive to all 
  media devices(different screen sizes)"</em>
<div type="button" style="margin-top: 1em;" class="button"><a href="http://www.mogolosecondaryschool.co.za">Visit Site+</a></div>
</div>

</div>
</div>

<div class="Projects" >
  <div style="background-color: floralwhite;" >
    <h4> Project no.2: Demo Online Shopping Website</h4>
  <img src="img/ecommerce.png" width="14%"> <img src="img/ecommerce1.png" width="50%">
  
  <div>
  
  
    
  <em style="color:blue">" This website includes database, <span style="color:black">CMS( Content Management System)</span> and is responsive to all 
    media devices(different screen sizes)"</em>
  <div type="button" style="margin-top: 1em;" class="button"><a href="http://www.weball.co.za/Online/ecommerce/Joseph.php">Visit site+</a></div>
  </div>
  
  </div>
  </div>
  

</div>




</div>
<div class="btn-left" onclick="slide_change(-1)"><i class="fa fa-angle-left"></i></div><div class="btn-right" onclick="slide_change(1)"><i class="fa fa-angle-right"></i></div>
</div>


<div class="webdev" >

<div class="services" id="about" onscroll="show2()">
<div class="services-slides">
  <div class="offset phone_hide tablet_hide"  onclick="current_slide(0)">Services</div>
<div class="offset phone_hide tablet_hide" onclick="current_slide(1)">Our Work</div>

<div class="services-btn"  onclick="current_slide(2)">About us</div>
</div>
<br class="phone_hide">
<br class="phone_hide" >
<br class="phone_hide">
<br class="phone_hide">

<div class="important-info">We specialize with Web Design, Web development and Android App Development ,  </div>

<div class="prices" >
  <div><strong>WebAll Technologies</strong> is an IT company founded by Belmiro Mohlala in 2020  and formalised in 2021<br>
  it is registered under CIPC <span class="danger">Reg no:2021/549791/07.</span><br><strong>
  WebAll</strong> focus on different fields of Programming, which are <br><ol><li><strong>Web development</strong>
  </li><li><strong>Software development.</strong></li></ol>
</div> 

  <div><strong>Weball</strong> covers <span style="color:aqua; font-size:20px; font-weight:bold;">Graphic Design:</span>
    <br><ol><li><strong>Logo Design</strong>
    </li><li><strong>Video Edit</strong></li>
  </li><li><strong>etc...</strong></li></ol>
</div>

  <div>Our offices are located at:
    <ul>
<li>Limpopo</li>
<li>Burgersfor</li>
<li>Riba Cross</li>
<li>P.O Box 1150</li>
    </ul> </div>
    <p>Contact us for more information:</p>
    <p type="button" class="button"><a href="#sendmessage">Contact</a></p>
  </div>

<div class="prices">
  
  <p>In <strong>WebAll Technologies</strong> we have skilled developers who can take your Business to another level.<br>
  We target  mostly small companies that are still under development and assist them to reach Customers easily by taking their 
Business to online, where it can been searched by 1000+ people</p>
  
  
</div>



</div>
<div class="btn-left"><i class="fa fa-angle-left" onclick="slide_change(-1)"></i></div><div class="btn-right"><i class="fa fa-angle-right" onclick="slide_change(1)"></i></div>

</div>

<div class="contact_details">

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
      <form method="POST" action="">
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