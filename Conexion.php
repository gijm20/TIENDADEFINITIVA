<center><?php 
$formulario ="
<form method='post'>
<input type='text' name='primero' />
<input type='hidden' name='segundo' value='El texto escrito es:  '/>
<input type='submit' value='URL de la página para abrirlo ;)' />
</form>";
echo $formulario;
?></center>


<?php
$primero = $_POST['primero'];
$segundo = $_POST['segundo'];?>
<center><iframe src="<?php echo $primero;?>" width="900" height="500"></iframe></center><br>

<center>
<textarea rows="1" cols="40"><?php echo $segundo, $primero; ?> </textarea></center>
