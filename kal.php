<?php
header('Content-type: text/html; charset=utf-8');
$a=$_POST['a'];$b=$_POST['b'];$a=(int)$a;$b=(int)$b;
if($_POST['dey']=='a')$s=$a+$b;
else if($_POST['dey']=='b')$s=$a-$b;
else if($_POST['dey']=='c')$s=$a*$b;
else if($_POST['dey']=='d'){if($b==0)$s="Делить на ноль нельзя";
else $s=$a/$b;}
echo $s;
?>