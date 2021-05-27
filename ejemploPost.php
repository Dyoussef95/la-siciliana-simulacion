
<?php

if($_POST['tipoDemanda'] == 1 ){ 
    header("Location: diario.php"); 
} 
elseif($_POST['tipoDemanda'] == 2 ){ 
    header("Location: mensual.php"); 
} 


?>

