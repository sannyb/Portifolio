//end of sliding show
$(document).ready( function(){
$(".menu-bar").click(
function(){
	$("#all-content").toggleClass("all-content");
	$(".menu-drop-down").show();	
	$(".menu-cancel").show();	
	$(".task_bar").addClass("task_bar1");
}
);
});


//creating cancel button

$(document).ready( function(){
	$(".cancel_btn_weball").click(
	function(){	
		$(".weball_pop_ups").hide();	
	}
	);
	});
	
	
$(document).ready( function(){
	$(".services").scroll(
	function(){	
		$(".scroll").hide();	
	}
	);
	});

	
	$(document).ready( function(){
		$("[href='#sendmessage']").click(
		function(){	
			$(".bar").show();
	$("#all-content").removeClass("all-content");
	$(".menu-drop-down").hide();
	$(".menu-cancel").hide();
	$(".all-content").css({"opacity":"1","left":"0","width":"100%","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
	$(".task_bar").css({"left":"0","animation":"allconten 1s","-webkit-animation":"allconten 1s"});	
		}
		);
		});
	
		$(document).ready( function(){
			$("[href='#about']").click(
			function(){	
				$(".bar").show();
		$("#all-content").removeClass("all-content");
		$(".menu-drop-down").hide();
		$(".menu-cancel").hide();
		$(".all-content").css({"opacity":"1","left":"0","width":"100%","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
		$(".task_bar").css({"left":"0","animation":"allconten 1s","-webkit-animation":"allconten 1s"});	
		current_slide(2);
			}
			);
			});
		

$(document).ready( function(){
	$("[href='#services']").click(
		function(){	
		$(".bar").show();
			$("#all-content").removeClass("all-content");
			$(".menu-drop-down").hide();
			$(".menu-cancel").hide();
			$(".all-content").css({"opacity":"1","left":"0","width":"100%","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
			$(".task_bar").css({"left":"0","animation":"allconten 1s","-webkit-animation":"allconten 1s"});	
			current_slide(0);
				}
				);
				});
				
$(document).ready( function(){
	$("[href='#header']").click(
		function(){	
		$(".bar").show();
			$("#all-content").removeClass("all-content");
			$(".menu-drop-down").hide();
			$(".menu-cancel").hide();
			$(".all-content").css({"opacity":"1","left":"0","width":"100%","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
			$(".task_bar").css({"left":"0","animation":"allconten 1s","-webkit-animation":"allconten 1s"});	
			current_slide(0);
				}
				);
				});

				$(document).ready( function(){
					$("[href='#projects1']").click(
					function(){	
						$(".bar").show();
				$("#all-content").removeClass("all-content");
				$(".menu-drop-down").hide();
				$(".menu-cancel").hide();
				$(".all-content").css({"opacity":"1","left":"0","width":"100%","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
				$(".task_bar").css({"left":"0","animation":"allconten 1s","-webkit-animation":"allconten 1s"});	
				current_slide(1);
					}
					);
					});
				
$(document).ready( function(){
$(".menu-cancel").click(
function(){
	$(".bar").show();
	$("#all-content").removeClass("all-content");
	$(".menu-drop-down").hide();
	$(".menu-cancel").hide();
	$(".all-content").css({"opacity":"1","left":"0","width":"100%","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
	$(".task_bar").css({"left":"0","animation":"allconten 1s","-webkit-animation":"allconten 1s"});
	
}
);
});

function init(){
	$(".project_img").hide();  
	$(".prices").attr("style","display:none;");
	$(".card_info").attr("style","display:none;");
	$("#p_img2").attr("style","display:none;"); 
	$("#projects1").attr("style","display:none;");
	$("#projects2").attr("style","display:none;");
}

 function portfolio(){
	
	slide_change(0);
	slides();
	setInterval(slides,10000);
	setTimeout(loading,1000);
	setTimeout(whatsap,5000);


	
 }

//creating slides, the first slides just after task bar
var check1 =0;
 
var count = 0; // counting the number of characters

function slides(){
let x = document.getElementsByClassName("container");

if (check1>=1){
		clearInterval(myint);
		typing();
	let m = document.getElementsByClassName("letter");
	for(let i=0;i<70;i++){
		m[i].style.display="none";
	}
	var myint = setInterval(myname,150);
	count = 45;
	x[1].style.display="block";
	x[0].style.display="none";
	check1 = 0;
}
else{
		clearInterval(myint);
		typing();
	let m = document.getElementsByClassName("letter");
	for(let i=0;i<70;i++){
		m[i].style.display="none";
	}
	var myint = setInterval(myname,150);
	count = 0;
	x[0].style.display="block";
	x[1].style.display="none";
	check1 = 1;
}


}

 function typing(){
	
 var underscore = setInterval(change,400);
	 var underscore = setInterval(change1,199);
	 
 }
 
 function change(){
	
	 let x = document.getElementsByClassName("userscore");
	 x[0].style.display="none";
	 x[1].style.display="none";
 }
 function change1(){
	 let x = document.getElementsByClassName("userscore");
	 if(count>19){
		 x[0].style.display="none";
	 x[1].style.display="block";
		
	}
	else{
		 x[0].style.display="block";
	 x[1].style.display="none";
	}
	if(count>70){
		 x[0].style.display="none";
	 x[1].style.display="none";
		
	}
 }
 

 function myname(){
	 let x = document.getElementsByClassName("letter");
	 
	
	if(count<x.length){

		x[count].style.display="block";
		if(count >= 48){
			x[count].style.color = "black";
			x[count].style.textShadow = "1px 1px 1px black"
		}
	
	}
	else{
		
		let y = document.getElementsByClassName("userscore");
		y[0].style.display="none";
		
	}

	count++;
	
	
 }
 
//sliding show
var index=0;
function slide_change(n){
	let i = 0
	index =  index + n;
let x = document.getElementsByClassName("webdev");

for (i; i<x.length; i++){
	x[i].style.display="none";
}
if(index<3 && index>-1){
x[index].style.display="block";
}

if(index>2){
	index=2;
	x[index].style.display="block";
}

if(index<0){
	index=0;
	x[index].style.display="block";
}

} 

//current slide

function current_slide(n){
	let i = 0
	index =n;
let x = document.getElementsByClassName("webdev");

for (i; i<x.length; i++){
	x[i].style.display="none";
}
if(index<3 && index>-1){
x[index].style.display="block";
}

if(index>2){
	index=2;
	x[index].style.display="block";
}

if(index<0){
	index=0;
	x[index].style.display="block";
}

}
//this is for small phone to display the content when scrolling 
function show1(){
	let i = 0
let x = document.getElementsByClassName("webdev");

for (i; i<3; i++){
	x[i].style.display="block";
}

} 
//
function show2(){
	let i = 0
let x = document.getElementsByClassName("webdev");

for (i; i<3; i++){
	x[i].style.display="block";
}

} 

function animate(){
	view1(".button");
	

	
}
//view1(".prices"); view1(".card_info"); view2(".project_img");  
//view2("#p_img2"); 


// Functions to Animate elements when in viewport  projects1
function view1(target1){
	$(window).scroll(function() {
	  var top_of_element = $(target1).offset().top;
	  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
	  if ((bottom_of_screen > top_of_element) ){
		 $(target1).addClass("fadeup");
		 setTimeout(opas(target1),50);
		
	  } 
	 
	});
  }
  function opas(target1){
	$(target1).attr("style","opacity:1");
  }
  
  
  function view2(target1){
	$(window).scroll(function() {
	  var top_of_element = $(target1).offset().top;
	  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
	  if ((bottom_of_screen > top_of_element) ){
		 $(target1).addClass("faderight"); 
	   setTimeout(opas(target1),50);
	  } 
	 
	});
  }
  
  function view3(target1){
	$(window).scroll(function() {
	  var top_of_element = $(target1).offset().top;
	  var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
	  if ((bottom_of_screen > top_of_element) ){
		 $(target1).addClass("fadeout"); 
		 setTimeout(opas(target1),50);
	  } 
	
	});
  }
  //=====End=======//

  function loading(){
	  console.log("No errors found in the Weball.co.za");

	  document.getElementById("all-content").style.display="block";
	  document.getElementById("loading").style.display="none";
	  view1("#projects1"); view1("#projects2");
	  view1(".prices"); view1(".card_info"); view2(".project_img");  
view2("#p_img2");

  }
  //For changing background of Header Bar
$(window).scroll(function() {
	var top_of_element = $(".services_section").offset().top;
	var bottom_of_screen = $(window).scrollTop();
	if ((bottom_of_screen > top_of_element) ){
	  $(".dev_login").attr("id","dev_login_phone");
	  $(".d_menu").attr("id","d_menu");
	  $(".header").attr("id","header");
	} 
	else {
		$(".d_menu").attr("id","d_menu1");
		$(".header").attr("id","header1");
		$(".dev_login").attr("id","dev_login_phone1");
	}
  });
  //=====End====//
  function whatsap(){
	  document.getElementById("whatsaap").style.display="block";
	  setTimeout(noti,2000);
  }
  function noti(){
	document.getElementById("notification").style.display="block";
  }

  
  