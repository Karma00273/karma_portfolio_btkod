<?php $count = 0; /* - CUSTOMS PRICES PANNEL - */$design = 160; $user_sys = 100; $animation = 50; $dash = 50;$CGI = 100; $fiv_ewebpage = 300;$M_VEr = 30;$s_hop = 150;
/* - TIME PANNEL - */$day = 0; ?><!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&display=swap" rel="stylesheet">
<title>Karma Portfolio</title></head><div class="naviguator"><div class="nav"><h3 class="nav-portfolio">portfolio</h3><h3>/</h3><h3 class="nav-project">project</h3></div></div>
<img src="img/abstrait.png" alt="" class="abstrait-2"><img src="img/abstrait.png" alt="" class="abstrait-3"><img src="img/geo_donnuts.png" alt="" class="abstrait-4">
<img src="img/abstract-2.png" alt="" class="abstrait-5"><body class="body"> <div id="cursor"></div><img src="img/K(7).png" alt="" class="logo">
<button class="c-p-btn-2">CONTACT ME</button><div class="box-001"><div class="blue-bar"></div> <img src="img/abstrait.png" alt="" class="abstrait-1"><img src="img/K(2).png" alt="" class="title-img-1">
<img src="img/K(5).png" alt="" class="t-arr-img"><img src="img/K(5).png" alt="" class="t-arr-img-2"><div class="img-logo-section"><div class="circle-4"></div>
<img class="react-logo" src="img/react.png" alt=""><img class="js-logo" src="img/js.png" alt=""> <img class="css-logo" src="img/css.png" alt=""><img class="html-logo" src="img/html.png" alt=""><img class="php-logo" src="img/php.png" alt="">
<img class="figma-logo" src="img/figma.png" alt=""></div><h1 class="fast">SCROLL FASTER!!!</h1><div class="about-me-section"><h3 class="about-me-text">Hi, I am a small web developer but I am very competent 
<br> I can create sites for you based on your requirements <br> I enjoy teamwork, and my work is always <br> well done. Sometimes I can 
<br> take a little too much time on a project since I am a perfectionist.</h3><div class="circle-1"></div><div class="circle-2"></div><div class="circle-3"></div></div>
<div class="circle-7"></div><div class="circle-8"></div><div class="circle-9"></div><h1 class="skills-text">My skills and technology</h1><div class="circle-5"></div><div class="circle-6"></div><div class="section-1"><div class="a-1"><img class="a" src="img/a.jpg" alt=""> <h3 class="a-t">JUNIOR</h3>
<h3 class="a-st">the junior rate is between $50 and $100 <br>I make 3 web pages for <br> 2 week of work and <br> I don't do <br>
design at this price, you must <br> send me your elements.</h3></div><div class="b-1"> <h3 class="b-t">ORDINARY</h3> 
<h3 class="b-st">the price of the ordinary <br>The price is from $150 to $225 <br>I design 3 pages with more complicated functions and <br>
activities such as a forum, a podcast, and others. <br>This kind of system takes me 1 month or 3, depending on lots of <br>
things outside and within the project.</h3><img class="b" src="img/b.jpg" alt=""><h5 class="b-st"></h5> </div>
<div class="c-1"><h3 class="c-t">professional</h3><h3 class="c-st">the professional rate <br>I design your website for 1 week, produce renderings<br> for you, and offer you ideas. After which,
<br> I code more complex features like<br> server renderings and starting the animation, among much more. <br>
This process takes around 3 to 6 months. </h3><img class="c" src="img/c.png" alt=""><h5 class="c-st"></h5></div></div><div class="c-p-box">
<button class="c-p-btn">SEE MORE</button><DIV class="text-box"><h1 class="c-p-tit">custom prices</h1> <div class="st-box" id="st-box">
<h3 class="s-ptt-1">DESIGN YOUR WEBSITE</h3><h3 class="s-ptt-2">USERS SYSTEMS</h3><h3 class="s-ptt-3">ANIMATIONS AND EFFECTS</h3>
<h3 class="s-ptt-4">DASHBOARD</h3><h3 class="s-ptt-5">CREATE A GRAPHIC IDENTITY</h3><h3 class="s-ptt-6">5 WEB PAGE</h3>
<h3 class="s-ptt-7">MOBILE VERSION EDIT</h3><h3 class="s-ptt-8">SHOP</h3></DIV class="t-counter">
<h1 class="count"><?= $count; ?> $</h1><h2 class="day"><?= $day . " " . "DAYs" ?></h2> </div><div class="check" id="check"> 
<form method="POST"><input type="checkbox" name="check1" id="check-1" class="check-1" value="on"> <script>
const checkbox1 = document.getElementById("check-1");let count = <?= $count; ?>;  let day = <?= $day; ?>; 
let design = <?= $design; ?>; checkbox1.addEventListener("change", function() { this.checked ? count += design : count -= design;
this.checked ? day += 8 : day -= 8;if (count < 0) {count = 0; } if (day < 0) {day = 0; }
document.querySelector('.day').textContent = day + " " + "DAYs";document.querySelector('.count').textContent = count + ' $';
});</script><input type="checkbox"class="check-2" id="check-2"><script>const checkbox2 = document.getElementById("check-2");
let user = <?= $user_sys; ?>; checkbox2.addEventListener("change", function() {this.checked ? count += user : count -= user;
this.checked ? day += 21 : day -= 21;if (count < 0) {count = 0; } if (day < 0) {day = 0; }
document.querySelector('.day').textContent = day + " " + "DAYs";document.querySelector('.count').textContent = count + ' $'; });
</script><input type="checkbox"class="check-3" id="check-3"><script> let anime = <?= $animation; ?>; 
const checkbox3 = document.getElementById("check-3");checkbox3.addEventListener("change", function() {
this.checked ? count += anime : count -= anime; this.checked ? day += 5 : day -= 5;if (count < 0) {count = 0; } if (day < 0) {day = 0; }
document.querySelector('.day').textContent = day + " " + "DAYs";document.querySelector('.count').textContent = count + ' $';});</script>
<input type="checkbox"class="check-4" id="check-4"><script>const checkbox4 = document.getElementById("check-4"); 
let dash = <?= $dash; ?>; checkbox4.addEventListener("change", function() {this.checked ? count += dash : count -= dash;this.checked ? day += 14 : day -= 14;if (count < 0) {count = 0; } if (day < 0) {day = 0; }
document.querySelector('.day').textContent = day + " " + "DAYs";document.querySelector('.count').textContent = count + ' $';});</script>
<input type="checkbox"class="check-5" id="check-5"><script>const checkbox5 = document.getElementById("check-5");
let cgi = <?= $CGI; ?>; checkbox5.addEventListener("change", function() {this.checked ? count += cgi : count -= cgi;
this.checked ? day += 7 : day -= 7;if (count < 0) {  count = 0; } if (day < 0) {day = 0; }document.querySelector('.day').textContent = day + " " + "DAYs";
document.querySelector('.count').textContent = count + ' $'; }); </script><input type="checkbox"class="check-6" id="check-6"><script>
let fivepage = <?= $fiv_ewebpage; ?>; const checkbox6 = document.getElementById("check-6");checkbox6.addEventListener("change", function() {
this.checked ? count += fivepage : count -= fivepage;this.checked ? day += 60 : day -= 60;if (count < 0) { count = 0; } if (day < 0) {day = 0; }
document.querySelector('.day').textContent = day + " " + "DAYs";document.querySelector('.count').textContent = count + ' $';
});</script> <input type="checkbox"class="check-7" id="check-7">  <script>let vermobile = <?= $M_VEr; ?>; 
const checkbox7 = document.getElementById("check-7");checkbox7.addEventListener("change", function() {
this.checked ? count += vermobile : count -= vermobile;this.checked ? day += 12 : day -= 12;
if (count < 0) { count = 0; } if (day < 0) {day = 0; }document.querySelector('.day').textContent = day + " " + "DAYs";
document.querySelector('.count').textContent = count + ' $'; }); </script><input type="checkbox"class="check-8" id="check-8"><script>
let sh0p = <?= $s_hop; ?>; const checkbox8 = document.getElementById("check-8");checkbox8.addEventListener("change", function() {
this.checked ? count += sh0p : count -= sh0p;this.checked ? day += 30 : day -= 30;  if (count < 0) {count = 0; }
if (day < 0) {day = 0; }document.querySelector('.day').textContent = day + " " + "DAYs";
document.querySelector('.count').textContent = count + ' $';});</script> </form> </div>  </div> </div><div class="box-002">  <div class="all-project"> <div class="circle-01"></div> <div class="circle-02"></div> <h3 class="tt-project1">Here is a project where you can see my transitions and the colors <br>
that I use I want you to analyze the way I <br>see things despite that it is usually more abstract <br> but its a more simplistic project <br>
is possible that I add a function to see <br> a purchase panel in this project we <br> can change the flow of the shoe that we personally want its <br>
a project 8% the style is beautiful but it <br> lacks functionality I will do my best on your website to reassure you </h3>
<h3 class="tt-project2">Here is a project where it displays <br> the time of Toronto in Canada when you 
press  the bulb the <br> background turns yellow like a <br> light which turns on if you do not live 
<br> in its time zone it is of no use to you but it remains a quick project <br> with no real purpose apart from showing you some of the easy 
<br> things I'll do in about thirty minutes</h3><div class="box-1-2-project"> </div><div class="box-2-2-project"> </div>  </div><script>
const a = document.querySelector(".a-1"); const b = document.querySelector(".b-1");const c = document.querySelector(".c-1"); const at = document.querySelector(".a-t");  const bt = document.querySelector(".b-t");
const ct = document.querySelector(".c-t");const b_1_2_project = document.querySelector(".box-1-2-project");
const ast = document.querySelector(".a-st"); const bst = document.querySelector(".b-st");
const cst = document.querySelector(".c-st");const b_2_2_project = document.querySelector(".box-2-2-project");
const aim = document.querySelector(".a");const bim = document.querySelector(".b");const cim = document.querySelector(".c"); const aimg = document.querySelector(".t-arr-img");
const cpbtn = document.querySelector(".c-p-btn");const cpbtn02 = document.querySelector(".c-p-btn-2");const cptit = document.querySelector(".c-p-tit");
const check1 = document.getElementById(".check-1");const box002 = document.querySelector(".box-002");
const allcheck = document.querySelector(".check");const stbox = document.querySelector(".st-box");
const count_text = document.querySelector(".count");const box001 = document.querySelector(".box-001");
const day_text = document.querySelector(".day");const body = document.querySelector(".body");const navProject = document.querySelector(".nav-project");
const navPortfolio = document.querySelector(".nav-portfolio"); cpbtn.addEventListener("click", () => {
cptit.style.opacity = "0%";cpbtn.style.opacity = "0%";allcheck.style.opacity = "100%";stbox.style.opacity = "100%";
count_text.style.opacity = "100%";day_text.style.opacity = "100%";}); a.addEventListener("mouseenter", () => {
a.style.filter = "grayscale(100%)";ast.style.visibility = "visible";b.style.filter = "grayscale(0%)";
bst.style.visibility = "hidden";c.style.filter = "grayscale(0%)";cst.style.visibility = "hidden";aim.addEventListener("mouseenter", () => {
a.style.filter = "grayscale(100%)";ast.style.visibility = "visible";});ast.addEventListener("mouseenter", () => {
a.style.filter = "grayscale(100%)";ast.style.visibility = "visible";});});aim.addEventListener("mouseout", () => {
a.style.filter = "grayscale(0)";ast.style.visibility = "hidden";at.style.visibility = "visible";});b.addEventListener("mouseenter", () => {
b.style.filter = "grayscale(100%)";bst.style.visibility = "visible";a.style.filter = "grayscale(0%)";ast.style.visibility = "hidden";
c.style.filter = "grayscale(0%)";cst.style.visibility = "hidden";bim.addEventListener("mouseenter", () => {b.style.filter = "grayscale(100%)";
bst.style.visibility = "visible";});bst.addEventListener("mouseenter", () => {b.style.filter = "grayscale(100%)";
bst.style.visibility = "visible";});});bim.addEventListener("mouseout", () => {b.style.filter = "grayscale(0)";
bst.style.visibility = "hidden";bt.style.visibility = "visible";});cim.addEventListener("mouseout", () => {
c.style.filter = "grayscale(0)";cst.style.visibility = "hidden";ct.style.visibility = "visible";});c.addEventListener("mouseenter", () => {
c.style.filter = "grayscale(100%)";cst.style.visibility = "visible";a.style.filter = "grayscale(0%)";ast.style.visibility = "hidden";
b.style.filter = "grayscale(0%)";bst.style.visibility = "hidden";cim.addEventListener("mouseenter", () => {c.style.filter = "grayscale(100%)";
cst.style.visibility = "visible";});cst.addEventListener("mouseenter", () => {c.style.filter = "grayscale(100%)";
cst.style.visibility = "visible";});});cim.addEventListener("mouseout", () => {c.style.filter = "grayscale(0)";
cst.style.visibility = "hidden";ct.style.visibility = "visible";});const fast = document.querySelector(".fast");
aimg.addEventListener("click", () => {body.style.overflow = "visible";document.body.style.overflowX = "hidden";
fast.style.visibility = "hidden";window.scrollTo({top: 7900, behavior: 'smooth' });setTimeout(function() {fast.style.visibility = "visible";
}, 10000);});const aimg2 = document.querySelector(".t-arr-img-2");aimg2.addEventListener("click", () => {fast.style.visibility = "hidden";
body.style.overflow = "hidden";window.scrollTo({top: 0, behavior: 'smooth' });setTimeout(function() {fast.style.visibility = "visible";
}, 10000);});const cpbtn2 = document.querySelector(".c-p-btn-2");cpbtn2.addEventListener("click", () => {var myWindow;setTimeout(() => {    
  var url = 'https://drive.google.com/file/d/1QX9aKZ8ukc8uEpMZybVDSMcOJf2Hi0Ts/view?usp=sharing';
var largeurFenetre = 600;var hauteurFenetre = 500;var leftPosition = (screen.width - largeurFenetre) / 2;var topPosition = (screen.height - hauteurFenetre) / 2;
var options = 'width=' + largeurFenetre + ',height=' + hauteurFenetre + ',left=' + leftPosition + ',top=' + topPosition;
if (myWindow) { myWindow.close(); }else { myWindow =  window.open(url, '_blank', options); }}, 10) });
function isMobileDevice() {return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
}if (isMobileDevice()) {window.location.href = 'mobile-version.php';  }window.addEventListener('beforeunload', function() {
window.scrollTo(0, 0); });document.addEventListener('mousemove', function(e) {var cursor = document.getElementById('cursor');
cursor.style.left = e.pageX + 'px';cursor.style.top = e.pageY + 'px';});navProject.addEventListener('click', () => {
box001.style.display = "none";box002.style.display = "block";cpbtn02.style.display = "block";navProject.style.opacity = "1";
navPortfolio.style.opacity = "30%";body.style.overflowY = "visible";});navPortfolio.addEventListener('click', () => {box001.style.display = "block";box002.style.display = "none";
navProject.style.opacity = "30%";navPortfolio.style.opacity = "1";body.style.overflow = "hidden";
window.scrollTo({top: 0, behavior: 'smooth' });});b_1_2_project.addEventListener('click', () => {window.location.href = "projet-2.php";
});b_2_2_project.addEventListener('click', () => {window.location.href = "project-1.php";});</script><?php 
/*  01001110 01101111 01110100 01110010 01100101 00100000 01110000 01100101 01110010 01100101 00100000 01110001 01110101 01101001 00100000 01100101 01110011 01110100 00100000 01100100 
01100001 01101110 01110011 00100000 01101100 01100101 01110011 00100000 01100011 01101001 01100101 01110101 01111001 00101100 00100000 01110100 01101111 01101110 00100000 01101110 01101111 01101101 00100000 01100101 01110011 01110100 00100000 01110011 01100001 01101001 
01101110 01110100 01001110 01101111 01110100 01110010 01100101 00100000 01110000 01100101 01110010 01100101 00100000 01110001 01110101 01101001 00100000 01101100 01100101 01110101 
01110010 00101110 01000110 01100001 01101001 01110011 00100000 01110001 01110101 01100101 00100000 01110100 01101111 01110101 01110100 00100000 01101100 01100101 00100000 01101101 01101111 01101110 01100100 01100101 00100000 01110100 01101111 01101110 00100000 01110010 
01101111 01111001 01100001 01110101 01101101 01100101 00101110 01000110 01100001 01101001 01110011 00100000 01110001 01110101 01100101 00100000 01110100 01100001 00100000 01110110 
01100101 01101100 01101111 01101110 01110100 01100101 01100101 00100000 01110011 01100101 00100000 01110010 01100101 01100001 01101100 01101001 01110011 01100101 00100000 01110011 
01110101 01110010 00100000 01101100 01100001 00100000 01110100 01100101 01110010 01110010 01100101 00100000 01100011 01101111 01101101 01101101 01100101 00100000 01100111 01100001 
01101101 01101101 01101001 01110011 00100000 00101101 01000001 01101101 01100101 01101110 00100000 TpHOt8a1WrxtC*/ ?><style>
.body {background: #000204;filter:blur(100%);height: 100vh;scroll-behavior: smooth;}.html {scroll-behavior: smooth;}.title-img-1 {height: 1000px;width:
90%;transform: rotateY(30deg);filter: drop-shadow(0 0 25px blue);position: relative;top: -5620px;right: -70px;justify-content: center;margin: 0;padding: 0;transition:
1s ease;align-items: center;rotate: 90;visibility: visible;}.t-arr-img {height: 5%;width: 2.5%;position: relative;top: -5840px;right: 600px;transition: 0.3s ease;
transform: scale(1); z-index: 5;rotate: 90;}.t-arr-img:hover {transform: scale(2);border-radius: 250% ;box-shadow: 10px 25px 75px blue;} 
.logo {scale: 0.2;filter: drop-shadow(0 0 25px blue);position: fixed;top: -30%;right: 82%;transition: 1s ease;}.s-t-1 {color: white;}.a {opacity: 100%;height: 500px;width: 300px;
background: white;position: relative;top: 115px;right: -50px;color: white;border-radius: 5%;z-index: -1;transition: 0.3s ease;filter: drop-shadow(0 0 500px blue);box-shadow: 0 0 10px turquoise;
transition: 1s ease;margin: 0;padding: 0;outline: none;z-index: -1;}.b {opacity: 1;width: 300px;height: 500px;background: white;position: relative;top: -200px;right: -50px;
color: white;border-radius: 5%;z-index: -3;filter: drop-shadow(0 0 500px blue);box-shadow: 0 0 25px turquoise;transition: 1s ease;margin: 0;padding: 0;outline: none;z-index: -1;}
.c {opacity: 100%;height: 500px;width: 300px;background: white;position:relative;top: -205px;right: -50px;color: white;border-radius: 5%;z-index:
-1;filter: blur(50%);filter: drop-shadow(0 0 500px blue);box-shadow: 0 0 25px turquoise;transition: 1s ease;margin: 0;padding: 0;outline: none;z-index: -1;}
.section-1 {position: relative;top: 500px;transition: 1s ease;}.a-t {color: azure;font-family: "Bebas Neue", sans-serif;position: relative;right: -150px;
top: 100px;scale: 3;filter: drop-shadow(0 0 25px black);width: 3%;height: 2.5%;margin: 0%;padding: 0%;text-align: center;z-index: 11;transition: 0.5 ease;} .b-t {color: azure;font-family: "Bebas Neue", sans-serif;position: relative;right: -140px;scale: 3;filter: drop-shadow(0 0 25px black);
transition: 1s ease;width: 4%;height: 2.5%;margin: 0%;padding: 0%;text-align: center;z-index: 11;top: 600px;transition: 0.5 ease;} .c-t {
color: azure;font-family: "Bebas Neue",sans-serif;position: relative;right: -100px;top: 600px;scale: 2.9;filter: drop-shadow(0 0 25px black);transition: 1s ease;width: 6%;
height: 2.5%;margin: 0%;padding: 0%;text-align: center;z-index: 11;transition: 0.5 ease;}.a-st {color: white;position: relative;right: -80px;top: -250px;visibility: hidden;
background: rgba(0, 0, 0, 0.27);width: 250px;z-index: 12;text-shadow: 0 0 25px blue;filter: blur(10%);}/* IF YOU ARE A HACKER CONTACT ME */
.b-st {color: white;position: relative;right: -80px;top: 200px;visibility: hidden;background: blur(100%);width: 250px;z-index: 12;text-shadow: 0 0 25px blue;
background: rgba(0, 0, 0, 0.27);filter: blur(10%);}.c-st {color: white;position: relative;right: -80px;top: 200px;visibility: hidden;
background: blur(100%);width: 250px;z-index: 12;text-shadow: 0 0 25px blue;background: rgba(0, 0, 0, 0.27);filter: blur(10%);}.a-1 {
transition: 1 ease;position: relative;top: 500px;width: 26%;height: 90%;right: -40px;z-index: 20;justify-content: center;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
.b-1 {z-index: 20;transition: 1 ease;position: relative;top: -235px;width: 26%;height: 90%;right: -565px;justify-content: center;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}.c-1 {z-index: 20;transition: 1 ease;position: relative;right: -1090px;width: 26%;height: 90%;top: -1080px;justify-content: center;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}.c-p-box {background: linear-gradient(black, darkblue);
height: 500px;width: 1375px;position: relative;right: -75px;top: 0px;border-radius: 2.5%;z-index: 10;}.c-p-tit {color: white;text-align: center;
margin: 0;position: relative;top: 100px;right: 100px;text-shadow: 0 0 25px rgba(0, 0, 0, 0.40);scale: 2;font-family: "Bebas Neue", sans-serif;
transition: 0.2s ease;}.c-p-btn {background: #5E5DF0;border-radius: 5%;box-shadow: #5E5DF0 0 10px 20px -10px;box-sizing: border-box;color: #FFFFFF;
cursor: pointer;font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,
-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;font-size: 16px;font-weight: 700;line-height: 24px;opacity: 1;
outline: 0 solid transparent;padding: 8px 18px;user-select: none;-webkit-user-select: none;touch-action: manipulation;width: fit-content;word-break: break-word;
border: 0;position: relative;right: -625px;top: 200px;transition: 0.2s ease;z-index: 200;}.text-box {color: white;position: relative;right: -100px;
z-index: -1;font-family: "Alata", sans-serif; }.check {rotate: 90deg;position: relative;right: 200px;top: 250px;margin-bottom: 10px;font-family: "Alata", sans-serif;
z-index: -1;opacity: 0%;transition: 0.1 ease;}.t-counter {position: relative;top: -100px;scale: 2;}.check-1 {rotate: -90deg;}.check-2 {rotate: -90deg;}
.check-3 {rotate: -90deg;}.check-4 {rotate: -90deg;}.check-5 {rotate: -90deg;}.check-6 {rotate: -90deg;}.check-7 {rotate: -90deg;}.check-8 {
rotate: -90deg;}.count {color: white;position: relative;right: -2925px;top: -270px;scale: 4;opacity: 0;z-index: 200;font-family: "Bebas Neue", sans-serif;
}.day {font-family: "Bebas Neue", sans-serif;position: relative;right: -1555px;top: -240px;scale: 2;opacity: 0;}.st-box {opacity: 0;transition: 0.1 ease;
z-index: 10;position: relative;top: -25px;}@media screen and (max-width: 1400px ) {.title-img-1 {height: 80%;width: 60%; /* metre du scale*/
}}@media screen and (max-width: 900px ) {.title-img-1 {height: 60%;width: 120%;top: 10%;right: 10%;}.t-arr-img {height: 5%;width: 10%;} .logo {
right: 40%;scale: 0.1;}}@font-face {font-family: 'Gill Sans';src: url('chemin/vers/gill-sans.woff2') format('woff2');}.circle-1 {background: rgba(20, 163, 202, 1);
border-radius: 50%;height: 150px;width: 150px;filter: blur(10px);position: relative;top: 1150px;right: -300px;z-index: -1;} .circle-2 {background: rgba(20, 163, 220, 1);
border-radius: 50%;height: 150px;width: 150px;filter: blur(10px);position: relative;top: 850px;right: -1000px;z-index: -1;} .about-me-text 
{color: white;position: relative;font-family: "Alata", sans-serif;right: -600px;top: 1200px;scale: 1.3;}.about-me-section {top: 500px;right: -5500px;
scale: 1.12;}.skills-text {position: relative;top: 750px;right: -125px;color: white;font-family: "Alata", sans-serif;}.react-logo {height: 150px;
width: 210px;top: 2140px;position: relative;border-radius: 15% ;filter: drop-shadow(0 0 55px lightblue);} .figma-logo {height: 75px;width: 50px;
top: 2100px;right: -680px;position: relative;border-radius: 15% ;filter: drop-shadow(0 0 55px lightblue);} .css-logo {height: 90px;width: 90px;
top: 2110px;right: -235px;position: relative;border-radius: 15% ;filter: drop-shadow(0 0 55px lightblue);} .html-logo {height: 90px;width: 90px;
top: 2110px;right: -390px;position: relative;border-radius: 15% ;filter: drop-shadow(0 0 55px lightblue);} .js-logo {height: 80px;width: 80px;
top: 2105px;right: -95px;position: relative;border-radius: 15% ;filter: drop-shadow(0 0 55px lightblue);} .php-logo {height: 85px;width: 100px;
top: 2100px;right: -530px;position: relative;border-radius: 15% ;filter: drop-shadow(0 0 55px lightblue);}.img-logo-section {position: relative;
}.circle-9 {background: rgba(20, 163, 220, 1);border-radius: 50%;height: 150px;width: 150px;filter: blur(70px);position: relative;top: 700px;
right: -1220px;z-index: -1;} .circle-4 {background: rgba(20, 163, 220, 1);border-radius: 50%;height: 150px;width: 150px;filter: blur(70px);
position: relative;top: 1450px;right: -990px;z-index: -1;} .circle-7 {background: rgba(20, 163, 220, 1);border-radius: 50%;height: 150px;width: 150px;
filter: blur(70px);position: relative;top: 1000px;right: -030px;z-index: -1;} .circle-8 {background: rgba(20, 163, 220, 1);border-radius: 50%;
height: 150px;width: 150px;filter: blur(70px);position: relative;top: 850px;right: -275px;z-index: -1;} .img-logo-section{top: 250px;right: -50px;
}.blue-bar {height: 2px;width: 250px;position: relative;top: 4000px;right: -650px;opacity: 30%;background:  linear-gradient(90deg, #3498db, #5dade2, #85c1e9, #aed6f1, #d6eaf8);
}.abstrait-1 {height: 1100px;width: 1100px;position: relative;right: 500px;top: -4250px;} .abstrait-2 {height: 1100px;width: 1100px;position: relative;
top: 8200px;right: 500px;} .abstrait-3 {height: 1100px;width: 1100px;position: relative;right: -900px;top: 6100;} .abstrait-4 {height: 1100px;
width: 1100px;position: relative;right: -900px;top: 7200;}.abstrait-5 {height: 1100px;width: 1100px;position: relative;right: -800px;top: 5200;
}.nav {position: fixed;color: white;right: 275px;top: 2;display: flex;z-index: 1000;}.nav-project {position: fixed;right: 200px;opacity: 30%;
} .nav-portfolio { position: fixed;right: 300px;} .img-logo-section {position: relative;top: -200px;} .c-p-box {top: -200px;}.c-p-btn-2 {
background: #5E5DF0;border-radius: 5%;box-shadow: #5E5DF0 0 10px 20px -10px;box-sizing: border-box;color: #FFFFFF;cursor: pointer;font-family:
Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,
"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;font-size: 16px;font-weight: 700;line-height: 24px;opacity: 1;outline: 0 solid transparent;
padding: 8px 18px;user-select: none;-webkit-user-select: none;touch-action: manipulation;width: fit-content;word-break: break-word;border: 0;
position: fixed;right: 10px;top: 20px;transition: 0.2s ease;z-index: 200;scale: 0.8;} .t-arr-img-2 {height: 5%;width: 2.5%;position: relative;
top: 1440px;right: 643px;transition: 0.3s ease;transform: scale(1); z-index: 5;rotate: -180deg;}.t-arr-img-2:hover {transform: scale(2);border-radius: 250% ;
box-shadow: 10px 25px 75px blue;} .fast {color: white;font-family: "Bebas Neue", sans-serif;position: relative;top: -1000px;right: -1355px;
scale: 2;}:-webkit-scrollbar {width: 10px;}::-webkit-scrollbar-track {background: rgba(127, 217, 253, 1); }::-webkit-scrollbar-thumb {background: 
rgba(127, 217, 253, 1); border-radius: 5px; }::-webkit-scrollbar-thumb:hover {background: rgba(127, 217, 253, 1); }html {scrollbar-color: #888 rgba(127, 217, 253, 1)1; }
#cursor {position: absolute;width: 10px;height: 10px;background-color: blue; border: 2px solid blue;border-radius: 50%;z-index: 9999;transition: 0.1s ease;
filter: blur(1px);}.circle-01 {background: rgba(20, 163, 220, 1);border-radius: 50%;height: 350px;width: 350px;filter: blur(70px);position: relative;
top: -4500px;right: 100px;z-index: -999;} .circle-02 {background: rgba(20, 163, 220, 1);border-radius: 50%;height: 150px;width: 150px;filter: blur(70px);
position: relative;top: -4000px;right: -1375px;z-index: -999;} .project-menu-text {color: white;position: relative;top: -4000px;right: -600px;
scale: 1.3;font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,
"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;}.box-002 {display: none;}.box-1-2-project {width: 550px;height: 300px;background: url(img/project-2-img-real.png);
background-size: cover ;background-position: center;position: relative;right: -150px;top: -5150px;border-radius: 10px;z-index: 999;}.tt-project1 {
position: relative;right: -800px;top: -4700px;z-index: 999;color: white;opacity: 30%;font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,
"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
}.tt-project2 {position: relative;right: -800px;top: -4600px;z-index: 999;color: white;opacity: 30%;font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,
"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
}.box-2-2-project {width: 550px;height: 300px;background: url(img/project-1-img.png);background-size: cover;background-position: center;position: relative;
right: -150px;top: -5100px;border-radius: 10px;z-index: 999;border: 2px solid white;}</style></style></body></html><?php /*

 /\_/\  
( o.o) !! KARMA CODE. / THE ONE PIECE IS REAL !! // => IM GONNA BE THE KING OF DEVELOPER !! to be continud ...
 > ^ <
 */ ?>