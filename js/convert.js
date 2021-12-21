function reset(){
     document.getElementById("screen").innerHTML="0";
}
var base2 = {"0":0,"1":1,"10":2,"11":3,"100":4,"101":5,"110":6,"111":7,"1000":8};

function convert(){
    let from = document.getElementById("base_from").value;
    let to = document.getElementById("base_to").value;
    let screen =  document.getElementById("screen").textContent;

let arr1=[];
let arr = screen.split('');

    if(from=="Base 2" && to =="Base 8"){
        let check3 = validate(screen,from);
        if(check3==true){
        let check = arr.length;
        while(check>3){
            let temp = "";
            let  n  = arr.length;
            let n1 = arr.length-3;
            for (let i=n1; i<n;i++){

                temp = temp + arr[i];

            }
            temp = parseInt(temp);
            arr1.push(base2[temp]);
            for (let i=n1; i<n;i++){
               arr.pop();
            }
            check =  arr.length;

        }
        let temp ="";
       
        for(let i=0; i<arr.length; i++){
            temp = temp + arr[i];
        }
        arr1.push(base2[temp]);
        print(arr1,screen);
    }
    else{
        alert("Invalid number "+ screen +" in base 2");
    }
    }

    else{
        alert("Your conversion from "+ from+" to "+ to+" is not supported yet") ;
    }



}
function print(arr1,screen){
    let result = "";
    let n = arr1.length-1;
   for(let i=n; i>=0;i--){
       result = result + arr1[i];
   }
   alert(screen + " in base 2 is " + result + " in base 8");
   document.getElementById("screen").innerHTML = result;
  

}

function number(value1){
    let screen =  document.getElementById("screen").textContent;
if(screen !=0){
    screen = screen+value1;
    document.getElementById("screen").innerHTML = screen;
}
else{
    document.getElementById("screen").innerHTML = value1;
}
}

function validate(value1,base){
    let check1 =0;
    let check =0;
if(base=="Base 2"){
    for(let i=0; i<value1.length;i++){
        if(value1[i] =="1" || value1[i] == "0"){
            check =2;
        }
        else{
            check1 =1;
        }
       
    }
    if(check1==1){
        return false;
    }
    else{
        return true;
    }
}
}