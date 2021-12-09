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
					$("[href='#projects']").click(
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

 function portfolio(){
	slide_change(0);
	slides();
	setInterval(slides,10000);
	
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

for (i; i<2; i++){
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

  
  