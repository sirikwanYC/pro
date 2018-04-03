<?
 if(strpos($number,"+")){
  $Midtxt=explode('+',$number);
  $num1=$Midtxt[0];
  $num2=$Midtxt[1];
  echo $number." = ".($num1+$num2);
 }
 if(strpos($number,"-")){
  $Midtxt=explode('-',$number);
  $num1=$Midtxt[0];
  $num2=$Midtxt[1];
  echo $number." = ".($num1-$num2);
 }
 if(strpos($number,"*")){
  $Midtxt=explode('*',$number);
  $num1=$Midtxt[0];
  $num2=$Midtxt[1];
  echo $number." = ".($num1*$num2);
 }
 if(strpos($number,"/")){
  $Midtxt=explode('/',$number);
  $num1=$Midtxt[0];
  $num2=$Midtxt[1];
  echo $number." = ".($num1/$num2);
 }

 
 //echo $number." ".strpos($number,"+");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php easy calculator เครื่องคิดเลขอย่างง่าย บวก ลบ คูณ หาร</title>


<form name="form1" method="post" action="">
 <input type="text" name="number">
   <input type="submit" name="Submit" value="Submit">
</form>