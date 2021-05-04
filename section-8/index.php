<?php


if (isset($_POST['submit'])){

    $sentence = $_POST['sentence'];
    $length = strlen($sentence);

    echo "This length of the string is " . $length;

}
