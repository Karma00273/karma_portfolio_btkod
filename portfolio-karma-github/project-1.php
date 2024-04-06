<?php
$time_name = "America/Toronto";
date_default_timezone_set($time_name);
$heure = date("H");
$minutes = date("i");
$time = $heure . " " . "h" . " " . $minutes;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/alarm.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&family=Rubik+Glitch+Pop&display=swap" rel="stylesheet">
    <title>Light</title>
    <style>
        .ampoule {
            position: relative;
            right: -525px;
            top: 100px;
            filter: drop-shadow(0 0 70px yellow) invert(100%);
            transition: 2s ease;
        }

        .time {
            color: white;
            scale: 1.1;
            position: relative;
            right: -785px;
            top: 0;
            font-family: "Rubik Glitch Pop", system-ui;
            filter: drop-shadow(0 0 25px black);
        }

        .body {
            background: black;
            transition: 2s ease;
        }

        .gg-alarm {
            background:
                linear-gradient( to left, currentColor 5px, transparent 0) no-repeat 4.5px 6px/5px 2px,
                linear-gradient( to left, currentColor 7px, transparent 0) no-repeat 4.5px 2px/2px 6px;
            box-sizing: border-box;
            position: relative;
            display: block;
            width: 16px;
            height: 16px;
            border-radius: 100%;
            border: 2px solid transparent;
            transform: scale(var(--ggs,1));
            box-shadow: 0 0 0 2px;
            position: relative;
            top: -575px;
            right: -10px;
            filter: drop-shadow(0 0 0 25px yellow) invert(100%);
            z-index: 9999;
            filter: invert(100%);
        }
        .gg-alarm::after,
        .gg-alarm::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 6px;
            height: 2px;
            background: currentColor;
            top: -4px;
        }
        .gg-alarm::before {
            left: -5px;
            transform: rotate(-42deg);
        }
        .gg-alarm::after {
            transform: rotate(42deg);
            right: -5px;
        }
       
        @media screen and (min-height: 0px) and (max-width: 320px) and (max-height: 800px) {
       
        .time {
            right: -100px;
            top: -70px;
            transition: 2s ease;
        }
        .ampoule {
           
            right: 100px;
            top: 70px;
           
            transition: 2s ease;
        }
        
    }
    @media screen and (min-height: 0px) and (max-width: 1500px) and (max-height: 800px) and (min-width: 900px) {
       
       .time {
           right: -675px;
           top: -70px;
           transition: 2s ease;
       }
       .ampoule {
          
           right: -420px;
           top: 70px;
          
           transition: 2s ease;
       }
       
   }
    </style>
</head>
<body class="body">
    <img src="img/ampoule.png" alt="" class="ampoule">
    <h1 class="time"><?php echo $time; ?></h1>
    <i class="gg-alarm"></i>

    

    <script>
        const ampoule = document.querySelector(".ampoule");
        const body = document.querySelector(".body");
        const alarm = document.querySelector(".gg-alarm");
        const time = document.querySelector(".time");
      

        let a = 0;
        let b = 0;
       

        ampoule.addEventListener("click", () => {
            a++;
            if (a % 2 === 0) {
                body.style.background = "black";
                ampoule.style.filter = "drop-shadow(0 0 70px yellow) invert(100%)";
                alarm.style.filter = "invert(100%)";
                time.style.filter = "invert(0%)";
                
                setTimeout(() => {
                    ampoule.style.transform = "translate(0px,-20px)";
                }, 1000);
                setTimeout(() => {
                    ampoule.style.transform = "translate(0px, 0px)";
                }, 2000);
            } else {
                body.style.background = "rgba(255, 223, 2, 0.8)";
                ampoule.style.filter = "drop-shadow(0 0 50px orange) invert(0%)";
                alarm.style.filter = "invert(0%)";
                time.style.filter = "invert(100%)";
              
                setTimeout(() => {
                    ampoule.style.transform = "translate(0px,-20px)";
                }, 1000);
                setTimeout(() => {
                    ampoule.style.transform = "translate(0px, 0px)";
                }, 2000);
            }
        });

        alarm.addEventListener("click", () => {
            b++;
            if (b % 2 === 0) {
               
                options.style.visibility = "hidden";
            } else {
            
                options.style.visibility = "visible";
            }
        });

       

    </script>
</body>
</html>
