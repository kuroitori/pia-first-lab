<?php
 session_start();
 $_SESSION['arr'] = array();
?>
 <html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PIP_Lab_1</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <script type="text/javascript">
    function validate(_form){

      var fail = false;
      var Y = _form.Y.value;
      var R = _form.R.value;
      var regexp = /^-?[0-9]\d*(\.\d+)?/;

      if (Y <= -3 || Y >= 3 || !regexp.test(Y)){
        fail = "Некорректно задано значение Y \n";
      }
      if (R <= 0 || R >= 4 || !regexp.test(R)){
        if (!fail) fail = "";
        fail += "Некорректно задано значение R";
      }

      if (fail){
        alert(fail);
        return false;
      }
      else{
        return true;
      }

  }
  </script>
</head>

<body >
  <center>


  <div class="container header">
    <span class="left">Гр. P3210</span>
    <span class="center">Заводов Андрей / Черных Дмитрий</span>
    <span class="right">Вар. 1000</span>
  </div>

    <div class="container task">
      <img class="task_image" src="img/task.png" alt="task_picture">
      <img class="task_text" src="img/task_text.png" alt="task_text">
    </div>

    <div class="container form">
      <form class="form" action="checkPoints.php" method="get" onsubmit="return validate(this)" target="_blank">

        <table>
        				<tr>
                  <td></td>
        					<td><input type="radio" id="-4" name="X" value="-4">-4</td>
        					<td><input type="radio" id="-3" name="X" value="-3">-3</td>
        					<td><input type="radio" id="-2" name="X" value="-2">-2</td>
        				</tr>
        				<tr>
                  <td> X = </td>
        					<td><input type="radio" id="-1" name="X" value="-1">-1</td>
        					<td><input type="radio" id="0" name="X" value="0" checked>0</td>
        					<td><input type="radio" id="1" name="X" value="1">1</td>
        				</tr>
        				<tr>
                  <td></td>
        					<td><input type="radio" id="2" name="X" value="2">2</td>
        					<td><input type="radio" id="3" name="X" value="3">3</td>
        					<td><input type="radio" id="4" name="X" value="4">4</td>
        				</tr>
        </table>

        <label for="Y"> Y = </label>
        <input class="input_Y" id="Y" type="text" name="Y" placeholder="(-3 .. 3)"><br>

        <label for="R"> R = </label>
        <input class="input_R" id="R" type="text" name="R" placeholder="(-1 .. 4)"><br>

        <input class="submit" type="submit" name="submit" value=" ПРОВЕРИТЬ ">
      </form>
      <!--<div class="answer">some answer</div>-->

    </div>


    <div class="container footer">
        <span class="left">
          <a href="https://se.ifmo.ru/">
            <img id="VT_logo" src="img/vt_logo.png" width="50" height="50" alt="logo">
          </a>
        </span>
        <span class="center">ПИП 2017 г.</span>
        <span class="right">Е. Цопа</span>
    </div>
    </center>
</html>
