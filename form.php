<?php


if (isset($_POST["name"])) { 
    echo "Your Name: " . iconv("utf-8", "cp1251", $_POST["name"]) . "<br/>"; 
    echo "Your number: " . $_POST["phone"] . "<br/>";
    }
?>