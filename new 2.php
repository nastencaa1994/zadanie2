<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<meta charcet="utf-8"/>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('#dey').bind("click", function()
	{
		$.ajax({
			url:'kal.php',
			type:'POST',
			data:({dey:$('select[name="sele"]').val(),a:$("#first").val(),b:$("#to").val()}),
			dataTape:"text",
			beforeSend: function(){$("#rez").text("Ожидание данных");},
			success: function(data){$("#rez").text(data);}
		});
	});
});
</script>
</head>
<body>
<form method="post">
<label>Введите первое значение выражения: </label>
<input type='text' id="first" value="0"/><br/><br/>
<label>Введите второе значение выражения: </label>
<input type='text' id="to" value="0"/><br/><br/>
<label>Выберите действие: </label>

<select name="sele">
  <option value='v'></option>
  <option value='a'>сложение</option>
  <option value='b'>вычитание</option>
  <option value='c'>умножение</option>
  <option value='d'>деление</option>
</select><br/><br/>
<input type="button" id="dey" value="Готово"/>
<p><em> Ответ = <i id="rez"></i> </em></p>
</form>
</body>
</html>