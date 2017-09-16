<?php
    @session_start();
    $start = microtime(true);


//    $_SESSION['arr'] = array();
    $x = $_GET["X"];
    $y = $_GET["Y"];
    $r = $_GET["R"];

    $currentTime = date("H:i:s");

/*    if(htmlspecialchars($x) || htmlspecialchars($y) || htmlspecialchars($r)) {
        array_push ("<tr> <td colspan='4'><b>HTML special chars is found!</b></td> </tr>");}else*/
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
      echo "<div class='container header'><span class='left'>Гр. P3210</span>
            <span class='center'>Заводов Андрей / Черных Дмитрий</span><span class='right'>Вар. 1000</span></div>";
      echo "<div class='container task'><img class='task_image' src='img/task.png' alt='task_picture'>
            <img class='task_text' src='img/task_text.png' alt='task_text'></div>";

      echo "<div class='container' style='padding:20px 0px;'> <table class='points'>
              <tr>  <td>X</td> <td>Y</td> <td>R</td> <td>CHECK</td>  </tr> ";
        foreach ($_SESSION['arr'] as $item) {
          	echo $item;

        } 
	
      echo "</table> <br>";

      echo "<a href='index.php'><button class='submit'>close</button></a><br><br>";
      echo "( CURRENT TIME - $currentTime ) <br>";

      $time = round(microtime(true) - $start, 4);
      if (time == 0)
        echo "( SCRIPT TIME - less than 0.0001 sec. ) </div>";
      else
        echo "( SCRIPT TIME - $time sec. ) </div>";
	//check

      echo "<div class='container footer'><span class='left'><a href='https://se.ifmo.ru/'>
            <img id='VT_logo' src='img/vt_logo.png' width='50' height='50' alt='logo'></a>
            </span><span class='center'>ПИП 2017 г.</span><span class='right'>Е. Цопа</span></div>";

      echo "</center> </body>";

?>
