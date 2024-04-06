<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&family=Rubik+Glitch+Pop&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<title>nike-shop-concepte</title></head><body class="body"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-bag" viewBox="0 0 16 16">
<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg><h1 class="nike-tt">NIKE</h1><h3 class="jdi-tt">JUST DO IT.</h3><img src="img/nike1.png" alt="a" class="nike1">
<img src="img/nike2.png" alt="a" class="nike2"><img src="img/nike3.png" alt="a" class="nike3"><div class="d-ligne"></div>
<div class="d-circle"></div><div class="color-pick-1"></div><div class="color-pick-2"></div><div class="color-pick-3"></div>
<i class="bi-bi-bag"></i><style>.color-pick-1 {height: 30px;width: 30px;border-radius: 50%;background: lightblue;
border: 2px solid white;position: relative;top: -1380px;right: -1100px;z-index: 999;transition: 2s ease;
}.color-pick-2 {height: 25px;width: 25px;border-radius: 50%;background: yellow;border: 2px solid white;position: relative;
top: -1435px;right: -1170px;z-index: 999;transition: 2s ease;} .color-pick-3 { height: 30px;width: 30px;border-radius: 50%;
background: red;border: 2px solid white;position: relative;top: -1510px; right: -1220px;z-index: 999; transition: 2s ease;
}.d-ligne {height: 1300px;width: 100px;background: white;rotate: 30deg;position: relative;right: -1000px;top: -500px;
filter: drop-shadow(0 20px 10px #363753);}.d-circle {height: 350px;width: 350px;background: white;rotate: 30deg;
position: relative;right: -900px;top: -1400px;filter: drop-shadow(0 -1px 10px #363753);border-radius: 50%;}
.nike-tt {font-family: "Bebas Neue", sans-serif;scale: 6;position: relative;right: -4000px;top:200px}.jdi-tt {font-family: "Rubik", sans-serif;
position: relative;right: -300px;top: 250px;}.body {background-color: #DFE3EE;transition: 0.1s ease;overflow: hidden;
}.nike1 {height: 92px;width: auto;scale: 9;position: relative;top: 135px;right: -1040px;rotate: -45deg;z-index: 10;
visibility: hidden;} .nike2 {height: 80px;width: auto;scale: 10;position: relative;top: 100px;right: -965px;rotate: -45deg;
z-index: 10;visibility: hidden;}   .nike3 {height: 70px;width: auto;scale: 8.5;position: relative;top: 100px;right: -890px;
rotate: -45deg;z-index: 10;}.bi-bi-bag {background: #363753;height: 20px;width: 120px;color: white;margin: 10px;
padding: 10px;border-radius: 5%;position: relative;right: -830px;top: 150px;z-index: 999;transition: 0.5s ease;}
.bi-bi-bag:hover {scale: 1.02;filter: drop-shadow(0 0px 500px black);}</style><script>const colr_pick_1 = document.querySelector(".color-pick-1");
const colr_pick_2 = document.querySelector(".color-pick-2");const colr_pick_3 = document.querySelector(".color-pick-3");
const nike1 = document.querySelector(".nike1");const nike2 = document.querySelector(".nike2");const nike3 = document.querySelector(".nike3");
const body = document.querySelector(".body");colr_pick_1.addEventListener("click", () => {body.style.background = "#DFE3EE";
nike1.style.visibility = "hidden";nike2.style.visibility = "hidden";nike3.style.visibility = "visible";
});colr_pick_2.addEventListener("click", () => {body.style.background = "#ffd166";nike1.style.visibility = "hidden";
nike2.style.visibility = "visible";nike3.style.visibility = "hidden";});colr_pick_3.addEventListener("click", () => {
body.style.background = "#ef476f";nike1.style.visibility = "visible";nike3.style.visibility = "hidden";
nike2.style.visibility = "hidden";});</script></body></html> // made by karma
