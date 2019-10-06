//ISabel Lopez 
//N220 
// 4/9/2019


var xpos = 200;
var ypos = 200;
var xspeed = 3;
var yspeed= 3;

function calDistance(x1,y1,x2,y2) {
  var a = x1 - x2;
  var b = y1 - y2;
  return Math.sqrt(a*a + b*b);
}
function setup() {
  createCanvas(800,600);
  fill(145, 45, 229);
}

function draw() {


background(255);
if (xpos > mouseX){ 
xpos-=xspeed;
} else if (xpos < mouseX){
xpos+=xspeed;
}

if ( ypos > mouseY){
ypos-=yspeed;
} else if (ypos < mouseY){

  ypos+=yspeed;

}

let bookeeper = calDistance(xpos,ypos,mouseX,mouseY);

if (bookeeper <= 7){
fill("red");
}else if( bookeeper >= 7){
fill("black");
}
  circle ( xpos,ypos, 10 )
  }




