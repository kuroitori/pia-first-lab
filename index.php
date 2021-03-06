<?php
    session_start();
    //global vars
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

    var timeout;

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

    function makeFrame(id){
        var iframe = document.getElementById(id);
        iframe.style.display="block";
        frameFitting(id);
        for (var i=0; i<iframe.length; i++) {
        iframe[i].onclick = function() {
            clearInterval(timeout);
            timeout = setInterval("frameFitting(id)",100);
        }
    }

    function frameFitting(id) {
        document.getElementById(id).width = '100%';
        document.getElementById(id).height = document.getElementById(id).contentWindow.document.body.scrollHeight+18+'px';
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
          <img class="task_image" src="img/canvas.png" alt="task_picture">
          <img class="task_text" src="img/task_text.png" alt="task_text">
      </div>

      <div class="container form">
          <form class="form" action="checkPoints.php" method="get" onsubmit="makeFrame('result_frame');return validate(this);" target="result_frame">

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

        <input  name="range" id="range" type="range" min="1" max="4" step="1" list="rangeList" onchange="document.getElementById('rangeValue').innerHTML = this.value;">
        <datalist id="rangeList">
            <option value="1" label="1">
            <option value="2" label="2">
            <option value="3" label="3">
            <option value="4" label="4">
        </datalist>
      </form>

    </div>

    <!--result_frame-->

    <div >
        <iframe name="result_frame" height="180" width="822" id="result_frame" allowtransparenc frameborder="no" scrolling="no" seamless style="display:none"></iframe>
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
