<?php
    $name = $_POST['name']
    $email = $_POST['email']
    $text = $_POST['text']
    mail("angadlamichhane1@gmail.com","from websitee",$text,
"from:$name  <$email>");
echo "Thanks for submitting"

?>