<?php
    @session_start();
    $start = microtime(true);
    $x = $_GET["X"];
    $y = $_GET["Y"];
    $r = $_GET["R"];

    $currentTime = date("H:i:s");

    if (!(is_numeric($x) && is_numeric($y) && is_numeric($r))){
        array_push ($_SESSION['arr'],"<tr> <td colspan='4'><b>ARGUMENTS IS INCORRECT!</b></td> </tr>");
    }elseif (
        ($x >= 0 && $y >= 0 && $y <= ($r / 2) && $x <= $r) ||
        ($x <= 0 && $y >= 0 && ($x * $x + $y * $y) <= ($r / 2) * ($r / 2)) ||
        ($x <= 0 && $y <= 0 && $y >= (-$r / 2) * $x - $r)
       ){
        array_push ($_SESSION['arr'],"<tr> <td>$x</td> <td>$y</td> <td>$r</td> <td><b>TRUE!</b></td> </tr>");
    }
    else{
        array_push ($_SESSION['arr'],"<tr> <td>$x</td> <td>$y</td> <td>$r</td> <td><b>FALSE!</b></td> </tr>");
    }

      echo "<!DOCTYPE HTML> <html> <head> <meta charset='UTF-8'> <title>Points</title>
              <link rel='shortcut icon' href='img/favicon.ico'>
              <link rel='stylesheet' type='text/css' href='css/main.css'>
            </head> <body> <center>";
      echo "<div class='container' style='padding:20px 0px;'> <table class='points'>
              <tr>  <td>X</td> <td>Y</td> <td>R</td> <td>CHECK</td>  </tr> ";
        foreach ($_SESSION['arr'] as $item) {
          	echo $item;

        }

      echo "</table> <br>";
      echo "( CURRENT TIME - $currentTime ) <br>";

      $time = round(microtime(true) - $start, 4);
      if (time == 0)
        echo "( SCRIPT TIME - less than 0.0001 sec. ) </div>";
      else
        echo "( SCRIPT TIME - $time sec. ) </div>";

      echo "</center> </body>";
?>
