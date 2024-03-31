<?php
$a = $_POST['whats'];
$b = $_POST['contact'];
$c = $_POST['country'];
header("Location:https://api.whatsapp.com/send?phone=$c$a&text=Hola%20$b%20te%20comparto%20mi%20VCard:%20https://vcard.jonyjg.com/");
?>