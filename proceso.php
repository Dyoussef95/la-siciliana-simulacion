
<?php

$cyq=5;

if($_POST['tipoDemanda'] == 1 ){ 
    header("Location: diario.php?cyq=$cyq"); 
} 
elseif($_POST['tipoDemanda'] == 2 ){ 
    header("Location: mensual.php"); 
} 


?>

<?php
echo $_POST
?>

