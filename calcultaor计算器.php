<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table  align="center" >
	<form action="" method="get">
	<tr>
	  <td>
	   num1<input type="text" name="num1" >
	   <select name="sul" id="">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	   </select>
	   num2<input type="text" name="num2" >
	</td>
	<tr>
	    <td><input type="submit" value="计算"/></td>
	</tr>
	<tr>
				
	</tr>
	</tr>
	</form>        
	</table>
</body>
</html>
<?php
@$num1=$_GET['num1'];
@$num2=$_GET['num2'];
@$sul=$_GET['sul'];
if( isset($num1)&&isset($num2)){
echo"<hr>";
	if (is_numeric($num1)&&is_numeric($num2)) {
		switch ($sul) {
		case '+':
		echo $sum=$num1+$num2;
		break;
		case '-':
		echo $sum=$sum1-$sum2;
		break;
		case '*':
		echo $sum=$num1*$sum2;
		break;
		case '/':
		if ($num2!=0) {
		echo $sum=$num1/$num2;
		}
		else{
		echo "0不能为除数";
		}
		break;
		}
		echo "结果:{$num1} {$sul} {$num2}={$sum}";
	}
	else echo "请输入正确的数字格式";
    }
?>