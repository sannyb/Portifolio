 <?php
require "connect.php";
$user="username";
$chat1="";
$chat1=strtolower($_POST["message"]);

if (!isset ($_COOKIE[$user])){
	$belmiro = $_POST["username"];
setcookie($user,$belmiro,time() + (86400*30),"/");
               
}
$wits = strtolower($_COOKIE[$user]);

//Create database for messageos
/*$chat = "CREATE TABLE messages(
message VARCHAR unsigned,
name VARCHAR(500)
)";*/

/*
$chat = "ALTER TABLE messages
         ADD username VARCHAR(5000);";

if($conn->query($chat)===TRUE){
	echo "Column Username was added successfully";

}
else{
	echo "falied to ADD the column".$conn->error;
}

$conn->close();*/
if($_POST["message"]!==""){
$chat ="INSERT INTO messages(message1,username)
        VALUES('$chat1','$wits');";
		if($conn->query($chat)==TRUE){
			echo "";
		}
		else {
			echo "failed to upload message".$conn->error;
		}
		
$conn->close();}




?>

<!DOCTYPE html>
<html>
<head>
 <title>Belmiro Robot</title>
           <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
           <link href="style1.css" rel="stylesheet" type ="text/css" />
           <link href="style11.css" rel="stylesheet" type ="text/css" />
           <link href="mogolo_style.css" rel="stylesheet" type="text/css"/>
           <link href="style/mogolo_style1.css" rel="stylesheet" type="text/css">
           <link rel="stylesheet" type="text/css" href="font/css/font-awesome.css"/>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
            <link rel="icon" href="pics/avater.jpg" type="image/icon type">

<meta name="description"
name="login as stuff member to acess all features"/>

<meta name="keywords" content="mogolo stuff members"/>

<meta http-equiv="refresh" content=""/>

<meta name="author" 
content="Belmiro Mohlala"/>

<meta name="viewport"
content="width=device-width, initial-scale=1.0"/> 
<script src="java1.js"></script>
<script src="testing.js"></script>
<noscript>Your browser does not support javascript</noscript>
</head>

<body onload="chat()" class="bel_body" >
<div class="menu_p">
        <div class="menu2">
            <div class="menu3"></div>
            <div class="menu3"></div>
            <div class="menu3"></div>
        </div>

	<div class="menu_slide">
<p><a href="myprofile.php">Home</a></p>
<p><a href="portifolio.php">Portifolio</a></p>


  </div>	
	
</div>
<div class="chatting_bel" id="chatting_bel">


<?php




?>

<?php

require "connect.php";
$robot=array("yah","yeah","who created you?","futsek","how old is belmiro","how old is belmiro","lol","oohk","sure","ola","Yeah","ok","okay","where are you studying?","hi","ben","what do you like?","who are you?","how are you?","good","how are you doing?","hello",
"what is your name?","where are you from?","what is your favorite pad?","yes","how many programming languages do you know?");




$answer=array("ohk","ohk","I was designed by Belmiro","Don't insult me please","He was born on 26 september 200, so do the math","He was born on 26 september 200, so do the math","haha","Yeah","Yeah","Yeah","Yeah","Yeah","Yeah","I'm studying at witwatersrand University","Hi there, do you have a question to ask?","Yes what is up, I am here","I like coding my friend $wits","I am Ben(robot)",
"I am good thanks and you?","That is great","I am good thanks and yourself?","Hi there, do you have a question to ask?",
"I am Belmiro Mohlala","I am from small town called Burgersfort in limpopo,
 south Africa","my favorite pad is dog","okay go ahead and ask, please remember I am robot so type in formal way",
  "javascript,html and css, still learning PHP and MYSQL");
  
  $error="Sorry <strong style='color:#9999ff;'>$wits</strong> I don't understand you!";
  
$sql="SELECT message1 FROM messages WHERE username='$wits';";
$result=$conn->query($sql);	
	if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		if(in_array($row["message1"],$robot)){
			
				echo "<div class='chat1'><p id='chat2'>".$row["message1"]."</p></div>";
				
				$key = array_search($row["message1"],$robot);
				
				echo "<div class='chat'><p id='chat1'>".$answer[$key]."<p></div>";
			}
		
		else{
			
			if($_POST["message"]=="" or $_POST["message"] == NULL){
	
	               echo "<div class='chat'>";
                    echo "<p id='chat1'>Hi ".$wits." , Ben here. Please ask me personal information about Belmiro and please type in a formal way<p> ";
                    echo " </div>";
	
                               }
			else{
				echo "<div class='chat1'><p id='chat2'>".$row["message1"]."</p></div>";  
				echo "<div class='chat'><p id='chat1'>".$error."<br>";
				echo "Try asking following questions:<br>";
				echo "1. Hello?<br>";
				echo "2. How are you?<br>";
				echo "3. where are you from?<br>";
				echo "4. where are you studying?<br></p></div>";	
			}
			
			
			/*
			echo "<div class='chat'><p id='chat1'> I don't understand you ".$wits."<p>";
			
			echo "<p>Try asking one of the following questions: </p>";
				
			for ($i=0;$i<count($robot);$i++){
			    $j= $i+1;
			    echo  "<p>".$j." ".$robot[$i]."</p>";
			} 
			
			echo "</div>";*/
			
			}
	}
}

else{
	 echo "<div class='chat'>";
                    echo "<p id='chat1'>Hi ".$wits." , Ben here. Please ask me personal information about Belmiro and please type in a formal way<p> ";
                    echo " </div>";
	echo "<div class='chat1'><p id='chat2'>All of your text are going to be displayed here</p></div>";
	
}

	$conn->close();

	
?>


<div class="typing">
<form method="post" action="#">
<textarea cols="35" rows="3" placeholder="Type your message..."  name="message">
</textarea>
<input type="submit" value="send">
</form>
</div>
</div>
</body>
</html>

