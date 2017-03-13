<html>
 <head>
  <meta charset="utf-8">
  <title>Калькулятор</title>
 </head>
 <body>
 	<form >
 		<p><b>Введите 1 число</b> <input required type="text" name="chislo1"> </p>
 		<p><b>Введите 2 число</b> <input required type="text" name="chislo2"></p>
 		<p><b>Выберите действие</b> <input required type="text" name="znaki"></p>
 		
 		<!--<select name="znaki">
           <option value="1">+</option>
           <option value="2">/</option>
        </select></p>-->
 		<input type='submit' name='vichislit' value='Вычислить'> <input  type="text" name="rezultat"></p>
 		
 	</form>
 </body>
 <?php
$chislo1=$_GET['chislo1'];
$chislo2=$_GET['chislo2'];
$znaki=$_GET['znaki'];
$rezultat=$_GET['rezultat'];
switch($znaki)
{
	case "+":
      echo $rezultat= $chislo1 + $chislo2;
      break;
	case "/": 
      echo $rezultat=$chislo1 / $chislo2;
	  break;
} 
 ?>
</html>