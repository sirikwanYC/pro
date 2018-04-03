<?
#โปรแกรมเครื่องคิดเลข ให้ไว้สำหรับศึกษาดู Code วิธีใช้ IFElse ครับ
?>
<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=windows-874″>
<title>โปรแกรมเครื่องคิดเลข</title>
</head>
<body>
<form action=”cal1.php” method=”post”>
<table align=”center” width=”50%” border=”2″ bordercolor=”#000033″>
<tr>
<td>โปรแกรมเครื่องคิดเลข</td>
</tr>
<tr>
<td><input type=”text” name=”num1″ size=”10″>&nbsp;<input type=”text” name=”num2″ size=”10″>
<input type=”checkbox” name=”sign” value=”+”> + <input type=”checkbox” name=”sign” value=”-“> –
<input type=”checkbox” name=”sign” value=”*”> * <input type=”checkbox” name=”sign” value=”/”> /
<input type=”submit” value=”Result”>

<?
$num1 = $_POST[‘num1’];
$num2 = $_POST[‘num2’];
$sign = $_POST[‘sign’];
if ($sign == “+”) { echo $num1+$num2; }
elseif ($sign == “-“) { echo $num1-$num2; }
elseif ($sign == “*”) { echo $num1*$num2; }
elseif ($sign == “/”) { echo $num1 / $num2; }
else{ echo “กรุณากรอกข้อมูลให้ครบถ้วน”; }
?>
</td>
</tr>
</table>
</form>
</body>
</html>